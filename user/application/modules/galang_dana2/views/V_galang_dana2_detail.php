<div class="content" style="padding: 30px 40px 30px 40px;">
    <?php tampilnotif()?>
    <form action="<?php echo base_url('galang_dana2/tampildetail') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xl-8">
                <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        <div class="list-single-main-media fl-wrap" style="height: 470px;">
                            <div class="single-slider-wrapper fl-wrap">
                                <div class="single-slider fl-wrap" >
                                    <div class="slick-slide-item"><img src="<?php echo base_url() ?>images/galangdana/<?php echo $tampil['foto1_penerima'] ?>"></div>
                                    <div class="slick-slide-item"><img src="<?php echo base_url() ?>images/galangdana/<?php echo $tampil['foto2_penerima'] ?>"></div>
                                    <div class="slick-slide-item"><img src="<?php echo base_url() ?>images/galangdana/<?php echo $tampil['foto3_penerima'] ?>"></div>
                                </div>
                                <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="list-single-main-item fl-wrap">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3><?php echo $tampil['judul_donasi_penerima'] ?></h3><br>
                                <hr>
                                </br>
                                <h3>DESKRIPSI</h3>
                            </div>
                            <p><?php echo $tampil['deskripsi_penerima'] ?></p></br>
                                <br>
                                <br>
                                <hr>
                                </br>
                            <div class="list-single-main-item-title fl-wrap">
                                </br>
                                <h3>TUJUAN GALANG DANA INI</h3>
                            </div>
                                <p><?php echo $tampil['tujuan_penerima'] ?></p>
                                </br>
                                <p style="margin-left: 20px;"><b>Untuk teman-teman yang ingin membantu silahkan berdonasi dengan cara:</br>
                                    1. Klik tombol “DONASI SEKARANG”</br>
                                    2. Masukkan nominal donasi</br>
                                    3. Pilih metode pembayaran GO-PAY atau transfer Bank (transfer bank BNI, Mandiri, BCA, BRI, BNI Syariah, atau kartu kredit) dan transfer ke no. rekening yang tertera.</br>
                                    Terima kasih atas doa, dukungan dan bantuannya. Semoga Tuhan membalas semua kebaikan teman-teman #OrangBaik.</b></p>
                            <div class="list-author-widget-contacts">
                            </div>
                            <div class="post-author"><img src="<?php echo base_url() ?>images/avatar/4.jpg" alt=""><span>By , <?php echo $tampil['nama_pembuka'] ?></span></a></div>
                            <div class="post-opt">
                                <ul>
                                    <li><i class="fa fa-calendar-check-o"></i> <span><?php echo $tampil['tgl_dibuat'] ?></span></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="list-widget-social" style="margin-top: 16px;">
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="list-widget-social">
                                        <ul>
                                            <li><a class="show-reg-form modal-open" style="width: 100px; margin-top: -36px; margin-left: 20px; background-color: red;" class="add-list"><i class="fa fa-warning"></i>Report</a></li>
                                        </ul>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    <div class="list-single-main-item fl-wrap" id="sec4">
                        <div class="list-single-main-item-title fl-wrap">
                            <h3>KOMENTAR</h3>
                        </div>
                        <?php $no=1; 
                        foreach($getpesan_kesan as $rowQ) { ?>
                            <div class="reviews-comments-wrap" style="align: right;">
                                <div class="reviews-comments-item" style="width: 800px;">
                                    <div class="review-comments-avatar" style="width: 70px; height: 70px; margin-top: 10px;">
                                        <img src="<?php echo base_url() ?>images/avatar/1.jpg" alt="">
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <p style="font-size: 20px;"><b>Jessie</b></p>
                                        <h6 style="text-align: right; margin-right: -30px;"><a class="show-reg-form modal-open" style="margin-top: -30px; color: red;"><i class="fa fa-warning"></i></a></h6>
                                        <p>
                                            <?php echo $rowQ->pesan_kesan?>
                                        </p style="font-size: 14px;">
                                        <span style="margin-top: -2px;" class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i><?php echo $rowQ->tgl_dibuat?></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        <?php $no++;} ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="box-widget-wrap">
                    <div class="box-widget-item fl-wrap">
                        <div class="box-widget list-author-widget">
                            <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                <h2 style="font-size: 20px;"><b>Profil Penerima</b></h2>
                                <span class="list-author-widget-link"></span>
                                <img src="<?php echo base_url() ?>images/all/4.jpg" alt=""> 
                            </div>
                            <div class="box-widget-content">
                                <div class="list-author-widget-text">
                                    <div class="list-author-widget-text">
                                    </br>
                                    </br>
                                        <div class="row" style="text-align: left;">
                                        <div class="col-md-1">
                                            <span><i class="fa fa-tag"></i>
                                        </div>
                                        <div class="col-md-4" style="padding: 0px 5px 0px 10px;">
                                            Kategori
                                        </div>
                                        <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                            : <?php echo $tampil['kategori_penerima'] ?>
                                        </div>
                                        </div>
                                    </br>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-user-o"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 10px;">
                                                Nama lengkap
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                :  <?php echo $tampil['nama_penerima'] ?>
                                            </div>
                                        </div>
                                    </br>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-university"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 10px;">
                                                Sekolah/Kelas
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                : <?php echo $tampil['sekolah_penerima'] ?>
                                            </div>
                                        </div>
                                    </br>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 10px;">
                                                Alamat
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                : <?php echo $tampil['alamat_penerima'] ?> <?php echo $tampil['wilayah_desa'] ?> <?php echo $tampil['wilayah_kecamatan'] ?> <?php echo $tampil['wilayah_kabupaten'] ?> <?php echo $tampil['wilayah_desa'] ?>
                                            </div>
                                        </div>
                                    </br>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-phone"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 10px;">
                                                No HP/No WA
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                : <?php echo $tampil['telepon_penerima'] ?>/<?php echo $tampil['whatsapp_penerima'] ?>
                                            </div>
                                        </div>
                                    </br>
                                    <hr>
                                        <a class="trs-btn" href="<?php echo base_url('galang_dana2/bayarview/'. encrypt_url($tampil['id_galang_dana2'])); ?>" style="padding: 15px 105px 15px 102px; margin-bottom: -100;"> Donasi Sekarang </a>
                                        <p style="margin-right: 240px; margin-top: 20px;"><b>20</b> <i> hari tersisa</i>  </p>
                                        <div class="distance-title"> 
                                            <b>Rp 12.820,000</b> Terkumpul   <span style="padding-left: 120px;">1</span> %
                                        </div>
                                            <div class="distance-radius-wrap fl-wrap">
                                                <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-0">
                                                </div>
                                            </div>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="geodir-category-location" style="margin-right: 190px; margin-top: 30px; color: #0984e3;"><i><b>Target Rp <?php echo $tampil['target_donasi_penerima'] ?></b></i></div>
                                            <p style="margin-left: 263px; margin-top: -22px; color: black;"><b>229 Donasi</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-widget-item fl-wrap">
                        <div class="box-widget-item-header">
                            <h3>Donasi Terpopuler : </h3>
                        </div>
                        <div class="box-widget widget-posts blog-widgets">
                            <div class="box-widget-content">
                                <ul>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src="<?php echo base_url() ?>images/all/1.jpg"  alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Cafe "Lollipop"</a>
                                            <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span> 
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src="<?php echo base_url() ?>images/all/2.jpg"  alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title=""> Apartment in the Center</a>
                                            <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span> 
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src="<?php echo base_url() ?>images/all/3.jpg"  alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Event in City Mol</a>
                                            <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src="<?php echo base_url() ?>images/all/4.jpg"  alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Event in City Mol</a>
                                            <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </form>
</div>

                  
                   
                          