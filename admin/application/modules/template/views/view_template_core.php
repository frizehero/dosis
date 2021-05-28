<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DONASI SISWA </title>
    <meta name="viewport
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Rumah Sakit Terbaik Di Pasuruan.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url() ?>main.css" rel="stylesheet"></head>
<link rel="shortcut icon" href="assets/images/dosis.ico">

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
        <div class="app-header header-shadow">
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
            <div class="app-header__content">
                <div class="app-header-left">
               </div>
                <div class="app-header-right">
                    <div class="header-dots">
                        <div class="app-header-left">
                            <div class="search-wrapper">
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Type to search">
                                    <button class="search-icon"><span></span></button>
                                </div>
                                <button class="close"></button>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-danger"></span>
                                    <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                    <span class="badge badge-dot badge-dot-sm badge-danger">Notifikasi</span>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header mb-0">
                                    <div class="dropdown-menu-header-inner bg-deep-blue">
                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                        <div class="menu-header-content text-dark">
                                            <h5 class="menu-header-title">Notifikasi</h5>
                                            <h6 class="menu-header-subtitle">Anda Menerima <b>21</b> notifikasi baru</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                            <span>Donasi</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                            <span>Galang Dana</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                            <span>Komentar</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="p-3">
                                                    <div class="pt-2 pb-0 card-body">
                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/14.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget"><b>Abdul Hasan</b> Telah melakukan galang dana</div>
                                                                            <div class="widget-subheading mt-17 opacity-6">
                                                                                <div>1 jam yang lalu</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget"><b>Viktor Martin</b> Telah melakukan galang dana</div>
                                                                            <div class="widget-subheading mt-17 opacity-6">
                                                                                <div>30 Menit yang lalu</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="p-3">
                                                    <div class="pt-2 pb-0 card-body">
                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/14.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget"><b>Abdul Hasan</b> Telah melakukan donasi ke <b>Suharji</b> </div>
                                                                            <div class="widget-subheading mt-17 opacity-6">
                                                                                <div>1 jam yang lalu</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/16.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget"><b>Farhan</b> Telah melakukan donasi ke <b>Ariyanto</b> </div>
                                                                            <div class="widget-subheading mt-17 opacity-6">
                                                                                <div>30 Menit yang lalu</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="p-3">
                                                    <div class="pt-2 pb-0 card-body">
                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/15.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget"><b>Abdul Hasan</b> Mengomentari postingan <b>Indah</b> </div>
                                                                            <div class="widget-subheading mt-17 opacity-6">
                                                                                <div>1 jam yang lalu</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget"><b>Viktor Martin</b> Telah melakukan galang dana</div>
                                                                            <div class="widget-subheading mt-17 opacity-6">
                                                                                <div>30 Menit yang lalu</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        
                    </div>
                    
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/13.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/13.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Abdul Hasan</div>
                                                                    <div class="widget-subheading opacity-8">Admin Website</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a href="<?php echo base_url('admin_login/logoutApp'); ?>"  class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</a>
                                                                    <!-- <button class="btn-pill btn-shadow btn-shine btn btn-focus"></button> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Status</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Aktivitas</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider nav-item">
                                                    </li>
                                                    <li class="nav-item-btn text-center nav-item" style="width: 150px; margin-left: 100px">
                                                        <a href="<?php echo base_url('edit_profil'); ?>">
                                                        <button class="btn-wide btn btn-primary btn-sm"> Edit Profil </button>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> Abdul Hasan </div>
                                    <div class="widget-subheading"> Admin 1 </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>        
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
            
                        <h3 class="themeoptions-heading">
                            <div> Pengaturan Header </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Reset
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Pilih Warna yang kamu sukai</h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light"></div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light"></div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-light"></div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-light"></div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark"></div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light"></div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark"></div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light"></div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light"></div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light"></div>
                                        <div class="divider"></div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light"></div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light"></div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light"></div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light"></div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light"></div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light"></div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark"></div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark"></div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark"></div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark"></div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark"></div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark"></div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark"></div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light"></div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark"></div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light"></div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light"></div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light"></div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark"></div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light"></div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light"></div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light"></div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light"></div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light"></div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light"></div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div> pengaturan Sidebar </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Reset
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <!--<li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch" data-on-label="ON" data-off-label="OFF">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Sidebar Background Image
                                                </div>
                                                <div class="widget-subheading">Enable background images for sidebar!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <li class="list-group-item">
                                    <h5 class="pb-2">Pilih Warna yang kamu sukai</h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light"></div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light"></div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light"></div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light"></div>
                                        <div class="divider"></div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light"></div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light"></div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light"></div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light"></div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light"></div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light"></div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light"></div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light"></div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light"></div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark"></div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light"></div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light"></div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light"></div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light"></div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light"></div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light"></div>
                                    </div>
                                </li>
                                <!--<li class="theme-settings-swatches d-none list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Background Opacity
                                                </div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div role="group" class="btn-group-sm btn-group">
                                                    <button type="button" class="btn-shadow opacity-3 active btn btn-primary">4%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-4 btn btn-primary">6%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-5 btn btn-primary">8%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-6 btn btn-primary">10%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-7 btn btn-primary">15%
                                                    </button>
                                                    <button type="button" class="btn-shadow opacity-8 btn btn-primary">20%
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <!--<li class="theme-settings-swatches d-none list-group-item">
                                    <h5>Sidebar Image Background
                                    </h5>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder swatch-holder-img active">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city1.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city2.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city3.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city4.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/city5.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract1.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract2.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract3.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract4.jpg">
                                        </a>
                                    </div>
                                    <div class="swatch-holder swatch-holder-img">
                                        <a class="img-holder switch-trigger">
                                            <img alt=" " src="assets/images/sidebar/abstract5.jpg">
                                        </a>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>        
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
                </div>    <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">

                            <?php if ($menu=="beranda"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('beranda'); ?>">
                                       <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use home"></i></i>Beranda
                                        </a>
                                    </li>

                            <?php if ($menu=="donasi"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                    <a href="<?php echo base_url('donasi'); ?>">
                                    <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use handshake-o"></i></i>Donasi
                                    </a>



                            <?php if ($menu=="kategori"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('kategori'); ?>">
                                       <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use bars"></i></i>Kategori
                                        </a>
                                    </li>

                            <?php if ($menu=="konfirmasi"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('konfirmasi'); ?>">
                                       <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use check-circle"></i></i>Konfirmasi
                                        </a>
                                    </li>

                            <?php if ($menu=="laporan"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('laporan'); ?>">
                                       <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i></i>Laporan
                                        </a>
                                    </li>


                            <li >
                                <a href="#" >
                                <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use file-text"></i></i>Report
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse mm-show">

                                     <?php if ($menu=="report_user"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('report_user'); ?>">
                                           <i class="metismenu-icon"></i>Report User
                                        </a>
                                    </li>

                                    <?php if ($menu=="report_postingan"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('report_postingan'); ?>">
                                           <i class="metismenu-icon"></i>Report Postingan
                                        </a>
                                    </li>

                                  
                                </ul>
                            </li>

                            <li >
                                <a href="#" >
                                <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use history"></i></i>History
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse mm-show">

                                     <?php if ($menu=="history_donasi"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('history_donasi'); ?>">
                                           <i class="metismenu-icon"></i>History Donasi
                                        </a>
                                    </li>

                                    <?php if ($menu=="history_pembayaran"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('history_pembayaran'); ?>">
                                           <i class="metismenu-icon"></i>History Pembayaran
                                        </a>
                                    </li>

                                  
                                </ul>
                            </li>

                            <?php if ($menu=="profil_admin"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('profil_admin'); ?>">
                                       <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-circle"></i></i>Profil Admin
                                        </a>
                                    </li>

                            <?php if ($menu=="profil_user"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('profil_user'); ?>">
                                       <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use users"></i></i>Profil User
                                        </a>
                                    </li>
                            
                            <?php if ($menu=="galang_dana2"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('galang_dana2'); ?>">
                                       <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use user-circle"></i></i>Galang Dana
                                        </a>
                                    </li>

                            <li >
                                <a href="#" >
                                <i class="metismenu-icon fa fa-fw"><i class="fa fa-fw" aria-hidden="true" title="Copy to use gear"></i></i>Pengaturan
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse mm-show">

                                     <?php if ($menu=="edit_profil"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('edit_profil'); ?>">
                                           <i class="metismenu-icon"></i>Edit Profil
                                        </a>
                                    </li>

                                    <?php if ($menu=="bantuan_faq"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('bantuan_faq'); ?>">
                                           <i class="metismenu-icon"></i>Bantuan (Faq)
                                        </a>
                                    </li>

                                    <?php if ($menu=="tentang_kami"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                       <a href="<?php echo base_url('tentang_kami'); ?>">
                                           <i class="metismenu-icon"></i>Tentang Kami
                                        </a>
                                    </li>

                                    <?php if ($menu=="admin_login"){?><li class="mm-active"><?php }else{?><li><?php }?>
                                    <a href="<?php echo base_url('admin_login/logoutApp'); ?>">
                                           <i class="metismenu-icon"></i>Log Out
                                        </a>
                                    </li>

                                  
                                </ul>
                            </li>
                             
                           
                        </ul>
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