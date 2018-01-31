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
                <a href="index.php"><img src="bilder/logo.svg" alt="Bild" /></a>
            </div>
            <nav>
                <ul>
                    <li><a href="anmelden.php">ANMELDEN</a></li>
                    <li><a href="registrieren.php">REGISTRIEREN</a></li>
                    <li><a href="index.php">ZUM SHOP</a></li>
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
                <input type="text" name="username" placeholder="Benutzername"><br><br>

                Dein Passwort:<br>
                <input type="password" name="password" placeholder="Passwort"><br><br>
                Widerhole dein Passwort:<br>
                <input type="password" name="password_repeat" placeholder="Passwort"><br><br>
                <input type="submit" name="absenden" value="Absenden"><br>
            </form>
        </div>
        <!--Allgemeines Fomular zum Regestrieren bei HealthPlus - Benutzername, Passwort und Passwort wiederholen -->
    </section>
    </body>
</html>
<?php

require_once("dbConfig.php");

if(isset($_POST['absenden'])):

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];


    $search_user = $db->prepare("SELECT id FROM users WHERE username = ?");
    $search_user->bind_param('s',$username);
    $search_user->execute();
    $search_result = $search_user->get_result();


    if($search_result->num_rows == 0):
        if($password == $password_repeat):
            $password = md5($password);
            $insert = $db->prepare("INSERT INTO users (username,password) VALUES (?,?)");
            $insert->bind_param('ss',$username,$password);
            $insert->execute();
            if($insert !== false):
                echo 'Dein Account wurde erfolgreich erstellt.';
            endif;
        else:
            echo 'Deine Passwörter stimmen nicht überein!';
        endif;
    else:
        echo 'Der Benutzername ist leider schon vergeben!';
    endif;



endif;