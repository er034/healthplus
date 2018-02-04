<?php include "server.php";?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<div class="titel">
    <h2>REGISTRIEREN</h2>
</div>

<form method="post" action="registrieren.php">
    <?php include_once "errors.php"?>
    <div class="input-group">
        <label>Benutzername</label>
        <input type="text" name="username" value="<?php  $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php  $email; ?>">
    </div>
    <div class="input-group">
        <label>Vorname</label>
        <input type="text" name="firstname" value="<?php  $firstname; ?>">
    </div>
    <div class="input-group">
        <label>Nachname</label>
        <input type="text" name="lastname" value="<?php  $lastname; ?>">
    </div>
    <div class="input-group">
        <label>Strasse</label>
        <input type="text" name="street" value="<?php  $street; ?>">
    </div>
    <div class="input-group">
        <label>Hausnummer</label>
        <input type="text" name="housenumber" value="<?php  $housenumber; ?>">
    </div>
    <div class="input-group">
        <label>PLZ</label>
        <input type="text" name="postcode" value="<?php  $postcode; ?>">
    </div>
    <div class="input-group">
        <label>Stadt</label>
        <input type="text" name="city" value="<?php  $city; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="button" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="anmelden.php">Sign in</a>
    </p>
</form>
</body>
</html>