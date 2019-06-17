<?php 
    $sql2 = "SELECT * FROM `spmail`";
    $data = mysqli_query($con, $sql2);


    if(isset($_GET['delete'])){
        $getId = $_GET['delete'];
        
        $sql = mysqli_query($con, "DELETE FROM spMail WHERE idMail=".$_GET['delete']);
        // header("Refresh:0; ");
        if($sql){
        ?>
            <script> 
                var url="index.php?page=contact"; 
                success_delete(url); 
            </script>
        <?php       
        }
    }
?>
<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Inbox
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>Pengirim</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody style="color:#000;">
                            <?php foreach($data as $data) {?>
                            <tr>
                                <td><?php echo $data['Pengirim']?></td>
                                <td><?php echo $data['Email']?></td>
                                <td><?php echo $data['Phone']?></td>
                                <td><?php echo $data['Message']?></td>
                                
                                <td>
                                <div class="form-links">
                                    <a href="?page=contact&delete=<?=$data['IdMail']?>">Delete</a>
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