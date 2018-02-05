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
    <title>ADMIN BEREICH - HEALTHPLUS</title>

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
                <a class="nav-link" id="produktkatalog" href="admin_produkte.php">PRODUKTKATALOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="bestellungen" href="admin_bestellungen.php">BESTELLUNGEN</a>
            </li>
        </ul>
    </div>
</nav>

<?php  include('admin_funktion_bestellungen.php'); ?>
<?php $results = mysqli_query($db, "SELECT * FROM orders"); ?>
<html>
<title>Adminbereich | Bestellungen</title>
<link rel="stylesheet" type="text/css" href="style_admin_listen.css">

<?php $results = mysqli_query($db, "SELECT * FROM orders"); ?>
<header>
    <section class="container text-center mt-5">
        <h3>ADMIN-BEREICH</h3>
        <h6>BESTELLUNGEN BEI HEALTH PLUS</h6>
        <div align="center">
            <img src="bilder/balken.png" alt="Balken-Icon">
        </div>
        </div>
    </section>
</header>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>UserID</th>
        <th>Gesamtpreis</th>
        <th>Bestellungsdatum</th>
    </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['total_price']; ?></td>
            <td><?php echo $row['created']; ?></td>
        </tr>
    <?php } ?>
</table>
