<div class="content" style="padding: 30px 40px 30px 40px;">
                                    <?php tampilnotif()?>
                                    <?php $no=1; foreach ($tampil AS $rowP ) { ?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="list-single-main-wrapper fl-wrap" id="sec2">
                                                    <div class="list-single-main-media fl-wrap">
                                                        <div class="single-slider-wrapper fl-wrap">
                                                            <div class="single-slider fl-wrap"  >
                                                                <div class="slick-slide-item"><img src="images/all/4.jpg" alt=""></div>
                                                                <div class="slick-slide-item"><img src="images/all/5.jpg" alt=""></div>
                                                                <div class="slick-slide-item"><img src="images/all/6.jpg" alt=""></div>
                                                            </div>
                                                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="list-single-main-item fl-wrap">
                                                        <div class="list-single-main-item-title fl-wrap">
                                                            <h3><?php echo $rowP->judul_donasi_penerima;?></h3><br>
                                                            <hr>
                                                            </br>
                                                            <h3>DESKRIPSI</h3>
                                                        </div>
                                                        <p><?php echo $rowP->deskripsi_penerima;?></p></br>
                                                            <img src="images/all/28.jpg" alt="" width="650px">
                                                            <br>
                                                            <br>
                                                            <hr>
                                                            </br>
                                                        <div class="list-single-main-item-title fl-wrap">
                                                            </br>
                                                            <h3>TUJUAN GALANG DANA INI</h3>
                                                        </div>
                                                            <p><?php echo $rowP->tujuan_penerima;?></p>
                                                            </br>
                                                            <p style="margin-left: 20px;"><b>Untuk teman-teman yang ingin membantu silahkan berdonasi dengan cara:</br>
                                                                1. Klik tombol “DONASI SEKARANG”</br>
                                                                2. Masukkan nominal donasi</br>
                                                                3. Pilih metode pembayaran GO-PAY atau transfer Bank (transfer bank BNI, Mandiri, BCA, BRI, BNI Syariah, atau kartu kredit) dan transfer ke no. rekening yang tertera.</br>
                                                                Terima kasih atas doa, dukungan dan bantuannya. Semoga Tuhan membalas semua kebaikan teman-teman #OrangBaik.</b></p>
                                                        <div class="list-author-widget-contacts">
                                                        </div>
                                                        <div class="post-author"><a href="profil-penggalang dana.html"><img src="images/avatar/4.jpg" alt=""><span>By , <?php echo $rowP->nama_pembuka;?></span></a></div>
                                                        <div class="post-opt">
                                                            <ul>
                                                                <li><i class="fa fa-calendar-check-o"></i> <span>25 April 2021 - 15 Mei 2021</span></li>
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
                                                    <div class="reviews-comments-wrap">
                                                        <div class="reviews-comments-item">
                                                            <div class="review-comments-avatar">
                                                                <img src="images/avatar/1.jpg" alt="">
                                                            </div>
                                                            <div class="reviews-comments-item-text">
                                                                <h4><a href="#">Jessie Manrty</a></h4>
                                                                <h6 style="text-align: right; margin-right: -60px;"><a class="show-reg-form modal-open" style="margin-top: -30px; color: red;"><i class="fa fa-warning"></i></a></h6>
                                                                
                                                                <div class="clearfix"></div>
                                                                <p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
                                                                <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-comments-item">
                                                            <div class="review-comments-avatar">
                                                                <img src="images/avatar/2.jpg" alt="">
                                                            </div>
                                                            <div class="reviews-comments-item-text">
                                                                <h4><a href="#">Mark Rose</a></h4>
                                                                <h6 style="text-align: right; margin-right: -60px;"><a class="show-reg-form modal-open" style="margin-top: -30px; color: red;"><i class="fa fa-warning"></i></h6>
                                                                <div class="clearfix"></div>
                                                                <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                                <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-comments-item">
                                                            <div class="review-comments-avatar">
                                                                <img src="images/avatar/3.jpg" alt="">
                                                            </div>
                                                            <div class="reviews-comments-item-text">
                                                                <h4><a href="#">Adam Koncy</a></h4>
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                                                <div class="clearfix"></div>
                                                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                                <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="box-widget-wrap">
                                                <div class="box-widget-item fl-wrap">
                                                    <div class="box-widget list-author-widget">
                                                        <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                                            <h2 style="font-size: 20px;"><b>Farhan Ariyanto</b></h2>
                                                            <span class="list-author-widget-link"></span>
                                                            <img src="images/all/4.jpg" alt=""> 
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
                                                                        : Kecelakan/Sakit
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
                                                                            :  <?php echo $rowP->nama_penerima;?>
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
                                                                            : <?php echo $rowP->sekolah_penerima;?>
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
                                                                            : Jl.Kalimas No.6, RT 06/RW 07,Kel.Bumiayu,Kec.Kaliwangi,Kota Probolinggo,Jawa Timur,224352
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
                                                                            : <?php echo $rowP->telepon_penerima;?> / <?php echo $rowP->whatsapp_penerima;?>
                                                                        </div>
                                                                    </div>
                                                                </br>
                                                                <hr>
                                                                    <a class="trs-btn" href="<?php echo base_url('pembayaran2/tambahview'); ?>" style="padding: 15px 105px 15px 102px; margin-bottom: -100;"> Donasi Sekarang </a>
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
                                                                        <div class="geodir-category-location" style="margin-right: 190px; margin-top: 30px; color: #0984e3;"><i><b>Target Rp <?php echo $rowP->target_donasi_penerima;?></b></i></div>
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
                                                                    <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg"  alt=""></a>
                                                                    <div class="widget-posts-descr">
                                                                        <a href="#" title="">Cafe "Lollipop"</a>
                                                                        <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span> 
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
                                                                    <a href="#"  class="widget-posts-img"><img src="images/all/2.jpg"  alt=""></a>
                                                                    <div class="widget-posts-descr">
                                                                        <a href="#" title=""> Apartment in the Center</a>
                                                                        <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span> 
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
                                                                    <a href="#"  class="widget-posts-img"><img src="images/all/3.jpg"  alt=""></a>
                                                                    <div class="widget-posts-descr">
                                                                        <a href="#" title="">Event in City Mol</a>
                                                                        <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                                                    </div>
                                                                </li>
                                                                <li class="clearfix">
                                                                    <a href="#"  class="widget-posts-img"><img src="images/all/4.jpg"  alt=""></a>
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
                                    <?php $no++;} ?>
                                </div>
                        </div>

                  
                   
                          