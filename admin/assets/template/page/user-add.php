<?php 
    // Use Code below if category was created
    // $catSql = "SELECT * FROM spcategory ORDER BY NamaCategory ASC";
    // $loadCatg = mysqli_query($con, $catSql);

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
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $file = $dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        if(isset($fileName) && $fileName !== "" && $fileName !== null){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                if (file_exists($file)) {
                    echo "<script> alert(\"File already exists.\"); </script>";
                }else{
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
                       $query = "INSERT INTO spuser(Username, Password, Nama, Email, NoTelp, FotoUser, Access, Status) 
                       VALUES ('$Username', '$Password','$Nama','$Email','$NoTelp','$fileName','member','aktif')";
                       $sql = mysqli_query($con, $query);
                        if($sql){
                            ?>
                            <script> 
                                var url="index.php?page=user"; 
                                success_add(url); 
                            </script>
                        <?php
                        }
                    } else {
                        echo "<script> alert(\"Sorry, there was an error uploading your file.\"); </script>";
                    }
                }
            } else {
                echo "<script> alert(\"File is not an image.\"); </script>";
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
                            <input type="text" placeholder="Username" name="Username" required="required"></div>
                        <div class="form-group">
                            <label class="label-form">Password</label>
                            <input
                                type="password"
                                placeholder="Password"
                                name="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Nama</label>
                            <input type="text" placeholder="Nama Lengkap" name="Nama" required="required"></div>
                        <div class="form-group">
                            <label class="label-form">Email</label>
                            <input type="text" placeholder="Email" name="Email" required="required"></div>
                        <div class="form-group">
                            <label class="label-form">No Telp</label>
                            <input type="text" placeholder="No Telp" name="NoTelp" required="required"></div>
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