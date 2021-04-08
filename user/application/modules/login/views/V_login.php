<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login User DONASI</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url() ?>main.css" rel="stylesheet"></head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Mari saling berbagi</h3>
                                            <p>Berbagi hal positif kepada orang itu sangatlah sederhana. Cukup dengan memperlihatkan senyuman indah dari bibirmu, itu sudah hal yang menyenangka.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Berbagi itu indah</h3>
                                            <p>"Berbagi bukan tentang seberapa besar dan seberapa berharganya hal yang kau beri, namun seberapa tulus dan ikhlasnya apa yang ingin kau beri."</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citydark.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Jangan lupa bersyukur</h3>
                                            <p>"Punya harta dan ilmu jika hanya dinikmati sendiri, tidak banyak berarti. Berbagi adalah cara bersyukur tertinggi atas nikmat yang diberi-NYA.".</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="modal-dialog w-170 mx-auto">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- <div class="app-logo"></div> -->
                                        <h4 class="mb-0">
                                            <span class="d-block">Selamat Datang,</span>
                                            <span>Silahkan Login ke dalam sistem.</span>
                                        </h4>
                                        <div class="divider row"></div>
                                        <div>
                                        <form action="<?php echo base_url('login/proses_login' ) ?>" class="login-form" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="exampleEmail" class="">Username</label>
                                                            <input name="username" placeholder="Username anda..." type="text" class="form-control">
                                                         </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="examplePassword" class="">Password</label>
                                                            <input name="password" id="examplePassword" placeholder="Password anda..." type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="position-relative form-check">
                                                    <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                                    <label for="exampleCheck" class="form-check-label">Ingat saya</label>
                                                </div>
                                                <div class="divider"></div>
                                                <h6 class="mb-0">Tidak memiliki akun? <a href="javascript:void(0);" class="text-primary"><a href="<?php echo base_url('admin_register'); ?>"> Daftar sekarang</a></a></h6>
                                                <div class="divider row"></div>
                                                <div class="d-flex align-items-center">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-primary btn-lg" type="submit">Login Sekarang</button>
                                                    </div>
                                                </div>
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
    </div>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>scripts/main.js"></script></body>




<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:40 GMT -->
</html>