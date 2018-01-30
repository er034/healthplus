<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 25.01.18
 * Time: 14:20
 */
//Error Report
error_reporting(E_ALL);
ini_set('display_errors','1');
?>
<?php
// Gueltigkeit der URL testen
if (isset($_GET['id'])){
    $id = preg_replace('#[^0-9]#i',",$_GET['id']);
    // Falls die URL gueltig ist wird die Seite geladen
    // Wenn nicht wird die folgende Fehlermeldung angezeigt
    $sql = mysql_query("SELECT*FROM products WHERE id='$id' LIMIT 1");
    $productCount $mysql_num_rows($sql); //Die anzahl zaehlen
    if($ProductCount > 0) {
        while($row
    } else {
        echo " Artikel nicht Verfügbar";
        exit();

}else{
    echo "Dieses Produkt ist nicht im System.";
    exit();
?>
?>
<?php
//Zur Datenbank verbinden

?>
<title>$dynamicTitle</title>
