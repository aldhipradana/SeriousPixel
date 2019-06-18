<!-- This is Content-Area -->
<?php 
    $sql = "SELECT * FROM `spgallery`";
    $data = mysqli_query($con, $sql); 
    $dir   = "assets/images/gallery/";

    if(isset($_GET['delete'])){
        $getId = $_GET['delete'];
        $dataImg = mysqli_query($con, "SELECT Gambar FROM spGallery WHERE IdGallery = $getId");
        $img = mysqli_fetch_array($dataImg);
        $img = $dir.$img['Gambar'];
        
        if(!unlink($img)){
            echo "<script> Gagal </scipt>";
        }else{
            mysqli_query($con, "DELETE FROM spGallery WHERE IdGallery=".$_GET['delete']); 
            ?>
                <script> 
                    var url="index.php?page=gallery"; 
                    success_delete(url); 
                </script>
            <?php
        }        
    }

?>
<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Gallery
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="form-links">
                    <a href="?page=gallery-add" class="add">Tambah</a>
                </div>
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style="color:#000;">
                        <?php foreach($data as $data) {?>
                        <tr>
                            <td><?php echo $data['Title']?></td>
                            <td><?php echo $data['Description']?></td>
                            <td><?php echo $data['Date']?></td>
                            <td>
                                <div class="form-links">
                                    <a class="update" href="?page=gallery-update&IdGallery=<?=$data['IdGallery']?>">
                                        Update
                                    </a>
                                    <a class="delete" href="?page=gallery&delete=<?=$data['IdGallery']?>">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <!-- <th>test</th> -->
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <div id="footer">
            <div class="label-dashboard ">
                &copy; 2019 Serious Pixel | Bali | Serious Wedding Photography
            </div>
        </div>
    </div>
    <!-- Content-Area Ends here! -->