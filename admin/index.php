<!DOCTYPE html>

<html lang="en">
    <?php
include('../inc/config.php');
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="d-xl-flex">
    <div class="container d-lg-flex d-xl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center divcontainer">
        <div class="row" style="width: 530px;">
            <div class="col-md-6 loginbg">
                <div></div>
            </div>
            <div class="col-md-6" style="font-size: 20px;padding: 50px;">
                <div style="width: 350px;">
                    <div>
                        <div>
                            <p class="lead" style="font-weight: bold;letter-spacing: 1px;">Admin Login</p>
                        </div>
                    </div>
                    <form name="loginForm" id="loginForm" action="assets/functions/login.php" method="post">
                        <div class="inputdiv" data-bss-hover-animate="pulse">
                            <i class="fa fa-user"></i>
                            <input name="uname" id="uname" type="email" placeholder="Email">
                        </div>
                        <div class="inputdiv" data-bss-hover-animate="pulse">
                            <i class="fa fa-lock"></i>
                            <input name="pwd" id="pwd" type="password" placeholder="Password">
                        </div>
                        <div><button class="logbutt btn btn-primary" data-bss-hover-animate="pulse" type="submit">Login</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <!--<script src="assets/js/validation.js"></script>-->
    <script src="assets/js/bs-init.js"></script>

</body>

</html>