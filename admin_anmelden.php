<?php include "admin_server.php";?>
<!doctype html>
<html lang="en">
<head>
    <!-- Informationen über zusätzliche Angaben -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="style_login.css"
    <!-- Titel eines Dokumentes -->
    <title>HEALTH PLUS | Admin Anmelden</title>
</head>

<!-- Beginn Body-Bereich -->
<body>
<div class="titel text-center">
    <h2>ANMELDEN</h2>
</div>
<form method="post" action="admin_anmelden.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Benutzername</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Passwort</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="button" name="login_admin">LOGOUT</button>
    </div>

</form>
<div class="col-xs-12" style="height:160px;"></div>
</body>
</html>