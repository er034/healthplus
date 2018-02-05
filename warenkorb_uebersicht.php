<?php
// initializ shopping cart class
include 'warenkorb.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Informationen über zusätzliche Angaben -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style_index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Titel eines Dokumentes -->
        <title>HEALTH PLUS | Einkaufswagen</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container{padding: 50px;}
        input[type="number"]{width: 20%;}
    </style>
    <script>
        function updateCartItem(obj,id){
            $.get("warenkorb_funktion.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
                if(data === 'ok'){
                    location.reload();
                }else{
                    alert('Cart update failed, please try again.');
                }
            });
        }
    </script>
</>
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
            session_start();
            if (isset($_SESSION['username'])) : ?>
                <a><?php echo $_SESSION['username']; ?> &nbsp; <a href="abmelden.php" style="color: #29ABE2; text-decoration: none">ABMELDEN</a> </a>
            <?php endif ?>
        </div>
    </div>
</nav>
<div class="container">
    <h1>Einkaufswagen</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Produkt</th>
            <th>Preis</th>
            <th>Menge</th>
            <th>Zwischensumme</th>
            <th>&nbsp;</th>
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
                    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                    <td><?php echo ''.$item["subtotal"].' Euro'; ?></td>
                    <td>
                        <a href="warenkorb_funktion.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-outline-danger" onclick="return confirm('Bist du dir sicher?')">Löschen</a>
                    </td>
                </tr>
            <?php } }else{ ?>
        <tr><td colspan="5"><p>Dein Einkaufswagen ist leer...</p></td>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td><a href="uebersicht.php" class="btn btn-outline-info"><i class="glyphicon glyphicon-menu-left"></i>Einkaufen fortfahren</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
                <td class="text-center"><strong>Gesamt <?php echo ''.$cart->total().' Euro'; ?></strong></td>
                <td><a href="checkout.php" class="btn btn-success btn-outline-secondary">Kasse<i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
        </tfoot>
    </table>
</div>


<footer>
    <nav class="footernav footernav-expand-lg footernav-light form-inline mx-auto mt-5">
        <div class="footer mx-auto text-center" id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="kontakt.php">KONTAKT</a><br>
        </div>
        <!-- Social Media Buttons-->
        <a href="https://www.facebook.com/Healthplusblog-126934821455800/" class="fa fa-facebook mr-3"></a>
        <a href="https://twitter.com/HealthPlusBlog" class="fa fa-twitter mr-3"></a>
        <a href="https://www.instagram.com/healthplusblog/" class="fa fa-instagram mr-5"></a>

    </nav>
</footer>
</body>
</html>
