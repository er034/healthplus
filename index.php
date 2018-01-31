<?php
include 'db.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no ">
    <meta name="description" content="Onlineshop für Nahrungsergänzungsmittel">
    <!-- Beschreibung unserer Webseite -->
    <meta name="keywords" content="Nahrungsergänzung, Online Shop , Fitness , Sport">
    <!-- Suchbbegriffe für die Suchmaschine -->
    <meta name="author" content="Eileen Röhm, Marc Lunardi, Cedric Tippl">
    <!-- Authoren der Webseite -->
    <title>HEALTH PLUS - ENJOY THE DIFFERENCE</title>
    <link rel= "stylesheet" href="style.css" type="text/css">
</head>
<div>
    <section id="header02">
    <?php
    session_start();
    // Seite?
    $page = strtolower($_GET['page']);

    // Nutzer ist angemeldet?
    // TODO: Prüfen ob Nutzer angemeldet ist

    if(isset($_SESSION['benutzer'])):
        require_once('abfrage.php');
    else:
        if($page == 'anmelden'):
            echo 'Doch <a href="index.php?page=registrieren">registrieren</a>?';
            require_once('anmelden.php');
        elseif($page == 'registrieren'):
            echo 'Doch <a href="index.php?page=anmelden">anmelden</a>?';
            require_once('registrieren.php');
        else:
            echo 'Hey! Willst du dich <a href="index.php?page=anmelden">anmelden</a> oder <a href="registrieren.php">registrieren</a>?';
        endif;
    endif;
    ?>
    </section>
    <header>
        <div class="container">
            <div id="logo">
                <a href="index.php"><img src="bilder/logo.svg" alt="Bild" /></a>
            </div>
            <nav>
                <ul>
                    <li><a href="uebersicht.php">PRODUKTE</a></li>
                    <li><a href="angebote.php">ANGEBOTE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Class benutzt man für Objekte die mehrmals in einer Seite vorkommen.
ID ist für einzigartige Objekte welche sich nicht wiederholen.
-->
    <body>
    <section id="banner">
        <div class="container">
            <h1>NEU</h1>
            <h2>COMPLEX<br>WEIGHT GAINER</h2>
            <button type="submit" class="button_2">JETZT ENTDECKEN</button>
        </div>
    </section>

    <section id="search">
        <div class="container">
            <img src="bilder/icon_01.png">
            <h4> PREMIUM QUALITÄT ZUM BESTMÖGLICHEN PREIS </h4>
            <form action="suche.php" method="POST">
                <input type="text" name="suche" placeholder="Produkt suchen...">
                <button type="submit" name="suche-bestätigen" class="button_1">Suchen</button>
            </form>
        </div>
    </section>
    <!-- Suchfunktion für den Online Shop -->

    <section id="new">
        <div class="container">
            <img src="bilder/strich.png" alt="Strich" >
            <p>NEU IM SHOP</p>
        </div>

    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="bilder/produkt_02.jpg" width="150px" height="300px" border="0" alt="Produkt">
                <h3>PRODUKT 01</h3>
                <p>Produktbeschreibung</p>
                <h2>19,99€</h2>
            </div>
            <div class="box">
                <img src="bilder/produkt_03.jpg" width="150px" height="300px" border="0" alt="Produkt">
                <h3>PRODUKT 02</h3>
                <p>Produktbeschreibung</p>
                <h2>19,99€</h2>
            </div>
            <div class="box">
                <img src="bilder/produkt_01.jpg"width="150px" height="300px" border="0"  alt="Produkt">
                <h3>PRODUKT 03</h3>
                <p>Produktbeschreibung</p>
                <h2>19,99€</h2>
            </div>
        </div>
    </section>

    <!-- Sektion mit neuen Produkten -->

    <section id="empfehlungen">
        <div class="container2">
            <img src="bilder/strich.png" alt="Strich" >
            <p>UNSERE EMPFEHLUNGEN</p>
        </div>
    </section>

    <section id="angebote">
        <div class="container2">
            <div class="angebot1">
                <img src="bilder/angebot_01.png" width="200" height="300px" border="0" alt="Angebot">
                <h3> ANGEBOT 03 </h3>
                <p> Beschreibung </p>
                <h2> 29,99€ </h2>
            </div>
            <div class="angebot2">
                <img src="bilder/angebot_02.png" width="250" height="300px" border="0" alt="Angebot">
                <h3> ANGEBOT 03 </h3>
                <p> Beschreibung </p>
                <h2> 29,99€ </h2>
            </div>
        </div>
    </section>


    <footer>
        <p>HealthPlus, Copyright &copy; 2018</p>
    </footer>

</body>
</html>
