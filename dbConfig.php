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

<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'codexworld';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
