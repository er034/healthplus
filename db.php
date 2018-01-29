<?php
//$db = new mysqli('localhost','er034','Ohjiwaux4a','u-er034');
$server = 'localhost';
$username = 'er034';
$password = 'Ohjiwaux4a';
$dbname = 'u-er034';

$conn = mysqli_connect($server,$username,$password,$dbname);
if($db->connect_error):
    echo $db->connect_error;
endif;
?>



