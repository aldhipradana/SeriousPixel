<link rel="stylesheet" href="assets\css\login.css">
    <link rel="stylesheet" href="assets\css\styles.css">
        <div class="wrapper">
            <div class="container">
                <h1>Login Form</h1>
                <form class="form">
                    <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                            <button type="submit" id="login-button">Login</button>
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

                <script>
                    $("#login-button").click(function (event) {
                        event.preventDefault();

                        $('form').fadeOut(500);
                        $('.wrapper').addClass('form-success');
                    });
                </script>

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