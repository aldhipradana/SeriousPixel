<head>
    <title>Admin</title>
    <link rel="stylesheet" href="assets\css\dashboard.css">
    <link rel="stylesheet" href="assets\css\header.css">
    <link rel="stylesheet" href="assets\css\footer.css">
    <link rel="stylesheet" href="assets\css\style-admin.css">
    <link rel="stylesheet" href="assets\css\jquery.dataTables.min.css">
    <link rel="stylesheet" href="..\assets\css\styles.css">
    <link href="..\assets\fontawesome\css\all.css" rel="stylesheet">
</head>
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
                            <img src="assets\images\TestAdmin.png" alt="Admin Image" class="tilt">
                            <div class="profile-name">Anthony Lee</div>
                            <div class="links">
                                <a href="#">
                                    <span class="fa fa-cog fa-spin"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-power-off"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-sidebar">
                        <div class="label-menu">Navigation</div>
                        <ul class="menu">
                            <li>
                                <a
                                    href="?page=dashboard"
                                    target="_self"
                                    <?php if((isset($page) && $page == "dashboard") || !(isset($page)) ) { echo "class='current'";} ?>>
                                    <span class="fa fa-home"></span>
                                    Dashboard</a>
                            </li>
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
                                    href="?page=inbox"
                                    target="_self"
                                    <?php if(isset($page) && $page == "inbox") { echo "class='current'";} ?>>
                                    <span class="fa fa-envelope"></span>
                                    Inbox</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Sidebar-Left Ends here! -->