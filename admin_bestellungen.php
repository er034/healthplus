<?php  include('admin_funktion_bestellungen.php'); ?>
<?php $results = mysqli_query($db, "SELECT * FROM orders"); ?>
<html>
<title>Adminbereich | Bestellungen</title>
<link rel="stylesheet" type="text/css" href="style_admin_listen.css">

<?php $results = mysqli_query($db, "SELECT * FROM orders"); ?>
<header>
    <section class="Header">
        <h3>ADMIN-BEREICH</h3>
        <h6>BESTELLUNGEN</h6>
        <p>Bestellungen bei HealthPlus</p>
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
