<?php 

    echo "Admin";
    echo "Login Check";
    
    function login($username,$password){
        $pass = md5($password);
        $sql = "select * from `spuser` where username='".$username."' and password='.".$pass."';";
        $hasil = mysqli_query($con, $sql);
        if(mysqli_num_rows($hasil) > 0){
            echo "Mantap";
            $dataAdmin = array();
            foreach ($hasil as $data) {
                $dataAdmin['usname'] = $data['username'];
                $dataAdmin['pass'] = $data['password'];
                $dataAdmin['nama'] = $data['nama'];

            }
            header ("Location : /admin/");

            return $dataAdmin;
        }else{
            echo "<script> alert('Kontol'); </script>";
        }
    }
?>