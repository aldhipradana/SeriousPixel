<?php 
    $sql2 = "SELECT * FROM `spcategory`";
    $data = mysqli_query($con, $sql2);


    if(isset($_GET['delete'])){
        $getId = $_GET['delete'];
        
        $sql = mysqli_query($con, "DELETE FROM spcategory WHERE IdCategory=".$_GET['delete']);
        // header("Refresh:0; ");
        if($sql){
        ?>
            <script> 
                var url="index.php?page=category"; 
                success_delete(url); 
            </script>
        <?php       
        }
    }
?>
<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Category
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="form-links">
                    <a href="?page=category-add" class="add">Tambah</a>
                </div>
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>Nama Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody style="color:#000;">
                            <?php foreach($data as $data) {?>
                            <tr>
                                <td><?php echo $data['NamaCategory']?></td>
                                <td>
                                <div class="form-links">
                                    <a class="update" href="?page=category-update&IdCategory=<?=$data['IdCategory']?>">
                                        Update
                                    </a>
                                    <a class="delete" href="?page=category&delete=<?=$data['IdCategory']?>">Delete</a>
                                </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <!-- test -->
                            </tr>
                        </tfoot>
                </table>
            </div>
        </div>
        <div id="footer">
            <div class="label-dashboard">
                &copy; 2019 Serious Pixel | Bali | Serious Wedding Photography
            </div>
        </div>
    </div>
