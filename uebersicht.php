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
    <link rel="stylesheet" href="style_uebersicht.css">

    <title>HEALTH PLUS | Alle Produkte</title>
</head>

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
        <div class="form-inline my-2 " >
            <form action="suche.php" method="POST">
                <input type="text" name="search" placeholder="Suche ein Produkt...">
                <button type="submit" name="submit-search">Suchen</button>
            </form>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3">
            <a href="warenkorb_uebersicht.php"> <img src="bilder/einkaufswagen_icon.png" width="25" height="25" alt="Einkaufswagen"></a>
        </div>
    </div>
</nav>
<div class="mt-5 text-center Oberueberschirft">
    <h5>ALLE PRODUKTE</h5>
</div>
<div align="center">
    <img src="bilder/balken.png">
</div>
<div class="container">
    <div id="products" class="row list-group">
        <div class="row justify-content-center">
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_01.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_1.jpg">
                        <div class='card-body'>
                            <h5>FIT WHEY PROTEIN</h5>
                            <h6>100% Premium Whey Protein für optimalen Muskelaufbau.</h6>
                            <p>21.99€</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none"href="produkt_02.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_2.jpg">
                        <div class='card-body'>
                            <h5>PRE WORKOUT BOOSTER</h5>
                            <h6>Für alle die beim Training 110% geben wollen!</h6>
                            <p>29.99€</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_03.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_3.jpg">
                        <div class='card-body'>
                            <h5>ERDNUSSBUTTER</h5>
                            <h6>100% Premium Erdnussbutter.</h6>
                            <p>9.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_04.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_4.jpg">
                        <div class='card-body'>
                            <h5>PROTEIN CREME</h5>
                            <h6>Der leckere proteinreiche Schokobrotaufstrich.</h6>
                            <p>6.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_05.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_5.jpg">
                        <div class='card-body'>
                            <h5>PROTEIN CHIPS</h5>
                            <h6>Unwiderstehlich knuspriger Protein-Snack.</h6>
                            <p>2.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_06.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_6.jpg">
                        <div class='card-body'>
                            <h5>HAFERFLOCKEN PULVER</h5>
                            <h6>100% feingemahlene Haferflocken.</h6>
                            <p>2.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_07.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_7.jpg">
                        <div class='card-body'>
                            <h5>PROTEIN POWER COOKIES</h5>
                            <h6>Der Protein Power-Snack für zwischendurch!</h6>
                            <p>1.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_08.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_8.jpg">
                        <div class='card-body'>
                            <h5>PROTEIN ICE CREAM</h5>
                            <h6>Einfach zuzubereitendes Protein-Eis.</h6>
                            <p>6.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="produkt_09.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/produkt_9.jpg">
                        <div class='card-body'>
                            <h5>FLAVOR DROPS</h5>
                            <h6>Verfeinere eine Vielzahl an Lebensmittel und Supplements.</h6>
                            <p>5.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="sales_01.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/sales_01.jpg">
                        <div class='card-body'>
                            <h5>PROTEIN WAFFELN</h5>
                            <h6>Naschen ohne Schuldgefühle: jederzeit & überall.</h6>
                            <p>5.99€</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="sales_02.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/sales_02.jpg">
                        <div class='card-body'>
                            <h5>PROTEIN COOKIES & CREAM</h5>
                            <h6>Proteinreicher Cookie-Snack.</h6>
                            <p>0.99</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='new-release mt-4 col-12 col-sm-6 col-lg-3'>
                <a style="text-decoration: none" href="sales_03.php">
                    <div class='card img-container'>
                        <img class='card-img-top' width='100%' src="bilder/sales_03.jpg">
                        <div class='card-body'>
                            <h5>PROTEIN PUDDING</h5>
                            <h6>Ein leckerer Snack für zwischendurch!</h6>
                            <p>4.99€</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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