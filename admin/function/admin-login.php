<?php 

    function login($username,$password){
        global $con;
        $pass   = md5($password);
        $sql    = "SELECT * FROM `spuser` WHERE username = '".$username."' AND password = '".$pass."' ";
        $query  = mysqli_query($con, $sql);
        $bypass = mysqli_num_rows($query);
        if ($bypass > 0) {
            session_start();
            foreach ($query as $data) {
                $_SESSION['id']     = $data['IdUser'];
                $_SESSION['usname'] = $data['Username'];
                $_SESSION['pass']   = $data['Password'];
                $_SESSION['nama']   = $data['Nama'];
                $_SESSION['email']  = $data['Email']; 
                $_SESSION['foto']   = $data['FotoUser'];
            }
            $_SESSION['login'] = "login";
            setcookie("session_time", "login", time()+(60*60) );
            setcookie("popup", 1, time()+(10));

            return true; 
        } else {
            return false;
        }
    }
?>