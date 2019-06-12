<?php 
    $user   = "root";
    $pass   = "";
    $host   = "localhost";
    $db     = "seriouspixel";
    
    $con = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($con));

    if ($con) {
        // echo "oalah";
        return true;
    }
?>