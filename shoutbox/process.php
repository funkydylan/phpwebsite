<?php
include '../database/connectie.php';

    if(isset($_POST['verzenden'])){
        $gebruiker = mysqli_real_escape_string($con, $_POST['gebruiker']);
        $bericht = mysqli_real_escape_string($con, $_POST['bericht']);

        
    }