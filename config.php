<?php
    $kasutaja = "Anu";
    $dbserver = "localhost";
    $andmebaas = "maraton";
    $pw = "Passw0rd";

    $yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmebaas);

    if(!$yhendus){
        die("Sa jälle ebaõnnestusid!");
    } 

?>