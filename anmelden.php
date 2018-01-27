<link rel= "stylesheet" href="style_anmelden.css" type="text/css">
<form  id="eingabe" action="" method="post">
    Dein Benutzername:<br>
    <input type="text" name="benutzername" placeholder="Benutzername"><br>
    Dein Passwort:<br>
    <input type="password" name="passwort" placeholder="Passwort"><br>
    <input type="submit" name="absenden" value="Absenden"><br>
</form>
<?php

require_once("db.php");

if(isset($_POST['absenden'])):
    $benutzername = strtolower($_POST['benutzername']);
    $passwort = $_POST['passwort'];
    $passwort = md5($passwort);

    $search_user = $db->prepare("SELECT id FROM benutzer WHERE benutzername = ? AND passwort = ?");
    $search_user->bind_param('ss',$benutzername,$passwort);
    $search_user->execute();
    $search_result = $search_user->get_result();

    if($search_result->num_rows == 1):
        $search_object = $search_result->fetch_object();

        $_SESSION['benutzer'] = $search_object->id;
    else:
        echo 'Deine Angaben sind leider nicht korrekt!';
    endif;
endif;
