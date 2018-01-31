<?php
include 'db.php';

if (isset($_POST['submit-search'])){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql ="SELECT * FROM products WHERE name LIKE '%$search%' OR description LIKE '%$search%' OR id LIKE '%$search%' OR price LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

        echo "Es gibt".$queryResult." Produkte!";

if($queryResult > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<a href='produkt.php?name=".$row['name']. "&description=".$row['description']. "&price=".$row['price']."'>
                <div>
                <h3>".$row['name']."</h3>
                <p>".$row['description']."</p>
                <p>".$row['ean']."</p>
                <p>".$row['price']."</p>
                </div></a>";
       }
    } else {
        echo "Es gibt dieses Produkt nicht!";
    }
}
?>
