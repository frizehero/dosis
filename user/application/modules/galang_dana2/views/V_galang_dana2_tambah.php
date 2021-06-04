<script src="<?php echo $path; ?>/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("#provinsi").change(function (){
                    var url = "<?php echo site_url('galang_dana2/add_ajax_kab');?>/"+$(this).val();
                    $('#kabupaten').load(url);
                    return false;
                })
    
    $("#kabupaten").change(function (){
                    var url = "<?php echo site_url('galang_dana2/add_ajax_kec');?>/"+$(this).val();
                    $('#kecamatan').load(url);
                    return false;
                })
    
    $("#kecamatan").change(function (){
                    var url = "<?php echo site_url('galang_dana2/add_ajax_des');?>/"+$(this).val();
                    $('#desa').load(url);
                    return false;
                })
            });
    </script>
<?php tampilnotif()?>
<form action="<?php echo base_url('galang_dana2/tambah') ?>" method="POST" enctype="multipart/form-data">
                <div class="content">
                    <div class="col-md-12"  style="padding: 100px 50px 10px 50px;" >
                        <!-- profile-edit-container--> 
                        <div class="profile-edit-container add-list-container">
                            <div class="profile-edit-header fl-wrap">
                                <h4>Data Diri Pembuka Donasi Donasi</h4>
                            </div>
                            <div class="custom-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><b>Nama Lengkap</b> <i class="fa fa-user-o"></i></label>
                                        <input name="nama_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Asal Sekolah/Kelas</b> <i class="fa fa-user-o"></i></label>
                                        <input name="sekolah_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <label><b>Jenjang</b></label>
                                        <select name="jenjang_pembuka" data-placeholder="Status" class="chosen-select" style="display: none;">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Status</b></label>
                                        <select name="status_pembuka" data-placeholder="Status" class="chosen-select" style="display: none;">
                                            <option value="Siswa">Siswa</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Orang Lain">Orang Lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="col-md-4">
                                        <label><b>No. Telephon</b><i class="fa fa-phone"></i>  </label>
                                        <input name="telepon_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No. Whatsapp</b><i class="fa fa-whatsapp"></i>  </label>
                                        <input name="whatsapp_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Instagram</b><i class="fa fa-instagram"></i></label>
                                        <input name="instagram_pembuka" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Facebook</b><i class="fa fa-facebook"></i></label>
                                        <input name="facebook_pembuka" placeholder="" type="text"class="form-control">  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><b>Identitas(KTP/Kartu pelajar)*</b></label>
                                        <div class="add-list-media-wrap">
                                            <form class="fuzone">
                                                <div class="fu-text">
                                                    <span><i class="fa fa-picture-o"></i> Pilih salah satu foto untuk identitas diri</span>
                                                    <input name="foto" type="file" class="form-control-file">
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="profile-edit-container">
                            <div class="custom-form">
                                <div class="row">
                                    <div class="col-md-6">
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
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kota/Kabupaten</b></label>
                                        <select name="kab" class="form-control" id="kabupaten">
                                                                    <option value=''>Pilih Kota / Kab</option>
                                                                </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kecamatan</b></label>
                                        <select name="kec" class="form-control" id="kecamatan">
                                                                    <option>Pilih Kecamatan</option>
                                                                </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kelurahan/Desa</b></label>
                                        <select name="des" id="desa" class="form-control" >
                                            <option>Select Desa</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Alamat Lengkap</b></label>                                              
                                        <textarea  rows="1" name="alamat_pembuka" placeholder="" type="text"class="form-control autosize-input" style="height: 70px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kode Pos</b><i class="fa fa-map-marker"></i></label>
                                        <input name="kode_pos_pembuka" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-12">
                                        <p></p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="map-container">
                                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="http://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Ups! Ada sesuatu yang salah.</div><div class="gm-err-message">Halaman ini tidak memuat Google Maps dengan benar. Lihat konsol JavaScript untuk mengetahui detail teknisnya.</div></div></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-edit-container add-list-container">
                            <div class="profile-edit-header fl-wrap">
                                <h4>Data Diri Penerima Donasi</h4>
                            </div>
                            <class class="custom-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><b>Nama Lengkap</b><i class="fa fa-user-o"></i></label>
                                        <input name="nama_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Nama Sekolah/Kelas</b><i class="fa fa-university"></i></label>
                                        <input name="sekolah_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Tentang Diri Kamu</b><i class=""></i></label>
                                        <textarea  rows="1" name="tentang_diri_penerima" placeholder="" type="text"class="form-control autosize-input" style="height: 200px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Identitas(KTP/Kartu pelajar)</b></label>
                                        <div class="add-list-media-wrap">
                                            <form class="fuzone">
                                                <div class="fu-text">
                                                    <span><i class="fa fa-picture-o"></i> Pilih salah satu foto untuk identitas diri</span>
                                                </div>
                                                <input name="foto2" type="file" class="form-control-file">
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </class>
                        </div>
                        <div class="profile-edit-container add-list-container">
                            <div class="custom-form">
                            <div class="row">
                                    <div class="col-md-6">
                                        <label><b>Provinsi</b> <i class="fa fa-map-marker"></i></label>
                                        <select name="prov" class="form-control" id="provinsi">
                                            <option>- Select Provinsi -</option>
                                            <?php foreach($provinsi as $prov){
                                                echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kota/Kabupaten</b></label>
                                        <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                            <option>KOTA MALANG</option>
                                            <option>KOTA SURABAYA</option>
                                            <option>KOTA PROBOLINGGO</option>
                                            <option>KOTA BLITAR</option>
                                            <option>KOTA PASURUAN</option>
                                            <option>KOTA MOJOKERTO</option>
                                            <option>KOTA SURAKARTA</option>\
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kecamatan</b></label>
                                        <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                            <option>KOTA MALANG</option>
                                            <option>KOTA SURABAYA</option>
                                            <option>KOTA PROBOLINGGO</option>
                                            <option>KOTA BLITAR</option>
                                            <option>KOTA PASURUAN</option>
                                            <option>KOTA MOJOKERTO</option>
                                            <option>KOTA SURAKARTA</option>\
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kelurahan/Desa</b></label>
                                        <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                            <option>KOTA MALANG</option>
                                            <option>KOTA SURABAYA</option>
                                            <option>KOTA PROBOLINGGO</option>
                                            <option>KOTA BLITAR</option>
                                            <option>KOTA PASURUAN</option>
                                            <option>KOTA MOJOKERTO</option>
                                            <option>KOTA SURAKARTA</option>\
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Alamat Lengkap</b></label>                                              
                                        <textarea  rows="1" name="alamat_penerima" placeholder="" type="text"class="form-control autosize-input" style="height: 70px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kode Pos</b><i class="fa fa-map-marker"></i></label>
                                        <input name="kode_pos_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-12">
                                        <p></p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="map-container">
                                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="http://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Ups! Ada sesuatu yang salah.</div><div class="gm-err-message">Halaman ini tidak memuat Google Maps dengan benar. Lihat konsol JavaScript untuk mengetahui detail teknisnya.</div></div></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-edit-container add-list-container">
                            <div class="profile-edit-header fl-wrap">
                                <h4>Contacts Person</h4>
                            </div>
                            <div class="custom-form">  
                                <div class="row">
                                    <div class="col-md-4">
                                        <label><b>No. Telephon</b><i class="fa fa-phone"></i>  </label>
                                        <input name="telepon_penerima" placeholder="" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No. Whatsapp</b><i class="fa fa-whatsapp"></i>  </label>
                                        <input name="whatsapp_penerima" placeholder="" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Instagram</b><i class="fa fa-instagram"></i></label>
                                        <input name="instagram_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Facebook</b><i class="fa fa-facebook"></i></label>
                                        <input name="facebook_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="profile-edit-container add-list-container">
                            <div class="profile-edit-header fl-wrap">
                                <h4>Detail Informasi</h4>
                            </div>
                            <div class="custom-form">
                                <div class="row">
                                    <!--col --> 
                                    <div class="col-md-6">
                                        <label><b>Judul Donasi</b><i class="fa fa-briefcase"></i></label>
                                        <input name="judul_donasi_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Target Donasi</b><i class="fa fa-bullseye"></i></label>
                                        <input name="target_donasi_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Tanggal Mulai</b></label>
                                        <input name="tanggal_mulai" placeholder="" type="date"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Tanggal Berakhir</b></label>
                                        <input name="tanggal_akhir" placeholder="" type="date"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No. Rekening</b><i class="fa fa-briefcase"></i></label>
                                        <input name="no_rekening_penerima" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Batas Waktu Penggalangan Dana</b><i class="fa fa-calendar-check-o"></i>  </label>
                                        <select name="batas_waktu_penerima" data-placeholder="Status" class="chosen-select" style="display: none;">
                                            <option value="15 Hari">15 Hari</option>
                                            <option value="30 Hari">30 Hari</option>
                                            <option value="60 Hari">60 Hari</option>
                                            <option value="90 Hari">90 Hari</option>
                                            <option value="120 Hari">120 Hari</option>
                                            <option value="150 Hari">150 Hari</option>
                                        </select>
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Kategori</b></label>
                                        <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                            <option>Siswa Putus Sekolah</option>
                                            <option>Siswa Tidak Mampu</option>
                                            <option>Kecelakaan/Sakit</option>
                                            <option>Pembangunan</option>
                                            <option>Kebakaran</option>
                                            <option>Banjir</option>
                                            <option>Tanah Longsor</option>
                                        </select>
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Deskripsi Kejadian</b></label>
                                        <textarea cols="15" rows="2" name="deskripsi_penerima" placeholder="" type="text"class="form-control autosize-input"></textarea>
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Tujuan Galang Dana</b></label>
                                        <textarea cols="15" rows="2" name="tujuan_penerima" placeholder="" type="text"class="form-control autosize-input"></textarea>
                                    </div>       
                                </div>
                                <div class="profile-edit-container add-list-container">
                                    <div class="profile-edit-header fl-wrap">
                                        <h4>Foto</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- act-widget--> 
                                            <div class="act-widget fl-wrap">
                                                <div class="add-list-media-wrap">
                                                    <form class="fuzone">
                                                        <div class="fu-text">
                                                            <span><i class="fa fa-picture-o"></i> Masukkan foto peristiwa</span>
                                                            <input name="foto3" type="file" class="form-control-file">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- act-widget end-->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- act-widget--> 
                                            <div class="act-widget fl-wrap">
                                                <div class="add-list-media-wrap">
                                                    <form class="fuzone">
                                                        <div class="fu-text">
                                                            <span><i class="fa fa-picture-o"></i> Masukkan foto peristiwa</span>
                                                            <input name="foto4" type="file" class="form-control-file">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- act-widget end-->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- act-widget--> 
                                            <div class="act-widget fl-wrap">
                                                <div class="add-list-media-wrap">
                                                    <form class="fuzone">
                                                        <div class="fu-text">
                                                            <span><i class="fa fa-picture-o"></i> Masukkan foto peristiwa</span>
                                                            <input name="foto5" type="file" class="form-control-file">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="profile-edit-container add-list-container">
                            <button class="btn  big-btn  color-bg flat-btn" type="submit" >DONASI<i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>