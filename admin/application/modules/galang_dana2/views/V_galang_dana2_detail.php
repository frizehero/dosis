<div class="app-main__inner">
                    
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Deskripsi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Donatur</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                <span>Komentar</span>
                            </a>
                        </li>
                    </ul>
                        <?php tampilnotif()?>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Deskripsi Donasi
                                                <div class="btn-actions-pane-right">   
                                                    <a href="donasi.html">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="mt-2">
                                                    <?php echo $tampil['deskripsi_penerima'] ?>
                                                </div>
                                                </br>
                                                <div> 
                                                    <img width="300" height="200" class="dashboard-sparkline-carousel-4-pop" src="<?php echo base_url() ?>assets/images/galangdana/<?php echo $tampil['foto2_penerima'] ?>" name="foto2" alt=""> 
                                                    <img width="300" height="200" class="dashboard-sparkline-carousel-4-pop" src="<?php echo base_url() ?>assets/images/galangdana/<?php echo $tampil['foto3_penerima'] ?>" name="foto3" alt="">
                                                    &nbsp;
                                                    
                                                </div>
                                                <div> 
                                                    <br> 
                                                </div>
                                                
                                                <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Tujuan Donasi
                                                <div class="btn-actions-pane-right">   
                                                    <a href="donasi.html">
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="mt-2">
                                                   <?php echo $tampil['tujuan_penerima'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                    
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-header">Info Pembayaran Terbaru</div>
                                        <div class="table-responsive">
                                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No.</th>
                                                        <th>Nama</th>
                                                        <th class="text-center">Tanggal Donasi</th>
                                                        <th class="text-center">Nominal</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <?php $no=1; 
                                                foreach ($tampildonatur AS $rowP ) { ?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center text-muted"><?php echo $no;?></td>
                                                            <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <div class="widget-content-left">
                                                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading"><?php echo $rowP->nama_rekening; ?></div>
                                                                            <div class="widget-subheading opacity-7">Pendonasi</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center"><?php echo $rowP->tgl_pembayaran; ?></td>
                                                            <td class="text-center">
                                                                <div class="badge badge-pill">Rp.<?php echo $rowP->nominal_donasi; ?></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class=" badge badge-info">Sudah Bayar</div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php $no++;} ?>
                                            </table>
                                            <div> <br> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="class=mb-2 mr-2 btn-icon btn-pill btn btn-primary btn-icon btn-icon-right btn-pill">Lihat Semua<i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-down"></i></button>
                                </div>
                            </div>
                            <div> <br> </div>
                    

                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                        <?php $no=1; 
                        foreach ($tampilkomentar AS $rowP ) { ?>
                            <div class="card-header">
                                <div class="media flex-wrap w-100 align-items-center">
                                    <img style="width: 40px; height: auto;" src="assets/images/avatars/3.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body ml-3">
                                        <a href="javascript:void(0)"><?php echo $rowP->nama_rekening; ?></a>
                                        <div class="text-muted small">Tgl Komentar : <?php echo $rowP->tgl_pembayaran; ?></div>
                                    </div>
                                    <div class="text-muted small ml-3">
                                        <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                                            <i class="ion ion-ios-eye text-muted fsize-3"></i>&nbsp;
                                        <span class="align-middle">1,203</span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    <?php echo $rowP->pesan_kesan; ?>
                                </p>
                            </div>
                        <?php $no++;} ?>
                        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                            <div class="px-4 pt-3">
                                <a href="javascript:void(0)" class="text-muted ml-3">
                                    <i class="lnr-thumbs-up"></i> 15
                                </a>
                                <a href="javascript:void(0)" class="text-muted ml-3">
                                    <i class="lnr-thumbs-down"></i> 3
                                </a>
                            </div>
                            <div class="px-4 pt-3">
                                <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Balasan</button>
                            </div>
                        </div>
                    </div>  
                                </div>
                            </div>
                    
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="app-drawer-wrapper">
        <div class="drawer-nav-btn">
            <button type="button" class="hamburger hamburger--elastic is-active">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
        <div class="drawer-content-wrapper">
            <div class="scrollbar-container ps">
                <h3 class="drawer-heading">Pengaturan</h3>
                <div class="drawer-section">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">
                            <li class="mm-active">
                                </li><li>
                                    <a href="widgets-chart-boxes.html">
                                        <i class="metismenu-icon pe-7s-graph"></i>Bantuan (Faq)
                                    </a>
                                </li>
                                <li>
                                    <a href="peristiwa.html">
                                        <i class="metismenu-icon pe-7s-graph"></i>Email &amp; Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="kategori.html">
                                        <i class="metismenu-icon pe-7s-graph"></i>Tentang Kami
                                    </a>
                                </li>
                                <li>
                                    <a href="kategori.html">
                                        <i class="metismenu-icon pe-7s-graph"></i>Logout
                                    </a>
                                </li>
                            
                        </ul>
                    </div>
                </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                </div>
            </div>
        
    
    <div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script>


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:01:40 GMT -->
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body>

</html>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Balasan Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="assets/images/avatars/5.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">22 May 2020</div>
                                    <a href="javascript:void(0)">Alice Hampton</a>
                                    <div class="mt-2">
                                        Nulla mollis sem id tempus pharetra. Mauris finibus eros et leo ultricies volutpat. Nunc in
                                        lacus nec ex posuere gravida. Mauris metus nulla, mollis at felis vitae, congue ullamcorper
                                        velit. In vulputate dui
                                        sapien, in placerat tellus pellentesque ac. Duis pretium ex felis, sed vulputate orci
                                        efficitur id. Vivamus nec mauris ex. Nullam sed dolor id augue elementum ullamcorper. Donec
                                        sit amet consectetur erat.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="assets/images/avatars/7.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">12 April 2020</div>
                                    <a href="javascript:void(0)">Alice Hampton</a>
                                    <div class="mt-2">
                                        In quis tortor et urna fermentum varius et ac nibh. Praesent dignissim leo velit, in
                                        volutpat metus rutrum sit amet. Nulla gravida nibh magna, finibus ullamcorper lacus
                                        sollicitudin ut. Proin vehicula vitae lectus
                                        a dictum. Nunc eu eros ut velit porta tristique nec eu dolor. Sed auctor elit at sapien
                                        accumsan aliquet. Vestibulum at nunc dignissim, tristique ipsum vitae, dapibus dolor.
                                        Quisque tincidunt enim sed congue
                                        venenatis. Fusce non lacus et augue cursus faucibus sit amet vitae turpis. In hac habitasse
                                        platea dictumst. Curabitur tincidunt velit maximus eros lobortis, at hendrerit nulla cursus.
                                        Donec nec metus et elit
                                        accumsan ultrices.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="assets/images/avatars/9.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">31 Desember 2020</div>
                                    <a href="javascript:void(0)">Wayne Morgan</a>
                                    <div class="mt-2">
                                        Donec ornare eu lorem sit amet laoreet. Praesent mollis eros dui, eget tincidunt arcu rutrum
                                        ut. Morbi et dui molestie, tincidunt nibh vel, consequat sapien. Phasellus nec imperdiet
                                        erat, et viverra metus.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card mb-3">
                        <div class="card-body">
                            <div class="media">
                                <img style="width: 40px; height: auto;" src="assets/images/avatars/8.jpg" alt="" class="d-block ui-w-40 rounded-circle">
                                <div class="media-body ml-4">
                                    <div class="float-right text-muted small">01 Juli 2020</div>
                                    <a href="javascript:void(0)">Hallie Lewis</a>
                                    <div class="mt-2">
                                        Ea inani epicurei mea. No docendi antiopam quo, ad dicant viderer cotidieque vix. Ea mea
                                        dicat ludus, utroque explicari conclusionemque ius eu, in scaevola tractatos persecuti per.
                                    </div>
                                    <div class="small mt-2">
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-up"></i> 15
                                        </a>
                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                            <i class="lnr-thumbs-down"></i> 3
                                        </a>
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