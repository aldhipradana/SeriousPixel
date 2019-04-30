<?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include_once('assets\template\header.php');
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
                case 'about':
                    include_once('assets\template\header.php');
                    include_once('assets\template\page\contact.php');
                    break;  
                case 'login':
                    include_once('assets\template\header.php');
                    include_once('assets\template\login.php');
                    break;
                default:
                    include_once('assets\template\header.php');
                    include_once('assets\template\page\home.php');  
                    break;
            }
        } else {          
            include_once('assets\template\header.php');
            include_once('assets\template\page\home.php');  
        }

        include_once('assets\template\footer.php');
    ?>