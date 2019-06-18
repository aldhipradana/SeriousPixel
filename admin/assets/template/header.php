<head>
    <title>Admin</title>
    <link rel="icon" href="..\assets\images\Logo126.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets\css\dashboard.css">
    <link rel="stylesheet" href="assets\css\header.css">
    <link rel="stylesheet" href="assets\css\footer.css">
    <link rel="stylesheet" href="assets\css\style-admin.css">
    <link rel="stylesheet" href="assets\css\jquery.dataTables.min.css">
    <link rel="stylesheet" href="..\assets\css\styles.css">
    <link href="..\assets\fontawesome\css\all.css" rel="stylesheet">
    <link href="..\assets\js\sweetalert\dist\sweetalert2.min.css" rel="stylesheet">
    <script src="..\assets\js\sweetalert\dist\sweetalert2.min.js"></script>
    <script src="function\function.js"></script>
</head>
<?php 
        session_start();
?>
<section class="container-admin">
    <div class="row">
        <!-- Sidebar-Left starts here! -->
        <div class="column column-container">
            <div id="sidebarleft" class="sidebar">
                <div id="sidebar-left">
                    <div class="profile">
                        <div class="profile-logo">
                            <a href="#" class="logo">
                                <img src="assets\images\Admin-Logo.png" alt="Logo"></a>
                        </div>
                        <div class="profile-image">
                            <img src="assets\images\admin\<?php 
                            
                            $dir = getcwd()."/assets/images/admin/";

                            if(isset($_SESSION['foto']) && file_exists($dir.$_SESSION['foto'])) {echo $_SESSION['foto']; } 
                            else { echo "admin.png";}
                            ?>" 
                            alt="Admin Image" class="tilt">
                            <div class="profile-name"><?php if(isset($_SESSION['nama'])) echo $_SESSION['nama'];?></div>
                            <div class="links">
                                <a href="?page=user">
                                    <span class="fa fa-cog fa-spin"></span>
                                </a>
                                <a href="?page=logout">
                                    <span class="fa fa-power-off"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-sidebar">
                        <div class="label-menu">Navigation</div>
                        <div class="mobile-nav">
                            <a href="#">Menu</a>
                        </div>
                        <ul class="menu">
                            <li>
                                <a
                                    href="?page=dashboard"
                                    target="_self"
                                    <?php if((isset($page) && $page == "dashboard") || !(isset($page)) ) { echo "class='current'";} ?>>
                                    <span class="fa fa-home"></span>
                                    Dashboard</a>
                            </li>
                            
                                <?php 
                                // MENGECEK HAK AKSES DARI USER YANG LOGIN
 
                            if(isset ($_SESSION['access'])){
                                if($_SESSION['access'] == "admin") { ?>
                            <li>
                                <a
                                    href="?page=gallery"
                                    target="_self"
                                    <?php if(isset($page) && $page == "gallery") { echo "class='current'";} ?>>
                                    <span class="fa fa-images"></span>
                                    Gallery</a>
                            </li>
                            <li>
                                <a
                                    href="?page=pricelist"
                                    target="_self"
                                    <?php if(isset($page) && $page == "pricelist") { echo "class='current'";} ?>>
                                    <span class="fa fa-dollar-sign"></span>
                                    Price List</a>
                            </li>
                            <li>
                                <a
                                    href="?page=category"
                                    target="_self"
                                    <?php if(isset($page) && $page == "category") { echo "class='current'";} ?>>
                                    <span class="fa fa-list-alt"></span>
                                    Category</a>
                            </li>
                                <?php  }} ?>
                        <li>
                                <a
                                    href="?page=contact"
                                    target="_self"
                                    <?php if(isset($page) && $page == "contact") { echo "class='current'";} ?>>
                                    <span class="fa fa-envelope"></span>
                                    Inbox</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>   
        <?php
        if (!isset($_SESSION['login'])) {
            echo "<script>
            login_alert();
            </script>";
        }
        
        if (isset($_SESSION['login'])) {
            if (!isset($_COOKIE['session_time'])) {
                echo "<script>
            session_out();
            </script>";
            }
        }
        if (isset($_COOKIE['popup']) == 1) {
            ?>
            <script> 
                var user="<?=$_SESSION['usname']; ?>"; 
                login_index(user); 
            </script>
            <?php
        }
        ?>
        <!-- Sidebar-Left Ends here! -->