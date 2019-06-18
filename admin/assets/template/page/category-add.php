<?php 
    if(isset($_POST['submit'])){
        $namacategory = $_POST['NamaCategory'];
        $query = "INSERT INTO spcategory(NamaCategory) VALUES ('$namacategory')";

        $sql = mysqli_query($con, $query);

        if($sql){
            ?>
            <script> 
                var url="index.php?page=category";     
                success_add(url); 
            </script>
            <?php  
        }
    }
?>

<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
        Add Category
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="content-dashboard-container">
                <form action="" method="POST">
                    <div class="form-group">
                    <label class="label-form">Nama Category</label>
                    <input type="text" placeholder="Nama Package" name="NamaCategory"></div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Tambah Data">
                    </div>
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