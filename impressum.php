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
    <title>HEALTH PLUS | Impressum</title>
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
            session_start();
            if (isset($_SESSION['username'])) : ?>
                <a><?php echo $_SESSION['username']; ?> &nbsp; <a href="abmelden.php" style="color: #29ABE2; text-decoration: none">LOGOUT</a> </a>
            <?php endif ?>
        </div>
    </div>
</nav>


<div class="page-header mt-5 text-center">
    <h5>IMPRESSUM</h5>
</div>
<div align="center">
    <img src="bilder/balken.png" alt="Balken-Icon">
</div>
<div class="page-content mt-5 text-center">
    <div class="legal-notice">
        <p>
            <strong>Health Plus GmbH</strong>
        </p>
        <p>Nobelstraße 10
            <br>70569 Stuttgart
            <br>Deutschland
            <br>Telefon: <span style="text-decoration: underline;">01375 82359102</span>
            <br>E-Mail: <span style="text-decoration: underline;"><a href="healthplus@web.de">healthplus@web.de</a></span>
        </p>

        <p>Geschäftsführer: Eileen Röhm, Marc Lunardi & Cedric Tippl
            <br>Inhaltlich Verantwortlicher: Marc Lunardi
            <br>Registergericht: Landesgericht Stuttgart
            <br>Registernummer: SD 345489 h
        </p>
         <p>Umsatzsteuer-Identifikationsnummer gem. § 2 UStG: DE 31509697
        </p>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<div class="col-xs-12" style="height:100px;"></div>
<footer>
    <nav class="footernav footernav-expand-lg footernav-light form-inline mx-auto mt-5">
        <div class="footer mx-auto text-center" id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="kontakt.php">KONTAKT</a><br>
        </div>
    </nav>
</footer>
</html>