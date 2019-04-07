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
                <script>
                    $("#login-button").click(function (event) {
                        event.preventDefault();

                        $('form').fadeOut(500);
                        $('.wrapper').addClass('form-success');
                    });
                </script>