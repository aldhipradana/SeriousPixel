<!-- This is Content-Area -->
<?php 
    $getId = $_GET['IdCategory'];
    $queryData = "SELECT * FROM spcategory WHERE IdCategory=$getId";
    $loadSql = mysqli_query($con, $queryData);
    $package = mysqli_fetch_array($loadSql);
    if(isset($_POST['submit'])){
        $nama  = $_POST['NamaCategory'];
            $query = "UPDATE `spcategory` SET    `NamaCategory`='$nama' WHERE IdCategory=$getId";
            $dataUpdate = true;

        if($dataUpdate){
            $sql = mysqli_query($con, $query);
            if($sql){
            ?>
                <script> 
                    var url="index.php?page=category"; 
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
            Update Category
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="content-dashboard-container">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="label-form">Nama Category</label>
                            <input type="text" placeholder="namacategory" name="NamaCategory" class="input-form" value="<?php echo $package['NamaCategory']; ?>">
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