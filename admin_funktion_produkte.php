<!doctype html>
<html lang="en">
<head>
    <!-- Informationen über zusätzliche Angaben -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <!-- Titel eines Dokumentes -->
    <title>HEALTH PLUS ADMIN</title>
</head>

<!-- Beginn Body-Bereich -->
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="index.php">
        <img src="bilder/logo_admin.png" width="250" height="21" alt="HealthPlus">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-4">
            <li class="nav-item">
                <a class="nav-link" id="blog" href="admin_produkte.php">PRODUKTKATALOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog" href="admin_bestellungen.php">BESTELLUNGEN</a>
            </li>
        </ul>
    </div>
</nav>

<?php
session_start();
include 'db.php';

// initialize variables
$name = "name";
$description = "description";
$price = "price";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    mysqli_query($db, "INSERT INTO products (name, description, price) VALUES ('$name', '$description','$price')");
    $_SESSION['message'] = "Neues Produkt erfolgreich erstellt!";
    header('location: admin_produkte.php');
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    mysqli_query($db, "UPDATE products SET name='$name', description='$description' WHERE id=$id");
    $_SESSION['message'] = "Produkt bearbeitet!";
    header('location: admin_produkte.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM products WHERE id=$id");
    $_SESSION['message'] = "Produkt wurde gelöscht!";
    header('location: admin_produkte.php');
}