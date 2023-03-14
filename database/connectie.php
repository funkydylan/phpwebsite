<?php
// connectie - verbinding met MySQL-database
    $con = mysqli_connect("78.47.104.170:3307","root","a147a9ca7413e3c69bc3","dylan");

    // de connectie testen met foutmelding als de verbinding niet is gelukt
    if(mysqli_connect_errno()){
        echo "Geen connectie met de database:" .$mysql_connect_error();
    }
    ?>