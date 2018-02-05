<?php  include('admin_funktion_produkte.php'); ?>

<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM products WHERE id=$id");

    if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $name = $n['name'];
        $descritpion = $n['descritpion'];
        $price = $n['price'];
    }
}
?>
<link rel="stylesheet" type="text/css" href="style_admin_listen.css">
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
</head>
<header>
    <section class="container text-center mt-5">
        <h3>ADMIN-BEREICH</h3>
        <h6>PRODUKTKATALOG BEI HEALTH PLUS</h6>
        <div align="center">
            <img src="bilder/balken.png" alt="Balken-Icon">
        </div>
        </div>
    </section>
</header>
<body>
<?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM products"); ?>


<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Beschreibung</th>
        <th>Preis</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <a href="admin_produkte.php?edit=<?php echo $row['id']; ?>" class="btn btn-outline-info" >Edit</a>
            </td>
            <td>
                <a href="admin_funktion_produkte.php?del=<?php echo $row['id']; ?>" class="btn btn-outline-info">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>


<form method="post" action="admin_funktion_produkte.php" >
    <div class="input-group">
        <label>Produktname</label>
        <input type="text" name="name" value="<?php echo $name; ?>"
    </div>
    <div class="input-group">
        <label>Beschreibung</label>
        <input type="text" name="description" value="<?php echo $descritpion; ?>"
    </div>
    <div class="input-group">
        <label>Preis</label>
        <input type="text" name="price" value="<?php echo $price; ?>"
    </div>
    <div class="input-group">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    </div>
    <div class="input-group">
        <?php if ($update == true): ?>
            <button class="btn btn-outline-info" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
            <button class="btn btn-outline-info " type="submit" name="save" >Save</button>
        <?php endif ?>
    </div>
</form>
</body>
</html>