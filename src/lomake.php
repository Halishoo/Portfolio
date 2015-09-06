<?php


$myfile = fopen("yhteydenotot.txt", "w") or die();


fwrite($myfile, "Nimi: " . $_POST["name"] . "\n");
fwrite($myfile, "Sähköposti: " . $_POST["email"] . "\n");
fwrite($myfile, "Viesti: " . $_POST["message"] . "\n");

fclose($myfile);

header("index.html");

?>