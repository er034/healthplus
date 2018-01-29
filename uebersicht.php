
<form action="suche.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>

<?php
    include 'db.php';

    $sql = "SELECT * FROM produkte ";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if($queryResults > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<div>
                <h3>".$row['p_name']."</h3>
                <p>".$row['p_beschreibung']."</p>
                <p>".$row['p_nummer']."</p>
                </div>";

        }
    }
?>