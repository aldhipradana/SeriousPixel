<!-- This is Content-Area -->
<?php 
    $sql = "SELECT * FROM `spgallery`";
    $data = mysqli_query($con, $sql); 
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
                <table id="myTable" >
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody  style="color:#000;">
                        <?php foreach($data as $data) {?>
                        <tr>
                            <td><?php echo $data['Title']?></td>
                            <td><?php echo $data['Description']?></td>
                            <td><?php echo $data['Date']?></td>
                            <td></td>
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