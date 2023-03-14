<?php
// connectie - verbinding met MySQL-database
    $con = mysqli_connect("files.000webhost.com","b10dylan","LRVRA8Jf5amK","phpwebsite");

    // de connectie testen met foutmelding als de verbinding niet is gelukt
    if(mysqli_connect_errno()){
        echo "Geen connectie met de database:" .$mysql_connect_error();
    }
    ?>