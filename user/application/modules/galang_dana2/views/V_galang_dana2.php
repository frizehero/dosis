<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Data Galang Dana
                                        <div class="page-title-subheading">Halaman galang dana</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                  <a href="<?php echo base_url('galang_dana2/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>

                                </div>    
                              </div>
                        </div>

                        <?php tampilnotif()?>
                            <div class="list-main-wrap fl-wrap card-listing" style="padding: 10px 20px 20px 20px;">
                            <?php $no=1; foreach ($tampil AS $rowP ) { ?>
                                <div class="listing-item" style="width: 320px;">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <img src="<?php echo base_url() ?>images/galangdana/<?php echo $rowP->identitas_pembuka;?>">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap" style="height : 280px;">
                                          <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                              <span class="avatar-tooltip">Posting oleh  <strong>Dhinda</strong></span>
                                          </div>
                                          <h3><a href="user-detail-donasi.html"><?php echo $rowP->nama_pembuka;?></a></h3>
                                          <p><b>120</b> <i> hari tersisa</i>  </p>
                                          <div class="distance-title"> 
                                              <b>Rp 4.580,000</b> Terkumpul   <span style="padding-left: 60px;">1</span> %
                                          </div>
                                              <div class="distance-radius-wrap fl-wrap">
                                                  <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                  <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-0">
                                                  </div>
                                              </div>
                                          <div class="geodir-category-options fl-wrap">
                                              <div class="geodir-category-location"><i>Target Rp 8,000,000</i></div>
                                          </div>
                                        </div>
                                    </article>
                                </div>
                            <?php $no++;} ?>
                            </div>
                        <div class="text-center">
                            <button class="btn-shadow btn-wide btn-pill btn btn-primary">
                                Lihat Lainnya
                            </button>
                        </div>
                    </div>

                  
                   
                          