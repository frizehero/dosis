<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
<link href="<?php echo base_url() ?>reset.css" rel="stylesheet"></head>
<link href="<?php echo base_url() ?>plugins.css" rel="stylesheet"></head>
<link href="<?php echo base_url() ?>style.css" rel="stylesheet"></head>
<link href="<?php echo base_url() ?>color.css" rel="stylesheet"></head>

<style type="text/css">
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place front is invalid - may break your css so removed */  
    padding-top: 100px; /* Location of the box - don't know what this does?  If it is to move your modal down by 100px, then just change top below to 100px and remove this*/
    left: 0;
    right:0; /* Full width (left and right 0) */
    top: 0;
    bottom: 0; /* Full height top and bottom 0 */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    z-index: 9999; /* Sit on top - higher than any other z-index in your site*/


}

.modal-backdrop {
  z-index: -1;
}

</style>


<body>


    <?php 


 
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

$menu = $uri_segments[3];

    ?>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <header class="main-header dark-header fs-header sticky">
            <div class="header-inner">
                <div class="logo-holder">
                    <a href="user-beranda-login.html"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="header-search vis-header-search">
                    <div class="header-search-input-item">
                        <input type="text" placeholder="Ketik Disini" value=""/>
                    </div>
                    <button class="header-search-button" onclick="window.location.href='#'"><i class="fa fa-search"></i></button>
                </div>
                <div class="show-search-button"><i class="fa fa-search"></i> <span>Cari</span></div>
                <a href="form-galangdana.html" class="add-list">Galang Dana <span><i class="fa fa-plus"></i></span></a>
                <div class="header-user-menu">
                    <div class="header-user-name">
                        <span><img src="images/avatar/4.jpg" alt=""></span>
                        Abdul Hasan
                    </div>
                    <ul>
                        <li><a href="user-dashboard-donasi.html"> Dashboard</a></li>
                        <li><a href="user-beranda-awal.html">Log Out</a></li>
                    </ul>
                </div>
                <!-- nav-button-wrap--> 
                <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation --> 
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="user-beranda-login.html">BERANDA</a>
                            </li>
                            <li>
                                <a href="#">KATEGORI <i class="fa fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="kategori-putus-sekolah.html">Siswa Putus Sekolah</a></li>
                                    <li><a href="kategori-tidak-mampu.html">Siswa Tidak Mampu</a></li>
                                    <li><a href="kategori-kecelakaan-sakit.html">Kecelakaan / Sakit</a></li>
                                    <li><a href="kategori-pembangunan.html">Pembangunan</a></li>
                                    <li><a href="kategori-kebakaran.html">Kebakaran</a></li>
                                    <li><a href="kategori-banjir.html">Banjir</a></li>
                                    <li><a href="kategori-tanah-longsor.html">Tanah Longsor</a></li>
                                    <li><a href="kategori-kabeh.html">Lainnya ></a></li>
                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="#">TENTANG KAMI <i class="fa fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="user-tentang-kami.html">Donasi Siswa.com</a></li>
                                    <li><a href="#">Blog</a></li>
                                        <!--third  level end-->
                                    </li>
                                </ul>
                                <!--second level end-->
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
            </div>
        </header>        
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="scrollbar-sidebar">
                    <div class="fixed-bar fl-wrap" style="padding: 10px; margin-top: 20px;">
                        <div class="user-profile-menu-wrap fl-wrap">
                            <!-- user-profile-menu-->
                            <div class="user-profile-menu">
                                <h3>Dashboard</h3>
                                <ul>
                                    <?php if ($menu=="donasi_saya"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                        <a href="<?php echo base_url('donasi_saya'); ?>">
                                            <i class="fa fa-th-list"></i> Donasi Saya
                                            </a>
                                        </li>
                                    <?php if ($menu=="#"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                        <a href="<?php echo base_url('#'); ?>">
                                            <i class="fa fa-calendar-check-o"></i> Galang Dana Saya
                                            </a>
                                        </li>
                                    <?php if ($menu=="#"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                        <a href="<?php echo base_url('#'); ?>">
                                            <i class="fa fa-comments-o"></i> Komentar
                                            </a>
                                        </li>
                                    <?php if ($menu=="#"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                        <a href="<?php echo base_url('#'); ?>">
                                            <i class="fa fa-envelope-o"></i> Inbox
                                            </a>
                                        </li>
                                </ul>
                            </div>
                            <div class="user-profile-menu">
                                <h3>Profile</h3>
                                <ul>
                                    <?php if ($menu=="#"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                        <a href="<?php echo base_url('#'); ?>">
                                            <i class="fa fa-user-o"></i>Edit profile
                                            </a>
                                        </li>
                                    <?php if ($menu=="#"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                        <a href="<?php echo base_url('#'); ?>">
                                            <i class="fa fa-unlock-alt"></i>Edit Password
                                            </a>
                                        </li>
                                </ul>
                            </div>
                            <!-- user-profile-menu end-->                                        
                            <a href="#" class="log-out-btn">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <?php
                                  $this->load->view($namamodule .'/'.$namafileview);
                                ?>           



            </div>
        </div>
    </div>
    <footer class="main-footer dark-footer  ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3>DOSIS.com</h3>
                        <div class="footer-contacts-widget fl-wrap">
                            <p>Sebuah gerakan donasi di lingkungan sekolah yang dilakukan untuk membantu siswa yang sedang terkena bencana maupun siswa yang tidak mampu dan tidak bisa sekolah.</p>
                            <ul  class="footer-contacts fl-wrap">
                                <li><span><i class="fa fa-envelope-o"></i> Email :</span><a href="#" target="_blank">Dosis@domain.com</a></li>
                                <li> <span><i class="fa fa-map-marker"></i> Lokasi :</span><a href="#" target="_blank">Malang - Probolinggo</a></li>
                                <li><span><i class="fa fa-phone"></i> Phone :</span><a href="#">081234567890</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3>Postingan Lainnya</h3>
                        <div class="widget-posts fl-wrap">
                            <ul>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Vivamus dapibus rutrum</a>
                                        <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="images/all/2.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title=""> In hac habitasse platea</a>
                                        <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="images/all/3.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Tortor tempor in porta</a>
                                        <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3>Subscribe</h3>
                        <div class="subscribe-widget fl-wrap">
                            <p>Ingin mendapatkan info terupdate dari DOSIS.com, jangan lupa Subscribe. </p>
                            <div class="subcribe-form">
                                <form id="subscribe">
                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-rss"></i> Subscribe</button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3>Tentang</h3>
                        <div class="footer-contacts-widget fl-wrap">
                            <p>Temukan jawabanmu disini</p>
                            <ul  class="footer-contacts fl-wrap">
                                <li><a href="user-syarat-ketentuan.html">Syarat dan Ketentuan</a></li>
                                <li><a href="user-tentang-kami.html">Tentang Kami</a></li>
                                <li><a href="user-hubungi-kami.html">Hubungi Kami</a></li>
                                <li><a href="pusat-bantuan-user.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer fl-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="copyright"> &#169; Dosis.com 2021 .  All rights reserved.</div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-social">
                            <ul>
                                <li><p>Share Dosis.com : </p></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="app-drawer-wrapper">
        <div class="drawer-nav-btn">
            <button type="button" class="hamburger hamburger--elastic is-active">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
        <div class="drawer-content-wrapper">
            <div class="scrollbar-container">
                <div class="drawer-section">
                </div>                
                <h3 class="drawer-heading">Maintenance in Progress</h3>
                <div class="drawer-section p-0">
                    <div class="todo-box">
                        <ul class="todo-list-wrapper list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="todo-indicator bg-warning"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox1266" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox1266">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Wash the car
                                                <div class="badge badge-danger ml-2">Rejected</div>
                                            </div>
                                            <div class="widget-subheading"><i>Written by Bob</i></div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-focus"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox1666" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox1666">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Task with hover dropdown menu</div>
                                            <div class="widget-subheading">
                                                <div>By Johnny
                                                    <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <div class="d-inline-block dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-primary"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox4777" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox4777">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Badge on the right task</div>
                                            <div class="widget-subheading">This task has show on hover actions!</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </div>
                                        <div class="widget-content-right ml-3">
                                            <div class="badge badge-pill badge-success">Latest Task</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-info"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox2444" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox2444">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Go grocery shopping</div>
                                            <div class="widget-subheading">A short description ...</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-sm btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-success"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="exampleCustomCheckbox3222" class="custom-control-input">
                                                <label class="custom-control-label" for="exampleCustomCheckbox3222">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Development Task</div>
                                            <div class="widget-subheading">Finish React ToDo List App</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="badge badge-warning mr-2">69</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <h3 class="drawer-heading">New Complain</h3>
                <div class="drawer-section">
                    <div class="notifications-box">
                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">Build the production release
                                            <div class="badge badge-danger ml-2">NEW</div>
                                        </h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">Something not important
                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/5.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/6.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/7.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                    <div class="avatar-icon">
                                                        <img src="assets/images/avatars/8.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                    <div class="avatar-icon"><i>+</i></div>
                                                </div>
                                            </div>
                                        </h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">This dot has an info state</h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon is-hidden"></span>
                                    <div class="vertical-timeline-element-content is-hidden">
                                        <h4 class="timeline-title">This dot has a dark state</h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>

    <script type="text/javascript" src="<?php echo base_url('assets/') ?>scripts/main.js"></script></body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/') ?>scripts/jquery-3.2.1.min.js" ></script>
    <script src="<?php echo base_url('assets/') ?>scripts/popper.min.js"></script>

    

    <!-- data table -->
    <script src="<?php echo base_url('assets/') ?>scripts/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/') ?>scripts/dataTables.bootstrap4.min.js" type="text/javascript"></script>



  <script>
$(document).ready( function () {
  $('#myTable').DataTable({          
                         
    "lengthMenu": true,             
    "bLengthChange": true,
    "scrollX": true,
    "responsive": true,
    lengthMenu: [10, 20, 50, 100, 200, 500],
   
  });  
});
</script>


<!-- Small modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ditolak?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">                                                                            
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <h5 h5 class="card-title">Keterangan Ditolak</h5>
                                                                                        <textarea rows="1" class="form-control autosize-input" style="height: 100px;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


</html>



<script>
$(document).ready(function(){


 load_data();

 load_datatanah();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>inventory_peralatan/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });


 function load_datatanah(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>inventory_peralatan/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_datatanah(search);
  }
  else
  {
   load_datatanah();
  }
 });


});
</script>