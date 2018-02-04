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
        <div class="form-inline my-2 " href="warenkorb_uebersicht.php">
            <a href="uebersicht.php"> <img src="bilder/suche_icon.png" width="40" height="40" alt="Suche"></a>
        </div>
        <div class="form-inline my-2 my-lg-1">
            <a href="warenkorb_uebersicht.php"> <img src="bilder/einkaufswagen_icon.png" width="40" height="40" alt="Einkaufswagen"></a>
        </div>
    </div>
</nav>
<div class="container">
    <div id="slider_home" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-slide-to="1" class="active"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>
            <li data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="produkt.php"><img class="img-fluid w-100" src="bilder/slider_01.jpg" alt="Produkt 1">
            </div>
            <div class="carousel-item">
                <a href="produkt.php"><img class="img-fluid w-100" src="bilder/slider_02.jpg" alt="Produkt 2">
            </div>
            <div class="carousel-item">
                <a href="produkt.php"><img class="img-fluid w-100" src="bilder/slider_03.jpg" alt="Produkt 3">
            </div>
            <div class="carousel-item">
                <a href="produkt.php"><img class="img-fluid w-100" src="bilder/slider_04.jpg" alt="Produkt 4">
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


<div class="mt-5 text-center Oberueberschirft"><h5>ANGEBOTE</h5></div>
    <div align="center">
        <img src="bilder/balken.png">
    </div>
<div class="row justify-content-center">
    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
        <a href="angebote_abnehmpaket.php">
            <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/paket_01.jpg">
                <div class='card-body'>
                    <h6>ABNEHM PAKET</h6>
                    <p class='text-muted'>49.99€</p>
                </div>
            </div>
        </a>
    </div>

    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
        <a href="angebote_veganpaket.php">
            <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/paket_03.jpg">
                <div class='card-body'>
                    <h6>VEGAN PAKET</h6>
                    <p class='text-muted'>119.99€</p>
                </div>
            </div>
        </a>
    </div>

    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
        <a href="angebote_aufbaupaket.php">
            <div class='card img-container'>
                <img class='card-img-top' width='100%' src="bilder/paket_02.jpg">
                <div class='card-body'>
                    <h6>AUFBAU PAKET</h6>
                    <p class='text-muted'>89.99€</p>
                </div>
            </div>
        </a>
    </div>
</div>


    <div class="mt-5 text-center Oberueberschirft"><h5>SALES</h5></div>
        <div align="center">
            <img src="bilder/balken.png">
        </div>
    <div class="row justify-content-center">
        <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
            <a href="sales_proteinwaffeln.php">
                <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/sales_01.jpg">
                    <div class='card-body'>
                        <h6>PROTEIN WAFFELN</h6>
                        <p class='text-muted'>5.99€</p><p><s>12.99€</s></p>
                    </div>
                </div>
            </a>
        </div>

        <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
            <a href="sales_proteincookies.php">
                <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/sales_02.jpg">
                    <div class='card-body'>
                        <h6>PROTEIN COOKIES</h6>
                        <p class='text-muted'>0.99€</p><p><s>2.99€</s></p>
                    </div>
                </div>
            </a>
        </div>

        <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
            <a href="sales_proteinpudding.php">
                <div class='card img-container'>
                    <img class='card-img-top' width='100%' src="bilder/sales_03.jpg">
                    <div class='card-body'>
                        <h6>PROTEIN PUDDING</h6>
                        <p class='text-muted'>4.99€</p><p><s>9.99€</s></p>
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