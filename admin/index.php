<?php
include_once('function/init.php'); 
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'dashboard':
            $page = 'dashboard'; 
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
            case 'category':
                include_once('assets\template\header.php');
                include_once('assets\template\page\category.php');  
            break;
            case 'contact':
            $page = "contact";
                include_once('assets\template\header.php');
                include_once('assets\template\page\contact.php');  
            break;
            case 'user':
                include_once('assets\template\header.php');
                include_once('assets\template\page\user.php');  
            break;
            case 'gallery-add':
                $page = "gallery";
                include_once('assets\template\header.php');
                include_once('assets\template\page\gallery-add.php');  
            break;
            case 'pricelist-add':
                $page = "pricelist";
                include_once('assets\template\header.php');
                include_once('assets\template\page\pricelist-add.php');  
            break;
            case 'category-add':
                include_once('assets\template\header.php');
                include_once('assets\template\page\category-add.php');  
            break;
            case 'user-add':
                $page = "user";
                include_once('assets\template\header.php');
                include_once('assets\template\page\user-add.php');  
            break;
            case 'gallery-update':
                $page = "gallery";
                include_once('assets\template\header.php');
                include_once('assets\template\page\gallery-update.php');  
            break;
            case 'pricelist-update':
                $page = "pricelist";
                include_once('assets\template\header.php');
                include_once('assets\template\page\pricelist-update.php');  
                break;
            case 'category-update':
                include_once('assets\template\header.php');
                include_once('assets\template\page\category-update.php');  
            break;
            case 'user-update':
                $page = "user";
                include_once('assets\template\header.php');
                include_once('assets\template\page\user-update.php');  
                break;
            case 'logout':
            header("Location: logout.php");
            break;
            
            default:
            $page = 'dashboard';
                include_once('assets\template\header.php');
                include_once('assets\template\page\dashboard.php');  
                break;
        }
    } else {          
        include_once('assets\template\header.php');
        include_once('assets\template\page\dashboard.php');  
    } 
    include_once('assets\template\footer.php');

    ?>