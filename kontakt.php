<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Informationen über zusätzliche Angaben -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="style_login.css">
    <!-- Titel eines Dokumentes -->
    <title>HEALTH PLUS | Kontakt</title>
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
    <h5>KONTAKTIERE UNS</h5>
</div>
<div align="center">
    <img src="bilder/balken.png" alt="Balken-Icon">
</div>
<div class="titel text-center">
    <h2>KONTAKT</h2>
</div>

<form method="post" action="kontaktfunktion.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Name</label>
        <input type="text" id="Name" name="Name" >
    </div>
    <div class="input-group">
        <label>E-Mail</label>
        <input type="text" id="Email" name="Email">
    </div>
    <div class="input-group">
        <label>Betreff</label>
        <input type="text" id="Betreff" name="Betreff">
    </div>
    <div class="input-group">
        <label>Nachricht</label>
        <input style="height: 200px" type="Nachricht" id="Nachricht" name="Betreff"rows="10" cols="50">
    </div>
    <div class="input-group">
        <button type="submit" class="button" name="submit">Versenden</button>
    </div>

</form>
</html>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="col-xs-12" style="height:50px;"></div>
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
