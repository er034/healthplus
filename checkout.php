
<?php
// include database configuration file
include 'db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// initializ shopping cart class
include 'warenkorb.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: uebersicht.php");
}

// set customer ID in session
$id = "id";
$email    = "email";
$firstname    = "firstname";
$lastname    = "lastname";
$street    = "street";
$housenumber   = "housenumber";
$postcode    = "postcode";
$city    = "city";

$_SESSION['sessCustomerID'] = 1;

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location:/~er034/abmelden.php");
}
?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif ?>

<?php
$results = mysqli_query($db, "SELECT * FROM users"); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Informationen über zusätzliche Angaben -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <!-- Titel eines Dokumentes -->
    <title>HEALTH PLUS | Kasse</title>
</head>

<!-- Beginn Body-Bereich -->
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="index.php">
        <img src="bilder/logo.png" width="250" height="33" alt="HealthPlus">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-4">
            <li class="nav-item">
                <a class="nav-link" id="blog" href="uebersicht.php">PRODUKTE</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ANGEBOTE</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="paket_01.php">Abnehm Paket</a>
                    <a class="dropdown-item" href="paket_02.php">Vegan Paket</a>
                    <a class="dropdown-item" href="paket_03.php">Aufbau Paket</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALES</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="sales_01.php">Protein Waffeln</a>
                    <a class="dropdown-item" href="sales_02.php">Protein Cookies</a>
                    <a class="dropdown-item" href="sales_03.php">Protein Pudding</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog" href="blog.php">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog" href="news.php">NEWS</a>
            </li>
        </ul>
        <div class="form-inline my-2 ml-3" href="warenkorb_uebersicht.php">
            <a href="uebersicht.php"> <img src="bilder/suche_icon.png" width="25" height="25" alt="Suche"></a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3">
            <a href="warenkorb_uebersicht.php"> <img src="bilder/einkaufswagen_icon.png" width="25" height="25" alt="Einkaufswagen"></a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3">
            <a class="nav-link h-75" id="anmelden" href="anmelden.php">ANMELDEN</a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-1">
            <a class="nav-link h-75" id="registrieren" href="registrieren.php">REGISTRIEREN</a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3 mt-5" >
            <?php include 'db.php';
            if (isset($_SESSION['username'])) : ?>
                <a> <?php echo $_SESSION['username']; ?> &nbsp; <a href="abmelden.php" style="color: #29ABE2; text-decoration: none">ABMELDEN</a> </a>
            <?php endif ?>
        </div>
    </div>
</nav>
<body>
<div class="container mt-5">
    <h1>VORSCHAU</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Produkt</th>
            <th>Preis</th>
            <th>Menge</th>
            <th>Zwischensumme</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                ?>
                <tr>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo ''.$item["price"].' Euro'; ?></td>
                    <td><?php echo $item["qty"]; ?></td>
                    <td><?php echo ''.$item["subtotal"].' Euro'; ?></td>
                </tr>
            <?php } }else{ ?>
        <tr><td colspan="4"><p>In deinem Einkaufswagen befinden sich keine Artikel...</p></td>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
                <td class="text-center"><strong>Gesamt <?php echo ''.$cart->total().' Euro'; ?></strong></td>
            <?php } ?>
        </tr>
        </tfoot>
    </table>
    <div class=" shipAddr card col-12">
        <div class="card-body text-lg-left row">
            <h4 class="card-title col-12">VERSANDDETAILS</h4>
        <?php while ($row = mysqli_fetch_array($results)) { ?>
        <div class="ml-3">
            <p><?php echo $row['firstname']; ?><br>
                <?php echo $row['lastname']; ?><br>
                <?php echo $row['email']; ?><br>
                <?php echo $row['street']; ?>
                <?php echo $row['housenumber'];?><br>
                <?php echo $row['postcode']; ?>
                <?php echo $row['city']; ?></p>
        <?php } ?>
        </div>
        </div>
    </div>
    <div class="card col-12 mt-3">
        <div class="card-body row">
            <h4 class="card-title ml-3">VERSANDOPTIONEN</h4>

            <div class="col-12">
                <div class="mt-3 row justify-content-around">
                    <div class="col-9 order-2 col-sm-3 order-sm-1">
                        <p class="h6">KOSTENLOS</p>
                    </div>
                    <div class="col-12 order-1 col-sm-8 order-sm-2">
                        <div class="font-weight-bold">Standard Lieferung</div>
                        <div class="mt-0 mt-sm-3 mb-3 mb-sm-0 text-muted">Lieferung in 3-4 Werktagen</div>
                    </div>
                    <div class="my-auto col-3 order-3 col-sm-1 order-sm-3">
                        <input type="radio" name="distributionType">
                    </div>
                </div>

                <hr>

                <div class="mt-5 row justify-content-around">
                    <div class="col-9 order-2 col-sm-3 oder-sm-1">
                        <p class="h6">6,95€</p>
                    </div>
                    <div class="col-12 order-1 col-sm-8 order-sm-2">
                        <div class="font-weight-bold">Express</div>
                        <div class="mt-0 mt-sm-3 mb-3 mb-sm-0 text-muted">Lieferung in 1-2 Werktagen</div>
                    </div>
                    <div class="my-auto col-3 order-3 col-sm-1 order-sm-3">
                        <input type="radio" name="distributionType">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="footBtn mt-3 mb-5 align-content-lg-center">
        <a href="uebersicht.php" class="btn btn-outline-info"><i class="glyphicon glyphicon-menu-left"></i>Einkaufen fortfahren</a>
        <a href="warenkorb_funktion.php?action=placeOrder" class="btn btn-success orderBtn">Bestellung aufgeben <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</body>
</html>