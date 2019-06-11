<?php 
    $user   = "root";
    $pass   = "";
    $host   = "localhost";
    $db     = "seriouspixel";
    
    $con = mysqli_connect($host, $user, $pass, $db);

    if ($con) {
        echo "kont";
    }
?>