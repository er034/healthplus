<?php
session_start();

// initializing variables
$username = "username";
$email    = "email";
$firstname    = "firstname";
$lastname    = "lastname";
$street    = "street";
$housenumber   = "housenumber";
$postcode    = "postcode";
$city    = "city";
$password_1 = "password_1";
$password_2 = "password_2";
$errors = array();

//DB details
$dbHost = 'localhost';
$dbUsername = 'er034';
$dbPassword = 'Ohjiwaux4a';
$dbName = 'u-er034';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $street = mysqli_real_escape_string($db, $_POST['street']);
    $housenumber = mysqli_real_escape_string($db, $_POST['housenumber']);
    $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $city = mysqli_real_escape_string($db, $_POST['city']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Bitte Benutzername eingeben"); }
    if (empty($email)) { array_push($errors, "Bitte Email eingeben"); }
    if (empty($password_1)) { array_push($errors, "Bitte Passwort eingeben"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Benutzername schon vergeben");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email schon vergeben");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password, firstname, lastname, street, housenumber, postcode, city) 
  			  VALUES('$username','$email','$password','$firstname','$lastname','$street','$housenumber','$postcode', '$city')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Du bist jetzt angemeldet!";
        header('location:/~er034/index.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
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
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location:/~er034/index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
