<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="profile-edit-container">           
                                        <div class="statistic-container fl-wrap" style="margin-top:20px;">
                                            <div class="statistic-item-wrap" style="width:330px; height:120px; padding-right: 15px;"> 
                                                <div class="statistic-item gradient-bg fl-wrap">
                                                    <i class="fa fa fa-eye"></i>
                                                    <div class="statistic-item-numder">RP 30.000</div>
                                                    <nav class="scroll-nav">
                                                    <h5>Total Donasi</h5>
                                                </div>
                                            </div>
                                            <div class="statistic-item-wrap" style="padding-right: 15px; width: 330px;"> 
                                                <div class="statistic-item gradient-bg fl-wrap">
                                                    <i class="fa fa-heart-o" style="margin-bottom:-10px;"></i>
                                                    <div class="statistic-item-numder">1</div>
                                                    <h5>Galang Dana</h5>
                                                </div>
                                            </div>
                                            <div class="statistic-item-wrap" style="height: 120px; width: 330px;"> 
                                                <div class="statistic-item gradient-bg fl-wrap">
                                                    <i class="fa fa-comments-o" style="margin-bottom:-5px;"></i>
                                                    <div class="statistic-item-numder">15</div>
                                                    <h5>Total Komentar</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                            </div>  
                        </div>

                        <?php tampilnotif()?>
                            <div class="list-main-wrap fl-wrap card-listing" style="padding: 10px 20px 20px 20px;">
                            <?php $no=1; foreach ($tampil AS $rowP ) { ?>
                                <div class="listing-item" style="width: 320px;">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img" style="height: 170px;">
                                            <img style="height: 170px;" src="<?php echo base_url() ?>images/galangdana/<?php echo $rowP->identitas_pembuka;?>">
                                        </div>
                                        <div class="geodir-category-content fl-wrap" style="height : 280px;">
                                          <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo base_url() ?>images/avatar/5.jpg" alt=""></a>
                                              <span class="avatar-tooltip">Posting oleh  <strong>Dhinda</strong></span>
                                          </div>
                                          <h3 style="height: 90px;"><a href="<?php echo base_url('galang_dana2/detailview/' . encrypt_url($rowP->id_galang_dana2)); ?>"><?php echo $rowP->judul_donasi_penerima; ?></a></h3>
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
                                              <div class="geodir-category-location"><i>Target Rp <?php echo $rowP->target_donasi_penerima;?></i></div>
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

                    
                  

                  
                   
                          