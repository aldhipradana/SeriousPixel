<style>
    .navbar-header {
        background-color: #088A85;
    }

    .logout a {
        text-decoration: none;
        float: right;
        margin: 5px 10px;
    }

    #sidebar-left {
        background-color: #088A85;
        float: left;
        width: 150px;
        height: 530px;
    }

    #content {
        background-color: #BDBDBD;
        height: 530px;
    }

    .dropdown-media a,
    .dropdown-pages,
    .dropdown-pages a,
    .sub-menu-pages a {
        text-decoration: none;
        padding-top: 20px;
        font-size: 20;
    }

    .sub-menu-media,
    .sub-menu-pages {
        display: none;
        width: 100px;
    }
    #menu a,
    .dropdown-media,
    .dropdown-pages {
        text-decoration: none;
        padding-left: 10px;
        padding-top: 20px;
        font-size: 20;
        width: 140px;
        float: left;
        overflow: hidden;

    }
    .test {
        float: left;
        width: 1182px;
        height: 530px;

    }
    html {
        background-color: #FAFAFA;
    }
</style>
<div class="navbar-header">

    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <div class="header-logo">
        <a href="http://myfourwalls.in/">
            <img src="My Four Wallls.png"></a>
        </div>
    </div>
    <!-- Header Ends here! -->

    <!-- Sidebar-Left starts here! -->

    <div id="sidebarleft" href="" class="sidebar">
        <div id="sidebar-left">

            <div id="menu">
                <a href="index.php" target="_self">Dashboard</a>
                <a href="login.php" target="_self">Home</a>
            </div>

            <div class="dropdown-pages">
                <a href="#">Projects</a>
                <div class="sub-menu-pages">
                    <a href="">New Project</a>
                </div>
            </div>

            <div class="dropdown-media">
                <a href="#">Media</a>
                <div class="sub-menu-media">
                    <a href="">Add Media</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Sidebar-Left Ends here! -->

    <!-- This is Content-Area -->

    <div id="content">
        <div class="logo">
            <img src="My Four Wallls.png">
                <sup>Your Dashboard</sup>
            </div>
            <div class="test"></div>
        </div>
        <!-- Content-Area Ends here! -->

        <!-- This is Footer -->

        <div id="footer">
            <div align="center">
                <strong>Copyright @ 2011 - All Rights Reserved</strong>
            </div>
        </div>
        <!-- Footer Ends here! -->

    </div>
    <script>
        jQuery(document).ready(function () {
            jQuery('.dropdown-pages').hover(function () {
                jQuery(this)
                    .children('.sub-menu-pages')
                    .toggle(200);
            });
        });
    </script>