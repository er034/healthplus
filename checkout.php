
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

<!-- logged in user information -->
<?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="index_alt.php?logout='1'" style="color: red;">logout</a> </p>
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
    <title>HEALTH PLUS</title>
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
        </ul>
        <div class="form-inline my-2 ml-3" href="warenkorb_uebersicht.php">
            <a href="uebersicht.php"> <img src="bilder/suche_icon.png" width="25" height="25" alt="Suche"></a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3">
            <a href="warenkorb_uebersicht.php"> <img src="bilder/einkaufswagen_icon.png" width="25" height="25" alt="Einkaufswagen"></a>
        </div>
    </div>
</nav>
<body>
<div class="container">
    <h1>Order Preview</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
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
                    <td><?php echo '$'.$item["price"].' USD'; ?></td>
                    <td><?php echo $item["qty"]; ?></td>
                    <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                </tr>
            <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
                <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' EURO'; ?></strong></td>
            <?php } ?>
        </tr>
        </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <?php while ($row = mysqli_fetch_array($results)) { ?>

                <p><?php echo $row['firstname']; ?></p>
                <p><?php echo $row['lastname']; ?></p>
                <p><?php echo $row['email']; ?></p>
                <p><?php echo $row['street']; ?></p>
                <p><?php echo $row['housenumber']; ?></p>
                <p><?php echo $row['postcode']; ?></p>
                <p><?php echo $row['city']; ?></p>
        <?php } ?>
    </div>
    <?php
    //Bezahlmethode Auswahl durch Radio Checkbox:
    ?>
    Wähle deine Bezahlmethode:
    <br />

    <input type="radio" name="bezahlmethode"
        <?php if (isset($bezahlmethode) && $bezahlmethode=="nachname") echo "checked";?>
           value="nachname">Nachname
    <input type="radio" name="bezahlmethode"
        <?php if (isset($bezahlmethode) && $bezahlmethode=="paypal") echo "checked";?>
           value="paypal">Paypal

    <div class="footBtn">
        <a href="uebersicht.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <a href="warenkorb_funktion.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>


</div>
</body>
</html>