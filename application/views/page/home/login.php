<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For Search Engine Meta Data  -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="yoursite.com" />

    <title>Blog</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url(); ?>assets/image/brand-logo.png"/>

    <!-- Main structure css file -->
    <link  rel="stylesheet" href="<?php echo base_url(); ?>assets_old/css/bootstrap.min.css">
    <link  rel="stylesheet" href="<?php echo base_url(); ?>assets_old/css/login-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"></div>
</div>
<!-- Preloader End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">




            <!-- login start -->
            <div class="authfy-login">
                <!-- panel-login start -->
                <div class="authfy-panel panel-login text-center active">
                    <div class="authfy-heading">
                        <h3 class="auth-title">Login to your account</h3>
                        <p>Don’t have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up Free!</a></p>
                    </div>
                    <!-- social login buttons start -->
                    <div class="row social-buttons">
                        <div class="col-xs-4 col-sm-4">
                            <a href="#" class="btn btn-lg btn-block btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-4">
                            <a href="#" class="btn btn-lg btn-block btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-4">
                            <a href="#" class="btn btn-lg btn-block btn-google">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div><!-- ./social-buttons -->
                    <div class="row loginOr">
                        <div class="col-xs-12 col-sm-12">
                            <hr class="hrOr">
                            <span class="spanOr">or</span>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <?php
                                $data = array(
                                    'class' => 'loginForm',
                                    'name' => 'loginForm'
                                );
                                echo form_open('user/login', $data);
                            ?>
                                <div class="form-group wrap-input">
                                    <input type="username" class="form-control email" name="username" placeholder="Email address">
                                    <span class="focus-input"></span>
                                </div>
                                <div class="form-group wrap-input">
                                    <div class="pwdMask">
                                        <input type="password" class="form-control password" name="password" placeholder="Password">
                                        <span class="focus-input"></span>
                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                    </div>
                                </div>
                                <div class="row remember-row">
                                    <div class="col-xs-6 col-sm-6">
                                        <label class="checkbox text-left">
                                            <input type="checkbox" value="remember-me"><span class="label-text">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <p class="forgotPwd">
                                            <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a>
                                        </p>
                                    </div>
                                </div> <!-- ./remember-row -->
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login with email</button>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div> <!-- ./panel-login -->



                <!-- panel-signup start -->
                <div class="authfy-panel panel-signup text-center">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="authfy-heading">
                                <h3 class="auth-title">Sign up for free!</h3>
                            </div>
                            <?php
                                $data = array(
                                    'class' => 'titleInput',
                                    'name' => 'signupForm'
                                );
                                echo form_open_multipart('user/registration', $data);
                            ?>
                                <div class="form-group wrap-input">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <span class="focus-input">Without whitespace</span>
                                </div>
                                <div class="form-group wrap-input">
                                    <input type="email" class="form-control" name="email" placeholder="Email address">
                                    <span class="focus-input"></span>
                                </div>
                                <div class="form-group wrap-input">
                                    <input type="text" class="form-control" name="fullname" placeholder="Full name">
                                    <span class="focus-input"></span>
                                </div>
                                <div class="form-group wrap-input">
                                    <div class="pwdMask">
                                        <input  type="password" class="form-control" name="password" placeholder="Password">
                                        <span class="focus-input"></span>
                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                                </div>
                            <?php echo form_close() ?>
                            <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                        </div>
                    </div>
                </div> <!-- ./panel-signup -->




                <!-- panel-forget start -->
                <div class="authfy-panel panel-forgot">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="authfy-heading">
                                <h3 class="auth-title">Recover your password</h3>
                                <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                            </div>
                            <form name="forgetForm" class="forgetForm" action="#" method="POST">
                                <div class="form-group wrap-input">
                                    <input type="email" class="form-control" name="username" placeholder="Email address">
                                    <span class="focus-input"></span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Recover your password</button>
                                </div>
                                <div class="form-group">
                                    <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                                </div>
                                <div class="form-group">
                                    <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- ./panel-forgot -->
            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->
<!-- Javascript Files -->

<!-- initialize jQuery Library -->
<script src="<?php echo base_url(); ?>assets_old/js/jquery-2.2.4.min.js"></script>

<!-- for Bootstrap js -->
<script src="<?php echo base_url(); ?>assets_old/js/bootstrap.min.js"></script>

<!-- Custom js-->
<script src="<?php echo base_url(); ?>assets_old/js/custom.js"></script>

</body>
</html>
