<?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'admin':
                    include_once('assets\template\page\admin\admin.php');
                break;
                default:
                    include_once('assets\template\header-home.php');
                    include_once('assets\template\page\home.php');  
                    break;
            }
        } else {          
            include_once('assets\template\header.php');
            include_once('assets\template\page\dashboard.php');  
        }

    //    if($page != "login"){
    //         header("Location: login.php");
    //    }
    include_once('assets\template\footer.php');

    ?>