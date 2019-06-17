<!-- This is Content-Area -->
<?php 
    $getId = $_GET['IdPackage'];
    $queryData = "SELECT * FROM sppackage WHERE IdPackage=$getId";
    $loadSql = mysqli_query($con, $queryData);
    $package = mysqli_fetch_array($loadSql);
    if(isset($_POST['submit'])){
        $nama  = $_POST['NamaPackage'];
        $desc  = $_POST['DescriptionPackage'];
        $harga  = $_POST['HargaPackage'];
        $level  = $_POST['Level'];

            $query = "UPDATE `sppackage` SET    `NamaPackage`='$nama',
                                                `DescriptionPackage`='$desc',
                                                `HargaPackage`='$harga',
                                                `Level`='$level' WHERE IdPackage=$getId";
            $dataUpdate = true;

        if($dataUpdate){
            $sql = mysqli_query($con, $query);
            if($sql){
            ?>
                <script> 
                    var url="index.php?page=pricelist"; 
                    success_delete(url); 
                </script>
            <?php  
            }
        }
    }
?>
<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Update Pricelist
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="content-dashboard-container">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="label-form">Nama Package</label>
                            <input type="text" placeholder="namapackage" name="NamaPackage" class="input-form" value="<?php echo $package['NamaPackage']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Description</label>
                            <input type="text" placeholder="descriptionpackage" name="DescriptionPackage" class="input-form" value="<?php echo $package['DescriptionPackage']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Harga</label>
                            <input type="text" placeholder="hargapackage" name="HargaPackage" class="input-form" value="<?php echo $package['HargaPackage']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Level</label>
                            <input type="text" placeholder="level" name="Level" class="input-form" value="<?php echo $package['Level']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Update Data">
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div id="footer">
            <div class="label-dashboard ">
                &copy; 2019 Serious Pixel | Bali | Serious Wedding Photography
            </div>
        </div>
    </div>
    <!-- Content-Area Ends here! -->