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
if($db->connect_error):
    echo $db->connect_error;
endif;

if(isset($_POST['absenden'])):
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    $password = md5($password);

    $search_user = $conn->prepare("SELECT id FROM customers WHERE username = ? AND password = ?");
    $search_user->bind_param('ss',$username,$password);
    $search_user->execute();
    $search_result = $search_user->get_result();

    if($search_result->num_rows == 1):
        $search_object = $search_result->fetch_object();

        $_SESSION['benutzer'] = $search_object->id;
    else:
        echo 'Deine Angaben sind leider nicht korrekt!';
    endif;
endif;
