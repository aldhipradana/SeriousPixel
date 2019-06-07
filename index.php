<?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include_once('assets\template\header-home.php');
                    include_once('assets\template\page\home.php');  
                    break;
                case 'gallery':
                    include_once('assets\template\header.php');
                    include_once('assets\template\page\gallery.php');
                    break;
                case 'pricelist':
                    include_once('assets\template\header.php');
                    include_once('assets\template\page\pricelist.php');
                    break;
                case 'about':
                    include_once('assets\template\header.php');
                    include_once('assets\template\page\about.php');
                    break;
                case 'contact':
                    include_once('assets\template\header.php');
                    include_once('assets\template\page\contact.php');
                    break;  
                case 'login':
                    include_once('assets\template\login.php');
                    break;
                case 'gallery-list':
                    include_once('assets\template\header.php');
                    include_once('assets\template\page\gallerylistphoto.php');
                    break;
                case 'admin':
                    header("Location: admin\ ");
                break;
                default:
                    include_once('assets\template\header-home.php');
                    include_once('assets\template\page\home.php');  
                    break;
            }
        } else {          
            include_once('assets\template\header-home.php');
            include_once('assets\template\page\home.php');  
        }
    ?>