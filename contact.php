<?php
$email = $_POST["email"];
$message = $_POST["message"];

$timestamp = time();
$datum = date("d.m.Y - H:i", $timestamp);

$text = "Datum: $datum"."\r\n"."Email: $email"."\r\n"."Nachricht:"."\r\n"."$message"."\r\n\r\n\r\n";
file_put_contents("Kontakt.txt", $text, FILE_APPEND);

header("Location: Seite4-1.html")

?>
