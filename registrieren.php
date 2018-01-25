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
        Deine E-Mail:<br>
            <input type="text" name="email" placeholder="Email"><br><br>
        Dein Vorname:<br>
            <input type="text" name="vorname" placeholder="Vorname"><br><br>
        Dein Nachname:<br>
            <input type="text" name="nachname" placeholder="Nachname"><br><br>
        Deine Straße:<br>
            <input type="text" name="straße" placeholder="Straße"><br><br>
        <section id="eingabe2">
        Deine Hausnummer:<br>
            <input type="text" name="hausnummer" placeholder="Hausnummer"><br><br>
        Deine Postleizahl:<br>
            <input type="text" name="plz" placeholder="PLZ"><br><br>
        Dein Wohnort:<br>
            <input type="text" name="wohnort" placeholder="Wohnort"><br><br>
        Dein Passwort:<br>
            <input type="password" name="passwort" placeholder="Passwort"><br><br>
        Widerhole dein Passwort:<br>
            <input type="password" name="passwort_widerholen" placeholder="Passwort"><br><br>
            <input type="submit" name="absenden" value="Absenden"><br>
    </form>
    </div>
    # Allgemeines Fomular zum Regestrieren bei HealthPlus
 # Benutzername, Passwort und Passwort wiederholen
</section>
</body>
</html>
<?php
$db = new mysqli('localhost','tutorial','','tutorial');
if($db->connect_error):
    echo $db->connect_error;
endif;
if(isset($_POST['absenden'])):

    $benutzername = $_POST['benutzername'];
    $email = $_POST['email'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $straße = $_POST['straße'];
    $hausnummer = $_POST['hausnummer'];
    $plz = $_POST['plz'];
    $wohnort = $_POST['wohnort'];
    $passwort = $_POST['passwort'];
    $passwort_widerholen = $_POST['passwort_widerholen'];

    $search_user = $db->prepare("SELECT id FROM users WHERE benutzername = ?");
    $search_user->bind_param('s',$benutzername);
    $search_user->execute();
    $search_result = $search_user->get_result();

    if($search_result->num_rows == 0):
        if($passwort == $passwort_widerholen):
            $passwort = md5($passwort);
            $insert = $db->prepare("INSERT INTO users (benutzername,passwort) VALUES (?,?)");
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
