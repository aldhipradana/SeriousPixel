<?php

    $sql = "SELECT * FROM `sppackage`";

    $data = mysqli_query($con, $sql);
    if(isset($_GET['delete'])){
        mysqli_query($con, "DELETE FROM spPackage WHERE IdPackage=".$_GET['delete']);
        ?>
            <script> 
                var url="index.php?page=pricelist";     
                success_delete(url); 
            </script>
        <?php  
    }

?>

<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Pricelist
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="form-links">
                    <a href="?page=pricelist-add" class="add">Tambah</a>
                </div>
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>Nama Package</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody style="color:#000;">
                            <?php foreach($data as $data) {?>
                            <tr>
                                <td><?php echo $data['NamaPackage']?></td>
                                <td><?php echo $data['DescriptionPackage']?></td>
                                <td><?php echo "$"; echo $data['HargaPackage']?></td>
                                <td><?php echo $data['Level']?></td>
                                <td>
                                    <div class="form-links">
                                        <a class="update" href="?page=pricelist-update&IdPackage=<?=$data['IdPackage']?>">
                                        Update
                                         </a>
                                         <a class="delete" href="?page=pricelist&delete=<?=$data['IdPackage']?>">Delete</a>
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
