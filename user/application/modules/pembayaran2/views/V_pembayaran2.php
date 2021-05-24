<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>History Pembayaran
                                    </div>
                                </div>
                                <div class="page-title-actions">
                    
                                  <a href="<?php echo base_url('pembayaran2/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>

                                </div>    
                            </div>
                        </div>
                        <?php tampilnotif()?>
                        <div class="dashboard-list-box fl-wrap activities" style="margin-top:-30px;">
                            <div class="dashboard-header fl-wrap">
                                <h3>Riwayat Aktivitas Donasi-mu</h3>
                            </div>
                            <?php $no=1; foreach ($tampil AS $rowP ) { ?>          
                            <div class="dashboard-list">
                                <div class="dashboard-message">
                                    <div class="dashboard-listing-table-image" style="padding-left:15px;">
                                        <img src="images/all/3.jpg" alt="">
                                    </div>
                                    <div class="dashboard-message-text">
                                        <p><i class="fa fa-heart" style="margin-right:10px; color:#4db7fe;"></i>Anda Telah Berdonasi ke Peristiwa :</p>
                                        <h4><a href="listing-single.html" style="color:#4db7fe;"> Berbagi Sembako Untuk Sekolah Korban Banjir di Dringu,Kabupaten Probolinggo</a></h4>
                                    </div>
                                </div>
                                <div class="dashboard-message">
                                    <div class="dashboard-message-text">
                                        <p><i class="fa fa-comments-o"></i> <?php echo $rowP->nama_rekening;?></p>
                                        <p><i class="fa fa-check"></i> <?php echo $rowP->nominal_donasi;?></p>
                                        <p><i class="fa fa-gears" style="margin-left:1/00px;"></i> <?php echo $rowP->tgl_pembayaran;?></p>
                                        <div class="distance-title" style="margin-bottom:-25px; margin-left:264px;"> 
                                            <b>Rp 4.580,000</b> Terkumpul   <span style="padding-left: 60px;">1</span> %
                                            <div> <br></div>
                                            <div class="distance-radius-wrap fl-wrap">
                                            <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-17"><div class="rangeslider__fill" style="width: 10px;"></div><div class="rangeslider__handle" style="left: 0px;"></div></div>
                                            <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-0"></div>
                                            </div>
                                            <div> <br></div>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="geodir-category-location"><i>Target Rp 8,000,000  <p style="float:right; margin-top:-4px;">59 hari tersisa</p></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <?php $no++;} ?>
                        </div> 
                        <div class="pagination">
                            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                            <a href="#" class="current-page">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                   

            