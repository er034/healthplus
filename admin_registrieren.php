<?php include "admin_server.php";?>
<!doctype html>
<html lang="en"></html>
<head>
    <!-- Informationen über zusätzliche Angaben -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="style_login.css"
    <!-- Titel eines Dokumentes -->
    <title>HEALTH PLUS | Admin Registrieren</title>
</head>

<div class="titel">
    <h2>REGISTRIEREN</h2>
</div>

<form method="post" action="admin_registrieren.php">
    <?php include_once "errors.php"?>
    <div class="input-group">
        <label>Benutzername</label>
        <input type="text" name="username" value="<?php  $username; ?>">
    </div>
    <div class="input-group">
        <label>Passwort</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Passwort wiederholen</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="button" name="reg_admin">Registrieren</button>
    </div>
</form>
</body>