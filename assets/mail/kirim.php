<html><head>
<script src="..\js\jquery.min.js"></script>
<script src="..\js\sweetalert\dist\sweetalert2.min.js"></script>
<script src="..\..\admin\function\function.js"></script>
<link href="..\js\sweetalert\dist\sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    
<?php
    $pengirim   = $_POST['pengirim'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];
    $body = "
    Nama : $pengirim <br/>
    Telp : $phone <br/>
    Pesan : $message <br>
    Email: $email <br/>
    ";
    include_once('../../admin/function/init.php');
    // echo getcwd();
    ?>
<?php 
function Send_Mail($to,$subject,$body)
{
    require 'PHPmailer/class.phpmailer.php';
    $email= $_POST['email'];
    $mail = new PHPMailer();
    $mail->IsSMTP(true); // SMTP
    $mail->SMTPAuth = true; // SMTP authentication
    $mail->Host= "smtp.gmail.com";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SetFrom("prtmaksel21@gmail.com");
    $mail->Username = "prtmaksel21@gmail.com"; // username gmail yang akan digunakan untuk mengirim email
    $mail->Password = "04180207"; // Password email
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, $to);
    $mail->AddAddress($email);
    $mail->AddAddress("prtmaksel21@gmail.com");
if(!$mail->Send())
return false;
else
return true;

}
$to = $email; //email tujuan
$subject = "New email"; // subject email
Send_Mail($to,$subject,$body);

$query = "INSERT INTO spmail(Pengirim, Email, Phone, Message) VALUES ('$pengirim', '$email', '$phone', '$message')";
if(isset($_POST['submit'])){
    $sql = mysqli_query($con, $query);
    if($sql){
        ?>
        <script> 
            var pengirim = "<?=$pengirim?>";
            var url="../../index.php?page=contact"; 
            success_sent(pengirim, url); 
        </script>
    <?php
    } else{
        echo "<script> alert(\"Sorry, there was an error uploading your file.\"); </script>";
    }
}
die;
?>
</body>
</html>
