<?php

$email_from = "healthplus@web.de";   //Absender falls keiner angegeben wurde
$sendermail_antwort = true;      //E-Mail Adresse des Besuchers als Absender. false= Nein true = Ja
$name_von_emailfeld = "Email";   //Feld in der die Absenderadresse steht

$empfaenger = "healthplus@web.de"; //Empfänger-Adresse
$betreff = "Neue Kontaktanfrage"; //Betreff der Email

$url_ok = "https://mars.iuk.hdm-stuttgart.de/~er034/kontakt_anfrageerfolgreich.php"; //wenn E-Mail erfolgreich versendet wurde
$url_fehler = "https://mars.iuk.hdm-stuttgart.de/~er034/kontakt_errormeldung.php"; //wenn E-Mail nicht gesendet werden konnte


//Diese Felder werden nicht in der Mail stehen
$ignore_fields = array('submit');


//Eingabefelder abfragen
while (list($name,$value) = each($_POST)) {
    if (in_array($name, $ignore_fields)) {
        continue; //Ignore Felder wird nicht in die Mail eingefügt
    }
    $msg .= "$name \n$value\n\n";
}


//E-Mail Adresse des Besuchers als Absender
if ($sendermail_antwort and isset($_POST[$name_von_emailfeld]) and filter_var($_POST[$name_von_emailfeld], FILTER_VALIDATE_EMAIL)) {
    $email_from = $_POST[$name_von_emailfeld];
}

$header="From: $email_from";

if (!empty($mail_cc)) {
    $header .= "\n";
    $header .= "Cc: $mail_cc";
}


$mail_senden = mail($empfaenger,$betreff,$msg,$header);


//Weiterleitung
if($mail_senden){
    header("Location: ".$url_ok); //Mail wurde gesendet
    exit();
} else{
    header("Location: ".$url_fehler); //Fehler beim Senden
    exit();
}