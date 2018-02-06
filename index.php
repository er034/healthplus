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
    <title>HEALTH PLUS | Home</title>
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
            <a>Willkommen <?php echo $_SESSION['username']; ?> &nbsp; <a href="abmelden.php" style="color: #29ABE2; text-decoration: none">ABMELDEN</a> </a>
        <?php endif ?>
        </div>
    </div>
</nav>


<div class="slider">
    <div id="slider_home" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-slide-to="1" class="active"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>
            <li data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="produkt_01.php"><img class="img-fluid w-100" src="bilder/slider_01.jpg" alt="Fit Whey">
            </div>
            <div class="carousel-item">
                <a href="produkt_02.php"><img class="img-fluid w-100" src="bilder/slider_02.jpg" alt="Pre Workout Booster">
            </div>
            <div class="carousel-item">
                <a href="produkt_03.php"><img class="img-fluid w-100" src="bilder/slider_03.jpg" alt="Erdnussbutter">
            </div>
            <div class="carousel-item">
                <a href="produkt_04.php"><img class="img-fluid w-100" src="bilder/slider_04.jpg" alt="Protein Creme">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider_home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Zurück</span>
        </a>
        <a class="carousel-control-next" href="#slider_home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Weiter</span>
        </a>
    </div>


<div class="mt-5 text-center Oberueberschirft">
    <h5>ANGEBOTE</h5>
</div>
    <div align="center">
        <img src="bilder/balken.png" alt="Balken-Icon">
    </div>

<div class="row justify-content-center">
    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
        <a style="text-decoration: none" href="paket_01.php">
            <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/paket_01.jpg" alt="Abnehm-Paket">
                <div class='card-body'>
                    <h5>ABNEHM PAKET</h5>
                    <h6>Unser Bestseller. Das Rundum Paket für Gewichtsverlust.</h6>
                    <p>49.99€</p>
                </div>
            </div>
        </a>
    </div>

    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
        <a style="text-decoration: none" href="paket_02.php">
            <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/paket_03.jpg" alt="Vegan-Paket">
                <div class='card-body'>
                    <h5>VEGAN PAKET</h5>
                    <h6>Unsere besten veganen Produkte in einem Paket.</h6>
                    <p>109.99€</p>
                </div>
            </div>
        </a>
    </div>

    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
        <a style="text-decoration: none" href="paket_03.php">
            <div class='card img-container'>
                <img class='card-img-top' width='100%' src="bilder/paket_02.jpg" alt="Aufbau-Paket">
                <div class='card-body'>
                    <h5>AUFBAU PAKET</h5>
                    <h6>Perfekt aufeinander abgestimmtes Paket für den Muskelaufbau.</h6>
                    <p>89.99€</p>
                </div>
            </div>
        </a>
    </div>
</div>

    <div class="mt-5 text-center Oberueberschirft">
        <h5>SALES</h5>
    </div>
        <div align="center">
            <img src="bilder/balken.png" alt="Balken-Icon">
        </div>

    <div class="row justify-content-center">
        <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
            <a style="text-decoration: none" href="sales_01.php">
                <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/sales_01.jpg" alt="Protein Waffeln">
                    <div class='card-body'>
                        <h5>PROTEIN WAFFELN</h5>
                        <h6>Naschen ohne Schuldgefühle: jederzeit & überall.</h6>
                        <p>5.99€ <br>
                            <s>12.99€</s>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
            <a style="text-decoration: none" href="sales_02.php">
                <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/sales_02.jpg" alt="Protein Cookies">
                    <div class='card-body'>
                        <h5>PROTEIN COOKIES</h5>
                        <h6>Proteinreicher Cookie-Snack.</h6>
                        <p>0.99€ <br>
                            <s>2.99€</s>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
            <a style="text-decoration: none" href="sales_03.php">
                <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/sales_03.jpg" alt="Protein Pudding">
                    <div class='card-body'>
                        <h5>PROTEIN PUDDING</h5>
                        <h6>Ein leckerer Snack für zwischendurch!</h6>
                        <p>4.99€ <br>
                            <s>9.99€</s>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</html>


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
</html>
