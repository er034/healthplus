<?php
include 'db.php';

if (isset($_POST['submit-search'])){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql ="SELECT * FROM produkte WHERE p_name LIKE '%$search%' OR p_beschreibung LIKE '%$search%' OR p_id LIKE '%$search%' OR p_preis LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

        echo "Es gibt".$queryResult." Produkte!";

if($queryResult > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<a href='produkt.php?name=".$row['p_name']. "&beschreibung=".$row['p_beschreibung']. "&nummer=".$row['p_nummer']. "&preis=".$row['p_preis']."'>
                <div>
                <h3>".$row['p_name']."</h3>
                <p>".$row['p_beschreibung']."</p>
                <p>".$row['p_nummer']."</p>
                <p>".$row['p_preis']."</p>
                </div></a>";
       }
    } else {
        echo "Es gibt dieses Produkt nicht!";
    }
}
?>
