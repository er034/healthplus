<?php
if (isset($_POST['login_admin'])) {
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if (empty($username)) {
array_push($errors, "Bitte Benutzername eingeben");
}
if (empty($password)) {
array_push($errors, "Bitte Passwort eingeben");
}

if (count($errors) == 0) {
$password = md5($password);
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location:/~er034/admin_bestellungen.php');
}else {
array_push($errors, "Wrong username/password combination");
}
}
}
?>