<?php
include 'db.php';

$name = mysqli_real_escape_string($conn, $_GET['name']);
$beschreibung = mysqli_real_escape_string($conn, $_GET['beschreibung']);
$nummer = mysqli_real_escape_string($conn, $_GET['nummer']);


$sql = "SELECT * FROM produkte WHERE p_name='$name' AND p_beschreibung='$beschreibung' AND p_nummer='$nummer'";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if($queryResults > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<div>
                <h3>".$row['p_name']."</h3>
                <p>".$row['p_beschreibung']."</p>
                <p>".$row['p_nummer']."</p>
                <p>".$row['p_preis']."</p>
                </div>";
    }
}

?>