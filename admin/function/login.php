<?php 
    function login($username,$password){
        $pass = md5($password);
        $sql = "select * from `spuser` where username='".$username."' and password='.".$password."';";
        $hasil = mysqli_query($con, $sql);
        if(mysqli_num_rows($hasil) > 0){
            echo "Mantap";
        }
        mysqli_close($con);
    }
?>