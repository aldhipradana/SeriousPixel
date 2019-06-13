<?php 

    function login($username,$password){
        global $con;
        $pass   = md5($password);
        $sql    = "SELECT * FROM `spuser` WHERE username = '".$username."' AND password = '".$pass."' ";
        $query  = mysqli_query($con, $sql);
        $bypass = mysqli_num_rows($query);
        if ($bypass > 0) {
            foreach ($query as $data) {

                $_SESSION['usname'] = $data['Username'];
                $_SESSION['pass']   = $data['Password'];
                $_SESSION['nama']   = $data['Nama'];
                $_SESSION['email']  = $data['Email'];
                
            }
            return true; 
        } else {
            return false;
        }
    }
?>