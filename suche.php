<?php
include 'db.php'?>
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
    <title>HEALTH PLUS | Suchergebnisse</title>
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
    </div>
</nav>

<div class="page-header mt-5 text-center">
    <h5>DEINE SUCHERGEBNISSE</h5>
</div>
<div align="center">
    <img src="bilder/balken.png" alt="Balken-Icon">
</div>



<?php

if (isset($_POST['submit-search'])){
    $search = mysqli_real_escape_string($db, $_POST['search']);
    $sql ="SELECT * FROM products WHERE name LIKE '%$search%' OR description LIKE '%$search%' OR id LIKE '%$search%' OR price LIKE '%$search%'";
    $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);
?>
    <div class="container card-body mt-3">
    <?php
    echo "Es gibt ".$queryResult." Produkt(e)!";
?>
    <div class="col-xs-12" style="height:30px; "></div>
    <?php
    if($queryResult > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "
                <div class='card-body' style='border: 1px solid #B0C4DE';>
                <h3>".$row['name']."</h3>
                <p>".$row['description']."</p>
                <p>".$row['price'].' Euro'."</p>
                </div> <br> ";
        }?>
             <?php
    } else
        echo "Es gibt dieses Produkt nicht!";
}
?>
    </div>

<footer>
    <nav class="footernav footernav-expand-lg footernav-light form-inline mx-auto mt-5">
        <div class="footer mx-auto text-center" id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="agb.php">AGB</a>
            <a href="kontakt.php">KONTAKT</a><br>
            <a href="https://www.facebook.com/Healthplusblog-126934821455800/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/HealthPlusBlog" class="fa fa-twitter "></a>
            <a href="https://www.instagram.com/healthplusblog/" class="fa fa-instagram"></a>
        </div>
        <!-- Social Media Buttons-->

    </nav>
</footer>
</body>
