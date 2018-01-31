<?php
include 'db.php';

$name = mysqli_real_escape_string($db, $_GET['name']);
$description = mysqli_real_escape_string($db, $_GET['description']);
$price = mysqli_real_escape_string($db, $_GET['price']);


$sql = "SELECT * FROM products WHERE name='$name' AND description='$description' AND price='$price'";
$result = mysqli_query($db, $sql);
$queryResults = mysqli_num_rows($result);

if($queryResults > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<div>
                <h3>".$row['name']."</h3>
                <p>".$row['description']."</p>
                <p>".$row['price']."</p>
                </div>";
    }
}

?>




