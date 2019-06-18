<?php 
    $getId = $_GET['IdUser'];
    $queryData = "SELECT * FROM spuser WHERE IdUser=$getId";
    $loadSql = mysqli_query($con, $queryData);
    $user = mysqli_fetch_array($loadSql);


    if(isset($_POST['submit'])){
        $Username  = $_POST['Username'];
        $Password  = MD5($_POST['Password']);
        $Nama      = $_POST['Nama'];
        $Email     = $_POST['Email'];
        $NoTelp    = $_POST['NoTelp'];

        // Image Setting and Check
        $dir   = getcwd()."/assets/images/admin/";
        if (!file_exists($dir)) {
            mkdir($dir, 007, true);
        }
        $dataUpdate = false;
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $file = $dir . basename($_FILES["fileToUpload"]["name"]);
        $oldFile = $dir . $user['FotoUser'];
        if(isset($fileName) && $fileName !== "" && $fileName !== null){
            $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                if (file_exists($file)) {
                    // echo "<script> alert(\"File already exists.\"); </script>";
                }else{
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {

                        unlink($oldFile);
                        $query = "UPDATE `spuser` SET `Username`='$Username',
                                    `Password`='$Password',
                                    `Nama`='$Nama',
                                    `Email`='$Email',
                                    `NoTelp`='$NoTelp',
                                    `FotoUser`='$fileName' WHERE IdUser=$getId";
                        $dataUpdate = true;
                    } else {
                        echo "<script> alert(\"Sorry, there was an error uploading your file.\"); </script>";
                    }
                }
            } else {
                echo "<script> alert(\"File is not an image.\"); </script>";
            }
        }else{
            $query = "UPDATE `spuser` SET `Username`='$Username',
                                    `Password`='$Password',
                                    `Nama`='$Nama',
                                    `Email`='$Email',
                                    `NoTelp`='$NoTelp' WHERE IdUser=$getId";
            $dataUpdate = true;

        }
        if ($dataUpdate) {
            $sql = mysqli_query($con, $query);
            if ($sql) {
                ?>
                        <script> 
                            var url="index.php?page=gallery"; 
                            success_update(url); 
                        </script>
                    <?php
            }
        }

    }
    

?>

<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Add Pricelist
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="content-dashboard-container">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="label-form">Username</label>
                            <input type="text" placeholder="Username" name="Username" required="required" value="<?php echo $user['Username']; ?>"></div>
                        <div class="form-group">
                            <label class="label-form">Password</label>
                            <input
                                type="password"
                                placeholder="Password"
                                name="Password"
                                required="required" value="<?php echo $user['Password']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Nama</label>
                            <input type="text" placeholder="Nama Lengkap" name="Nama" required="required" value="<?php echo $user['Nama']; ?>"></div>
                        <div class="form-group">
                            <label class="label-form">Email</label>
                            <input type="text" placeholder="Email" name="Email" required="required" value="<?php echo $user['Email']; ?>"></div>
                        <div class="form-group">
                            <label class="label-form">No Telp</label>
                            <input type="text" placeholder="No Telp" name="NoTelp" required="required" value="<?php echo $user['NoTelp']; ?>"></div>
                        <div class="form-group">
                            <label class="label-form">Select Your File</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Tambah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="label-dashboard">
                &copy; 2019 Serious Pixel | Bali | Serious Wedding Photography
            </div>
        </div>
    </div>