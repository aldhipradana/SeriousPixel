<?php 
    if(isset($_POST['submit'])){
        $namapackage = $_POST['NamaPackage'];
        $desc = $_POST['DescriptionPackage'];
        $harga = $_POST['HargaPackage'];
        $level = $_POST['Level'];

        $query = "INSERT INTO sppackage(NamaPackage, DescriptionPackage, HargaPackage, Level) VALUES ('$namapackage', '$desc', '$harga', '$level')";

        $sql = mysqli_query($con, $query);

        if($sql){
            ?>
            <script> 
                var url="index.php?page=pricelist";     
                success_add(url); 
            </script>
            <?php  
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
                <form action="" method="POST">
                    <div class="form-group">
                    <label class="label-form">Nama Package</label>
                    <input type="text" placeholder="Nama Package" name="NamaPackage"></div>
                    <div class="form-group">
                    <label class="label-form">Description</label>
                    <textarea name="DescriptionPackage" class="input-form" placeholder="Description"></textarea></div>
                    <div class="form-group">
                    <label class="label-form">Harga Package</label>
                    <input type="text" placeholder="Harga Package" name="HargaPackage"></div>
                    <div class="form-group">
                    <label class="label-form">Level</label>
                    <input type="text" placeholder="Level" name="Level"></div>
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