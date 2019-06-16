<?php 
    if(isset($_POST['submit'])){
    $pengirim = $_POST['Pengirim'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $query = "INSERT INTO spmail(Pengirim, Email, Message) VALUES ('$pengirim', '$email', '$message')";

    $sql = mysqli_query($con, $query);

    if($sql){
        echo "<script> alert (\"Success\"); </script>";
        header("location: ?page=contact.php");
    }else{
        echo "<script> alert(\"Sorry, there was an error uploading your file.\"); </script>";
    }
}
    $sql2 = "SELECT * FROM `spmail`";
    $data = mysqli_query($con, $sql2);
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
                            
                        </tr>
                    </thead>
                        <tbody style="color:#000;">
                            <?php foreach($data as $data) {?>
                            <tr>
                                <td><?php echo $data['Pengirim']?></td>
                                <td><?php echo $data['Email']?></td>
                                <td><?php echo $data['Phone']?></td>
                                <td><?php echo $data['Message']?></td>
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