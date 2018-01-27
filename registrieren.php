<!DOCTYPE html>
<html lang="en">
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
    <link rel= "stylesheet" href="style_registrieren.css" type="text/css">
</head>
<div>
    <header>
        <div class="container">
            <div id="logo">
                <a href="index.html"><img src="bilder/logo.svg" alt="Bild" /></a>
            </div>
            <nav>
                <ul>
                    <li><a href="anmelden.php">ANMELDEN</a></li>
                    <li><a href="registrieren.php">REGISTRIEREN</a></li>
                    <li><a href="index.html">ZUM SHOP</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <body>
    <section id="eingabe">
        <div class="container">
            <h2>REGISTRIERUNG</h2>
            <p> Melde Dich jetzt bei Health Plus an und bestelle noch heute.</p>
            <form action="" method="post">
                Dein Benutzername:<br>
                <input type="text" name="benutzername" placeholder="Benutzername"><br><br>

                Dein Passwort:<br>
                    <input type="password" name="passwort" placeholder="Passwort"><br><br>
                Widerhole dein Passwort:<br>
                    <input type="password" name="passwort_widerholen" placeholder="Passwort"><br><br>
                    <input type="submit" name="absenden" value="Absenden"><br>
            </form>
        </div>
        <!--Allgemeines Fomular zum Regestrieren bei HealthPlus - Benutzername, Passwort und Passwort wiederholen -->
    </section>
    </body>
</html>
<?php
require_once("db.php");
if(isset($_POST['absenden'])):

    $benutzername = $_POST['benutzername'];
    $passwort = $_POST['passwort'];
    $passwort_widerholen = $_POST['passwort_widerholen'];
    //$email = $_POST['email'];
    //$vorname= $_POST['vorname'];
    //$nachname = $_POST['nachname'];

    $search_user = $db->prepare("SELECT id FROM benutzer WHERE benutzername = ?");
    $search_user->bind_param('s',$benutzername);
    $search_user->execute();
    $search_result = $search_user->get_result();

    //$eintrag = mysqli_query($db, "INSERT INTO benutzer (email,vorname,nachname) VALUES ('$email','$vorname','$nachname')");

    if($search_result->num_rows == 0):
        if($passwort == $passwort_widerholen):
            $passwort = md5($passwort);
            $insert = $db->prepare("INSERT INTO benutzer (benutzername,passwort) VALUES (?,?)");
            $insert->bind_param('ss',$benutzername,$passwort);
            $insert->execute();
            if($insert !== false):
                echo 'Dein Account wurde erfolgreich erstellt!';
            endif;
        else:
            echo 'Deine Passwörter stimmen nicht überein!';
        endif;
    else:
        echo 'Der Benutzername ist leider schon vergeben!';
    endif;



endif;
