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
    <title>HEALTH PLUS | Blog</title>
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
                <a>Welcome <?php echo $_SESSION['username']; ?> &nbsp; <a href="abmelden.php" style="color: #29ABE2; text-decoration: none">ABMELDEN</a> </a>
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
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href=""><img class="img-fluid w-100" src="bilder/Slider_Blog_01.jpg" alt="Fit Whey">
            </div>
            <div class="carousel-item">
                <a href=""><img class="img-fluid w-100" src="bilder/Slider_Blog_02.jpg" alt="Pre Workout Booster">
            </div>
            <div class="carousel-item">
                <a href="produkt_03.php"><img class="img-fluid w-100" src="bilder/Slider_Blog_03.jpg" alt="Erdnussbutter">
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

    <div class="page-header mt-5 text-center">
    <h5>BLOG</h5>
    <div align="center">
            <img src="bilder/balken.png" alt="Balken-Icon">
        </div>
    </div>

    <div class="col-xs-12" style="height:130px;"></div>

    <h2 class="container">RASPBERRY MANGO SMOOTHIE BOWL</h2>
    <div class="container">
    <img src="bilder/Banner_01.jpg" width="" height="">
    </div>
    <div class="container mt-2 ">
        <div class="wpb_wrapper">
            <p><strong>ZUTATEN</strong></p>
            <ul>
                <li>1 Löffel Health Plus Slim Body Shake</li>
                <li>1 Tasse Soja Milch</li>
                <li>1 Tasse gefrorene Mango</li>
                <li>1 Tasse gefrorene Himbeeren</li>
            </ul>
            <p><strong>ZUBEREITUNG</strong></p>
            <p>Alle Zutaten zusammengeben und mit Toppings füllen: ½ Tasse Müsli, ½ Kiwi, Samen Ihrer Wahl, Blaubeeren</p>

        </div>
    </div>
    <div class="col-xs-12" style="height:130px;"></div>

    <h2 class="container">CHIA SMOOTHIE WITH STRAWBERRY TOPPING</h2>
    <div class="container">
    <img src="bilder/Banner_02.jpg" width="" height="">
    </div>
    <div class="container mt-2 ">
    <div class="wpb_wrapper">
        <p><strong>ZUTATEN</strong></p>
        <ul>
            <li>2 gefrorene Bananen</li>
            <li>1/2 Tasse gefrorene Erdbeeren</li>
            <li>100ml Kokosnusswasser</li>
            <li>1 Tasse gefroren Himbeeren</li>
        </ul>
        <p><strong>ZUBEREITUNG</strong></p>
        <p>Lagern Sie den Pudding über Nacht im Kühlschrank. Den Smoothie mixen und auf den Chia Pudding mit frischen Feigen servieren.</p>

    </div>

        <div class="col-xs-12" style="height:130px;"></div>

        <h2 class="container">BLUEBERRY MUFFIN SMOOTHIE</h2>
        <div class="container">
            <img src="bilder/Banner_03.jpg" width="" height="">
        </div>
        <div class="container mt-2 ">
            <div class="wpb_wrapper">
                <p><strong>ZUTATEN</strong></p>
                <ul>
                    <li>1 Löffel Women`s Best Slim Body Shake</li>
                    <li>150ml Tasse Milch</li>
                    <li>200g Vanilie Pudding</li>
                    <li>1 Tasse gefrorene Himbeeren</li>
                    <li>1 Tasse Haferflocken</li>
                    <li>1/2 Tasse Eiswürfel</li>
                </ul>
                <p><strong>ZUBEREITUNG</strong></p>
                <p>Zutaten zusammen mischen und danach im Mixer verblenden.</p>

            </div>
</div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</html>


<div class="col-xs-12" style="height:200px;"></div>
<footer>
    <nav class="footernav footernav-expand-lg footernav-light form-inline mx-auto mt-5">
        <div class="footer mx-auto text-center" id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="agb.php">AGB</a>
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