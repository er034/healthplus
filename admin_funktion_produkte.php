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