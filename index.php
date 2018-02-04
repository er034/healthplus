<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">

    <title>Hello, world!</title>
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
            <li class="nav-item">
                <a class="nav-link" id="angebote" href="#">ANGEBOTE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog" href="#">BLOG</a>
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
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider_home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<div class="mt-5 text-center Oberueberschirft">NEW ARRIVALS</div>
<div class="row justify-content-center">
    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
    <a href='index.php?product=32'>
    <div class='card img-container'>
    <div class='overlay'><div>Show</div></div><img class='card-img-top' width='100%' src='images/products/kissen_herz_web.jpg'>
    <div class='card-body'><h5>Pink Pillow</h5><p class='text-muted'>35.00€</p></div></div></a></div>
    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>

    <a href='index.php?product=31'>
    <div class='card img-container'>
    <div class='overlay'><div>Show</div></div><img class='card-img-top' width='100%' src='images/products/JO-JUDY_Rose_Print_S_05_1920x1920@2x.jpg'>
    <div class='card-body'><h5>Poster "S"</h5><p class='text-muted'>10.00€</p></div></div></a></div>
    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>

    <a href='index.php?product=30'>
    <div class='card img-container'>
    <div class='overlay'><div>Show</div></div><img class='card-img-top' width='100%' src='images/products/kissen_augen_web_600x600@2x.jpg'></div>
    <div class='card-body'><h5>Pillow Eyes</h5><p class='text-muted'>35.00€</p></div></div></a></div>
    <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'></div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer>
    <nav class="footernav footernav-expand-lg footernav-light form-inline">
        <div class="footer mx-auto text-center " id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="kontakt.php">KONTAKT</a><br>
        </div>
    </nav>
</footer>
</html>