<?php 
    session_start();            
    setcookie("session_time", "", 0);
    session_destroy();
    header("Location: ..\index.php");
?>