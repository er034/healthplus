<?php
// include database configuration file
include 'db.php';
?>
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
                    <a class="dropdown-item" href="angebote_abnehmpaket.php">Abnehm Paket</a>
                    <a class="dropdown-item" href="angebote_veganpaket.php">Vegan Paket</a>
                    <a class="dropdown-item" href="angebote_aufbaupaket.php">Aufbau Paket</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALES</a>
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
        <div class="form-inline my-2 ml-3" href="warenkorb_uebersicht.php">
            <a href="uebersicht.php"> <img src="bilder/suche_icon.png" width="25" height="25" alt="Suche"></a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3">
            <a href="warenkorb_uebersicht.php"> <img src="bilder/einkaufswagen_icon.png" width="25" height="25" alt="Einkaufswagen"></a>
        </div>
    </div>
</nav>
<body>
</div><div class="container">
    <div class="row justify-content-between" id="product-details">
        <div class="col-12 col-md-6">
            <img class="w-100 " src="bilder/produkt_1.jpg">
        </div>
        <div class="col-12 col-md-6 align-self-center">
            <?php
            //get rows query
            $query = $db->query("SELECT * FROM products WHERE id=1");
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
                                        <a class="btn btn-success" href="warenkorb_funktion.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
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
    </div></div>
<footer id="footer" class="mx-auto mt-5">
    <nav class="footernav footernav-expand-lg footernav-light form-inline mx-auto">
        <div class="footer mx-auto text-center " id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="kontakt.php">KONTAKT</a><br>
        </div>
    </nav>
</footer>
</body>
</html>