<script src="<?php echo $path; ?>/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("#provinsi").change(function (){
                    var url = "<?php echo site_url('user_edit_profile/add_ajax_kab');?>/"+$(this).val();
                    $('#kabupaten').load(url);
                    return false;
                })
    
    $("#kabupaten").change(function (){
                    var url = "<?php echo site_url('user_edit_profile/add_ajax_kec');?>/"+$(this).val();
                    $('#kecamatan').load(url);
                    return false;
                })
    
    $("#kecamatan").change(function (){
                    var url = "<?php echo site_url('user_edit_profile/add_ajax_des');?>/"+$(this).val();
                    $('#desa').load(url);
                    return false;
                })
            });
    </script>

<?php tampilnotif()?>
<form action="<?php echo base_url('user_edit_profile/tambah') ?>" method="POST" enctype="multipart/form-data">
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
                                                <input name="nama_lengkap" placeholder="" type="text"class="form-control">
                                                <label><b>EMAIL</b><i class="fa fa-envelope-o"></i></label>
                                                <input name="emailnya"  type="text" class="form-control">
                                                <label><b>JENIS KELAMIN</b><i class="fa fa-male"></i>  </label>
                                                <select name="jenis_kelamin" data-placeholder="jenis_kelamin" class="chosen-select" style="display: none;">
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <label><b>NO.TELEPON</b><i class="fa fa-phone"></i></label>
                                                <input name="no_telepon" placeholder="" type="text" class="form-control">
                                                <label><b>NO.WHATSAPP</b><i class="fa fa-whatsapp"></i></label>
                                                <input name="no_whatsapp" placeholder="" type="text" class="form-control">
                                                <label><b>ALAMAT LENGKAP</b><i class="fa fa-map-marker"></i></label>
                                                <input name="alamat_lengkap" placeholder="" type="text" class="form-control">                  
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end--> 
                                        <!-- profile-edit-container--> 
                                        <!-- profile-edit-container end-->                                          
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="custom-form">
                                                <label><b>Provinsi</b></label>
                                                <select name="prov" class="form-control" id="provinsi">
                                                    <option>Pilih Provinsi</option>
                                                    <?php 
                                                        foreach($provinsi as $prov)
                                                        {
                                                            echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                <label><b>Kota/Kabupaten</b></label>
                                                <select name="kab" class="form-control" id="kabupaten">
                                                    <option value=''>Pilih Kota / Kab</option>
                                                </select>
                                                <label><b>Kecamatan</b></label>
                                                <select name="kec" class="form-control" id="kecamatan">
                                                    <option>Pilih Kecamatan</option>
                                                </select>
                                                <label><b>Kelurahan/Desa</b></label>
                                                <select name="des" id="desa" class="form-control" >
                                                    <option>Pilih Desa</option>
                                                </select>
                                                <label><b>KODE POS</b><i class="fa fa-map-marker"></i>  </label>
                                                <input name="kode_pos" placeholder=""  type="text" class="form-control">
                                                <label><b>FACEBOOK</b><i class="fa fa-facebook"></i></label>
                                                <input name="facebook" placeholder=""  type="text" class="form-control">
                                                <label><b>INSTAGRAM</b><i class="fa fa-instagram"></i>  </label>
                                                <input name="instagram" placeholder=""  type="text" class="form-control">
                                                <label><b>TWITTER</b><i class="fa fa-twitter"></i>  </label>
                                                <input name="twitter" placeholder=""  type="text" class="form-control">
                                                <div class="profile-edit-container add-list-container">
                                                    <button class="btn  big-btn  color-bg flat-btn" type="submit" >SIMPAN DATA<i class="fa fa-angle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- profile-edit-container end-->                                        
                                    </div>
                                    <div class="col-md-3">
                                        <div class="edit-profile-photo fl-wrap">
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i name="foto_profilenya"class="fa fa-upload"></i> Upload Photo</span>
                                                    <input type="file" name="foto" class="upload">
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