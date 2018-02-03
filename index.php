<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <!-- Code sorgt für Skalierung für mobile Endgeräte -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- Beschreibung unserer Webseite -->
    <meta name="description" content="Onlineshop für Nahrungsergänzungsmittel">
    <!-- Suchbbegriffe für die Suchmaschine -->
    <meta name="keywords" content="Nahrungsergänzung, Online Shop , Fitness , Sport">
    <!-- Autoren der Website -->
    <meta name="author" content="Eileen Röhm, Marc Lunardi, Cedric Tippl">
    <!-- Titel der Website -->
    <title>HEALTH PLUS - ENJOY THE DIFFERENCE</title>
    <!-- Verlinkung des Stylesheet (style.css)-->
    <link rel= "stylesheet" href="style.css" type="text/css">
</head>


<!-- Header02 beinhaltet alle Login und Registrieren Elemente-->
    <section id="header02">
        <?php
        session_start();

        if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['username']);
            header("location:/~er034/abmelden.php");
        }
        ?>
        Möchtest Du dich  <a href="/~er034/Login%20-%20System/login.php">anmelden</a> oder <a href="/~er034/Login%20-%20System/register.php">registrieren</a>?


    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <div class="content">

            <!-- Abfrage der Session - User richtig angemeldet? -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <!-- Benutzer Information - Willkommen Benutzer... -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
        </div>
    </section>



<header>
        <!-- Class = wird für Objekt benutzt die mehrmals in einer Seite vorkommen, div (division) = Elemente in einem gemeinsamen Bereich einschließen -->
        <!-- Inhalt unserer Navigationsleiste (Logo/Menü-Elemente) -->
    <div class="container">
        <div id="logo">
            <a href="index.php"><img src="bilder/logo.svg" alt="Logo" /></a>
        </div>
        <!-- nav (Navigation) = Menüleiste -->
            <nav>
                <ul>
                    <li><a href="uebersicht.php">ALLE PRODUKTE</a></li>
                    <li><a href="angebote.php">ANGEBOTE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                </ul>
            </nav>
    </div>
</header>


    <!-- body = angezeigter Inhaltsbereich, id = ist für Objekte, welche sich nicht wiederholen -->
    <!-- Inhalt: Bannerbild mit Text zu neustem Produkt -->
<body>
    <section id="banner">
        <div class="container">
            <h1>NEU</h1>
            <h2>COMPLEX<br>WEIGHT GAINER</h2>
            <button type="submit" class="button_2">JETZT ENTDECKEN</button>
        </div>
    </section>

    <section id="new">
        <div class="container">
            <img src="bilder/strich.png" alt="Strich" >
            <p>NEU IM SHOP</p>
        </div>
    </section>

    <!-- Inhalt: Auswahl der neusten Produkte in unserem Shop -->
    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="bilder/produkt_02.jpg" width="150px" height="300px" border="0" alt="Produkt">
                <h3> FIT WHEY PROTEIN </h3>
                <p> 100% Premium Whey Protein für optimalen Muskelaufbau.</p>
                <h2>21,99€</h2>
            </div>
            <div class="box">
                <img src="bilder/produkt_03.jpg" width="150px" height="300px" border="0" alt="Produkt">
                <h3>BCAA AMINO | 200G</h3>
                <p>Essenzielle Aminosäuren für den Muskelaufbau.</p>
                <h2>21,99</h2>
            </div>
            <div class="box">
                <img src="bilder/produkt_01.jpg"width="150px" height="300px" border="0"  alt="Produkt">
                <h3>ALL-IN-ONE WHEY PROTEIN</h3>
                <p>Whey Protein mit Vitaminen und Mineralien für optimalen Muskelaufbau.</p>
                <h2>14,99€</h2>
            </div>
        </div>
    </section>

    <!-- Inhalt unsere Angebote/Empfehlungen -->

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
                <h3>COMPLEX WEIGHT GAINER </h3>
                <p>Der Power-Shake für den Aufbau von Muskelmasse.</p>
                <h2> 21,99€ </h2>
            </div>
            <div class="angebot2">
                <img src="bilder/angebot_02.png" width="250" height="300px" border="0" alt="Angebot">
                <h3> VEGAN PROTEIN </h3>
                <p> Veganer Protein-Shake für den Muskelaufbau. </p>
                <h2> 29,99€ </h2>
            </div>
        </div>
    </section>


    <footer class="footer">
            <p>HealthPlus, Copyright &copy; 2018</p>
            <nav>
                <ul>
                    <li><a href="impressum.php">IMPRESSUM</a></li>
                    <li><a href="kontakt.php">KONTAKT</a></li>
                    <li><a href="datenschutz.php">DATENSCHUTZ</a></li>
                </ul>
            </nav>
    </footer>

</body>
</html>
