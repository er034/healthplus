<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>

<header>
    <div id="logo">
        <a href="index.php"><img src="bilder/logo.svg" alt="Logo" /></a>
    </div>
    <div id="einkaufswagen">
         <a href="warenkorb_uebersicht.php"><img src="bilder/einkaufswagen_icon.png" alt="Einkaufswagen"/></a>
    </div>
    <div id="suche">
        <a href="uebersicht.php"><img src="bilder/suche_icon.png" alt="Suche"/></a>
    </div>
    <!-- nav (Navigation) = Menüleiste -->
    <nav>
        <ul>
            <li><a href="uebersicht.php">PRODUKTE</a></li>
            <li><a href="angebote.php">ANGEBOTE</a></li>
            <li><a href="blog.php">BLOG</a></li>
        </ul>
    </nav>
</header>

<body>
<div class="titel">
    <h2>LOGIN</h2>
</div>

<form method="post" action="anmelden.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="button" name="login_user">Login</button>
    </div>
    <p>
        Noch kein Mitglied? <a href="registrieren.php">JETZT REGISTRIEREN</a>
    </p>
</form>
</body>
<footer>
    <nav>
        <ul>
            <li><a href="uebersicht.php">IMPRESSUM</a></li>
            <li><a href="angebote.php">KONTAKE</a></li>
            <li><a href="blog.php">DATENSCHUTZ</a></li>
        </ul>
    </nav>
</footer>
</html>