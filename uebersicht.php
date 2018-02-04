<?php
// include database configuration file
include 'db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">

    <title>HEALTH PLUS!</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="index.php">
        <img src="bilder/logo.png" width="300" height="39" alt="HealthPlus">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PRODUKTE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Produkt 1</a>
                    <a class="dropdown-item" href="#">Produkt 2</a>
                    <a class="dropdown-item" href="#">Produkt 3</a>
                    <a class="dropdown-item" href="#">Produkt 4</a>
                    <a class="dropdown-item" href="#">Produkt 5</a>
                    <a class="dropdown-item" href="#">Produkt 6</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ANGEBOTE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="angebote_abnehmpaket.php">Abnehm Paket</a>
                    <a class="dropdown-item" href="angebote_veganpaket.php">Vegan Paket</a>
                    <a class="dropdown-item" href="angebote_aufbaupaket.php">Aufbau Paket</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    SALES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="sales_proteinwaffeln.php">Protein Waffeln</a>
                    <a class="dropdown-item" href="sales_proteincookies.php">Protein Cookies</a>
                    <a class="dropdown-item" href="sales_proteinpudding.php">Protein Pudding</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog" href="blog.php">BLOG</a>
            </li>
        </ul>
        <div class="form-inline my-2 " >
        <form action="suche.php" method="POST">
            <input type="text" name="search" placeholder="Suche ein Produkt...">
            <button type="submit" name="submit-search">Suchen</button>
        </form>
        </div>
        <div class="form-inline my-2 my-lg-1">
            <a href="warenkorb_uebersicht.php"> <img src="bilder/einkaufswagen_icon.png" width="40" height="40" alt="Einkaufswagen"></a>
        </div>
    </div>
</nav>
<div class="mt-5 text-center Oberueberschirft"><h5>ALLE PRODUKTE</h5></div>
<div align="center">
    <img src="bilder/balken.png">
</div>
<div class="container">
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                ?>
                <div class="item col-lg-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                            <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-success" href="warenkorb_funktion.php?action=addToCart&id=<?php echo $row["id"];?>">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } }else{ ?>
            <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer>
    <nav class="footernav footernav-expand-lg footernav-light form-inline mt-5">
        <div class="footer mx-auto text-center " id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="kontakt.php">KONTAKT</a><br>
        </div>
    </nav>
</footer>
</html>