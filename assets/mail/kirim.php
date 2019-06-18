<?php
    $pengirim= $_POST['pengirim'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $message=$_POST['message'];
    $body= "
    Nama : $pengirim <br/>
    Telp : $phone <br/>
    Pesan : $message <br>
    Email: $email <br/>
    ";
    include_once('../../admin/function/init.php');

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
    $mail->SetFrom("dedemahayana@gmail.com","dedemahayana");
    $mail->Username = "dedemahayana@gmail.com"; // username gmail yang akan digunakan untuk mengirim email
    $mail->Password = "danagame123"; // Password email
    $mail->SetFrom($email, 'dedemahayana');
    $mail->AddReplyTo($email,'dedemmahayana ');
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, $to);
$mail->AddAddress($email);
$mail->AddAddress("dedetirtamahayana@gmail.com");
if(!$mail->Send())
return false;
else
return true;

}
$to = $email; //email tujuan
$subject = "New email"; // subject email
// echo"<br/><br/><center><h3>email telah terkirim</h3></center>";
Send_Mail($to,$subject,$body);

$query = "INSERT INTO spmail(Pengirim, Email, Phone, Message) VALUES ('$pengirim', '$email', '$phone', '$message')";
if(isset($_POST['submit'])){
    $sql = mysqli_query($con, $query);
    if($sql){
        echo "<script>alert ('Berhasil !'); '</script>";
    }else{
        echo "<script> alert(\"Sorry, there was an error uploading your file.\"); </script>";
    }
}

die;
?>
