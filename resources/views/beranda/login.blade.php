<!DOCTYPE html>
<!-- saved from url=(0025)http://localhost/ta/login -->
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SSF E-Learning | Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./SSF E-Learning _ Login_files/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./SSF E-Learning _ Login_files/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="./SSF E-Learning _ Login_files/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="./SSF E-Learning _ Login_files/frontend-style.css">
    <link rel="stylesheet" type="text/css" href="./SSF E-Learning _ Login_files/font.css">
    <link rel="stylesheet" type="text/css" href="./SSF E-Learning _ Login_files/frontend-style.css">
    <!------ Include the above in your HEAD tag ---------->
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/ta/assets/images/favicon.png">

    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
</head>

<body class="">
    <!----- Preloader Box ----->
    <div class="edu_preloader" style="display: none;">
        <div class="edu_status">
            <img src="./SSF E-Learning _ Login_files/Hourglass.gif" alt="loader">
        </div>
    </div>
    <!----- Preloader Box ----->
    <div class="pxn_login_main">
        <div class="pxn_login_box">
            <div class="pxn_login_box_inner">
                <div class="pxn_logo">
                    <img src="./SSF E-Learning _ Login_files/logo.png" class="img-fluid">
                </div>
                <div class="pxn_login_data">
                    <h4>Please Login to Continue</h4>
                    <form class="form" method="post" action="{{ url('login') }}" data-redirect="yes">
                        @csrf
                        <div class="edu_field_holder">
                            <input type="text" class="edu_form_field require" name="username" placeholder="Username"
                                autocomplete="off" value="">
                        </div>
                        <div class="edu_field_holder">
                            <input type="password" name="password" class="require edu_form_field" placeholder="Password"
                                value="">
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="loginLinks checkbox_holder">
                                    <input type="checkbox" id="auth_remember" name="remember_me">
                                    <label for="auth_remember">Remember me</label>
                                </div>
                            </div>

                        </div>
                        <div class="login_btn_wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="login_submit_btn">
                                        <div class="backToHome"><a class="edu_btn" href="{{ url('') }}">Back to
                                                Home</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-md-right">
                                    <button class="edu_btn edu_btn_black" id="auth_login" type="submit">Login</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login end-->
    <script src="./SSF E-Learning _ Login_files/jquery.min.js.download"></script>
    <script src="./SSF E-Learning _ Login_files/bootstrap.min.js.download"></script>
    <script src="./SSF E-Learning _ Login_files/toastr.min.js.download"></script>
    <script src="./SSF E-Learning _ Login_files/jquery.magnific-popup.min.js.download"></script>
    <script src="./SSF E-Learning _ Login_files/login.js.download"></script>
    <script src="./SSF E-Learning _ Login_files/valid.js.download"></script>

</body>

</html>
