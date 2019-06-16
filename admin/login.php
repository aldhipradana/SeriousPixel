<?php include_once('function/init.php'); 

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $login = login($user,$pass);
        if($login){
            header("Location: index.php");
        }
    }
?>
<link rel="stylesheet" href="assets\css\login.css">
<link rel="stylesheet" href="assets\css\style-admin.css">
<link rel="stylesheet" href="..\assets\css\styles.css">
<link href="..\assets\js\sweetalert\dist\sweetalert2.min.css" rel="stylesheet">
<script src="..\assets\js\sweetalert\dist\sweetalert2.min.js"></script>
<script src="function\function.js"></script>

<div class="wrapper">
    <div class="container">
        <h1>Login Form</h1>
        <form class="form" method="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="submit" id="login-button" value="Login">LOGIN</button>
        </form>
    </div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src="..\assets\js\jquery.min.js"></script>