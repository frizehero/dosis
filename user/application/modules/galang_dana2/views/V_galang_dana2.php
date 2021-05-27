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
                                        <div class="geodir-category-img" style="height: 170px;">
                                            <img src="<?php echo base_url() ?>images/galangdana/<?php echo $rowP->identitas_pembuka;?>">
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
                                    <div class="text-center" style="background-color:white;">
                                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">Hapus</button>
                                        <a href="<?php echo base_url('galang_dana2/editview/'. encrypt_url($rowP->id_galang_dana2)); ?>"class="mr-2 border-0 btn-transition btn btn-outline-danger">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                                  <!-- Modal HAPUS -->
                                <div class="modal fade" id="hapus<?php echo $no ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="<?php echo base_url('galang_dana2/hapus') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <!--Modal body-->
                                                    <p class="text-semibold text-main"></p>
                                                    <p>Anda Yakin Ingin Menghapus <b>galang dana ini</b> ? </p>

                                                    <input name="id" type="hidden" value="<?php echo $rowP->id_galang_dana2 ?>" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                                    <button class="btn btn-primary" type="submit">Hapus</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            <?php $no++;} ?>
                            </div>
                        <div class="text-center">
                            <button class="btn-shadow btn-wide btn-pill btn btn-primary">
                                Lihat Lainnya
                            </button>
                        </div>
                    </div>

                    
                  

                  
                   
                          