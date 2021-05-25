<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Profil 
                                        <div class="page-title-subheading">Silahkan Ubah Profil Kamu</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                    <a href="<?php echo base_url('user_edit_profile/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>
                                </div>    
                            </div>
                        </div>

                        <?php tampilnotif()?>

                        <?php
                         $no=1;
                        foreach ($tampil as $res) { ?>
                            

                        <div class="main-card mb-3 card">
                        <form action="<?php echo base_url('user_edit_profile/edit') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                               <div class="col-md-9">
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap">
                                                <h4>My Account</h4>
                                            </div>
                                            <div><br></div>
                                            <div class="custom-form">
                                                <label><b>NAMA LENGKAP</b> <i class="fa fa-user-o"></i></label>
                                                <input name="nama" value="<?php echo $res->nama?>" type="text"class="form-control">
                                                <label><b>EMAIL</B><i class="fa fa-envelope-o"></i>  </label>
                                                <input name="email" value="<?php echo $res->email?>" type="text"class="form-control">
                                                <label><b>JENIS KELAMIN</b><i class="fa fa-male"></i>  </label>
                                                <input name="janis_kelamin" value="<?php echo $res->jenis_kelamin?>" type="text"class="form-control">
                                                <select data-placeholder="jenis kelamin" class="chosen-select" style="display: none;">
                                                    
                                                </select>
                                                <label><b>NO.TELEPON</b><i class="fa fa-phone"></i>  </label>
                                                <input name="no_telepon" value="<?php echo $res->no_telepon?>" type="text"class="form-control">
                                                <label><b>NO.WHATSAPP</b><i class="fa fa-whatsapp"></i>  </label>
                                                <input name="no_whatsapp" value="<?php echo $res->no_whatsapp?>" type="text"class="form-control">
                                                <label><b>ALAMAT LENGKAP</b><i class="fa fa-map-marker"></i></label>                                              
                                                <input name="alamat_lengkap" value="<?php echo $res->alamat_lengkap?>" type="text"class="form-control">
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end--> 
                                        <!-- profile-edit-container--> 
                                        <!-- profile-edit-container end-->                                          
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="custom-form">
                                                <label><b>PROVINSI</b> <i class="fa fa-map-marker"></i></label>
                                                <input name="provinsi" value="<?php echo $res->provinsi?>" type="text"class="form-control">
                                                <label><b>KOTA/KABUPATEN</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kota_kabupaten" value="<?php echo $res->kota_kabupaten?>" type="text"class="form-control">
                                                <label><b>KECAMATAN</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kecamatan" value="<?php echo $res->kecamatan?>" type="text"class="form-control">
                                                <label><b>KELURAHAN/DESA</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kelurahan" value="<?php echo $res->kelurahan?>" type="text"class="form-control">
                                                <label><b>KODE POS</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kode_pos" value="<?php echo $res->kode_pos?>" type="text"class="form-control">
                                                <label><b>FACEBOOK</b><i class="fa fa-facebook"></i></label>
                                                <input name="facebook" value="<?php echo $res->facebook?>" type="text"class="form-control">
                                                <label><b>INSTAGRAM</b><i class="fa fa-instagram"></i>  </label>
                                                <input name="instagram" value="<?php echo $res->instagram?>" type="text"class="form-control">
                                                <label><b>TWITTER</b><i class="fa fa-twitter"></i>  </label>
                                                <input name="twitter" value="<?php echo $res->twitter?>" type="text"class="form-control">
                                                <div class="profile-edit-container add-list-container">
                                                    <button class="btn  big-btn  color-bg flat-btn" type="submit" >UBAH DATA<i class="fa fa-angle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end-->                                        
                                    </div>
                                    <div class="col-md-3">
                                        <div class="edit-profile-photo fl-wrap">
                                            <img src="images/avatar/4.jpg" class="respimg" alt="">
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                    <input type="file" class="upload">
                                                </div>
                                            </div>
                                        </div>
                        </form>
                        </div> 
                    <div class="modal fade" id="hapus<?php echo $no ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form action="<?php echo base_url('user_edit_profile/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $rowP->id_user_edit_profile?>" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                            <button class="btn btn-primary" type="submit" >Hapus</button>
                          </div>
                          </form>

                        </div>
                      </div>
                    </div>




                                    <?php $no++;} ?>
                                   
                                    
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                   

            