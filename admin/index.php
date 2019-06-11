<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'dashboard':
                include_once('assets\template\header.php');
                include_once('assets\template\page\dashboard.php');  
            break;
            case 'gallery':
                include_once('assets\template\header.php');
                include_once('assets\template\page\gallery.php');  
            break;
            case 'pricelist':
                include_once('assets\template\header.php');
                include_once('assets\template\page\pricelist.php');  
            break;
            case 'inbox':
                include_once('assets\template\header.php');
                include_once('assets\template\page\inbox.php');  
            break;
            case 'gallery-add':
                include_once('assets\template\header.php');
                include_once('assets\template\page\gallery-add.php');  
            break;
            case 'pricelist-add':
                include_once('assets\template\header.php');
                include_once('assets\template\page\pricelist-add.php');  
            break;
            case 'user-add':
                include_once('assets\template\header.php');
                include_once('assets\template\page\user-add.php');  
            break;
            case 'gallery-update':
                include_once('assets\template\header.php');
                include_once('assets\template\page\gallery-update.php');  
            break;
            case 'pricelist-update':
                include_once('assets\template\header.php');
                include_once('assets\template\page\pricelist-update.php');  
            break;
            case 'user-update':
                include_once('assets\template\header.php');
                include_once('assets\template\page\user-update.php');  
            break;
            default:
                include_once('assets\template\header.php');
                include_once('assets\template\page\dashboard.php');  
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