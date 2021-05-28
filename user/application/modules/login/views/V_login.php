<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DOSIS.com </title>
    <meta name="viewport
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Rumah Sakit Terbaik Di Pasuruan.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url() ?>main.css" rel="stylesheet"></head>
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/dosis.ico">
<link href="<?php echo base_url() ?>reset.css" rel="stylesheet"></head>
<link href="<?php echo base_url() ?>plugins.css" rel="stylesheet"></head>
<link href="<?php echo base_url() ?>style.css" rel="stylesheet"></head>
<link href="<?php echo base_url() ?>color.css" rel="stylesheet"></head>

<body>
    <div class="loader-wrap">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <div id="main">
        <div class="fixed-bg">
            <div class="bg"  data-bg="images/bg/kategori.jpg"></div>
            <div class="overlay"></div>
            <div class="bubble-bg"></div>
        </div>
        <div class="container small-container counter-widget" data-countDate="09/12/2021">
            <div class="main-register-holder" style="margin-top: 40px;">
                <div class="main-register fl-wrap">
                    <div id="tabs-container">
                        <div class="cs-logo"><img src="images/logo2.png" alt=""></div>
                        <div class="log-separator fl-wrap"><span></span></div>
                        <h4>Login terlebih dahulu untuk memulai DONASI.</h4>
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Daftar</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-content">
                                <div class="custom-form">
                                    <form action="<?php echo base_url('login/proses_login' ) ?>" class="login-form" method="post">
                                        <label>Email * </label>
                                        <input name="username" placeholder="Username anda..." type="text" class="form-control">
                                        <label >Password * </label>
                                        <input name="password" id="examplePassword" placeholder="Password anda..." type="password" class="form-control">
                                        <button type="submit"  class="log-submit-btn"><span>Login</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Ingat saya</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lupa password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                            <label >Nama * </label>
                                            <input name="name" type="text"   onClick="this.select()" value="">
                                            <label>Username *</label>
                                            <input name="name2" type="text"  onClick="this.select()" value="">
                                            <label>Email *</label>
                                            <input name="email" type="text"  onClick="this.select()" value="">
                                            <label >Password *</label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"     class="log-submit-btn"  ><span><a href="user-beranda-login.html"> Daftar</a></span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>scripts/main.js"></script></body>




<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:40 GMT -->
</html>