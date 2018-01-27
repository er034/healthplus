<?php
require_once("db.php");
if($db->connect_error):
    echo $db->connect_error;
endif;

$search_user = $db->prepare("SELECT id FROM benutzer WHERE id = ?");
$search_user->bind_param('i',$_SESSION['benutzer']);
$search_user->execute();
$search_result = $search_user->get_result();
if($search_result->num_rows == 1):
    $search_object = $search_result->fetch_object();
    echo 'Willkommen zurück, '.$_POST['benutzername'].'!<br>';
    echo '<form action="" method="post" ><input type="submit" name="abmelden" value="Abmelden"></form>';

    if(isset($_POST['abmelden'])):
        session_destroy();
        header('Location:/~er034/abmelden.php');
    endif;
endif;
?>
