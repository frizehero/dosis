<?php tampilnotif()?>
    <form action="<?php echo base_url('user_edit_profile/edit') ?>" method="POST" enctype="multipart/form-data">
        <input name="id" value="<?php echo $tampil['id_user_edit_profile']?>" type="hidden" class="form-control">
                <div class="app-main__inner">  
                    <section id="sec1" style="padding-top: 25px;">
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap" >
                                <div class="row">
                                    <div class="col-md-9">
                                        <!-- profile-edit-container--> 

                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap">
                                                <h4>My Account</h4>
                                            </div>
                                            <div><br></div>
                                            <div class="custom-form">
                                                <label><b>NAMA LENGKAP</b> <i class="fa fa-user-o"></i></label>
                                                <input name="nama"  type="text" class="form-control">
                                                <label><b>EMAIL</b><i class="fa fa-envelope-o"></i></label>
                                                <input name="email"  type="text" class="form-control">
                                                <label><b>JENIS KELAMIN</b><i class="fa fa-male"></i>  </label>
                                                <input name="jenis_kelamin"  type="text" class="form-control">
                                                <label><b>NO.TELEPON</b><i class="fa fa-phone"></i></label>
                                                <input name="no_telepon"  type="text" class="form-control">
                                                <label><b>NO.WHATSAPP</b><i class="fa fa-whatsapp"></i></label>
                                                <input name="no_whatsapp"  type="text" class="form-control">
                                                <label><b>ALAMAT LENGKAP</b><i class="fa fa-map-marker"></i></label>
                                                <input name="alamat_lengkap"  type="text" class="form-control">                  
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end--> 
                                        <!-- profile-edit-container--> 
                                        <!-- profile-edit-container end-->                                          
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="custom-form">
                                                <label><b>PROVINSI</b> <i class="fa fa-map-marker"></i></label>
                                                <input name="provinsi"  type="text" class="form-control">
                                                <label><b>KOTA/KABUPATEN</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kota_kabupaten"  type="text" class="form-control">
                                                <label><b>KECAMATAN</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kecamatan"  type="text" class="form-control">
                                                <label><b>KELURAHAN/DESA</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kelurahan"  type="text" class="form-control">
                                                <label><b>KODE POS</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kode_pos"  type="text" class="form-control">
                                                <label><b>FACEBOOK</b><i class="fa fa-facebook"></i></label>
                                                <input name="facebook"  type="text" class="form-control">
                                                <label><b>INSTAGRAM</b><i class="fa fa-instagram"></i>  </label>
                                                <input name="instagram"  type="text" class="form-control">
                                                <label><b>TWITTER</b><i class="fa fa-twitter"></i>  </label>
                                                <input name="twitter"  type="text" class="form-control">

                                                <div class="profile-edit-container add-list-container">
                                                    <button class="btn  big-btn  color-bg flat-btn" type="submit" >SIMPAN DATA<i class="fa fa-angle-right"></i></button>
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
                                    </div>     
                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
                    </section>
                    <!-- section end -->
                    <div class="limit-box fl-wrap"></div>
                </div>
            </div>
    </form>