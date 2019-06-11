<?php include_once('function/init.php'); 

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        echo "<script> alert(\"NJING\")</script>";
        $bypass = login($user,$pass);
        print_r($bypass);
        if(isset($bypass)){
            $_SESSION['username'] = $bypass['usname'];
            $_SESSION['pass'] = $bypass['pass'];
            $_SESSION['nama'] = $bypass['nama'];
        }
    }

?>
<link rel="stylesheet" href="assets\css\login.css">
<link rel="stylesheet" href="..\assets\css\styles.css">
        <div class="wrapper">
            <div class="container">
                <h1>Login Form</h1>
                <form class="form" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" name="submit"  id="login-button" value="Login">LOGIN</button>
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

<script src="assets/js/jquery.min.js"></script>

                <script type='text/javascript'>
                    // ### NAVBAR FIXED #### $(document).ready(function () { $("html").easeScroll();
                    var $body = $(document.body);
                        var _SCROLL_FIXED_CUTOFF = _SCROLL_FIXED_CUTOFF || (
                                $(window).height() >= 825
                                    ? 150
                                    : 75
                            ),
                    _HEADER_HEIGHT = _HEADER_HEIGHT || 825;
                        $(window).scroll(function (e) {
                            if ($('nav.top[data-no-scroll]').length) 
                                return;
                            if (this.pageYOffset >= _SCROLL_FIXED_CUTOFF && !$body.hasClass('scrolled')) {
                                $body.addClass('scrolled');
                            } else if (this.pageYOffset < _SCROLL_FIXED_CUTOFF && $body.hasClass('scrolled')) {
                                $body.removeClass('scrolled');
                            }
                            if (this.pageYOffset >= _HEADER_HEIGHT) {
                                _header_carousel_active = false;
                            } else {
                                _header_carousel_active = true;
                            }
                        });
                    }
                );
                </script>