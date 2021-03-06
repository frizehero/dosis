<?php tampilnotif()?>
    <form action="<?php echo base_url('galang_dana2/edit') ?>" method="POST" enctype="multipart/form-data">
    <input name="id" value="<?php echo $tampil['id_galang_dana2'] ?>" type="hidden" class="form-control">
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
                                        <input name="nama_pembuka" value="<?php echo $tampil['nama_pembuka']?>"  type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Asal Sekolah/Kelas</b> <i class="fa fa-user-o"></i></label>
                                        <input name="sekolah_pembuka" value="<?php echo $tampil['sekolah_pembuka']?>" type="text"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <label><b>Jenjang</b></label>
                                        <select name="jenjang_pembuka" value="<?php echo $tampil['jenjang_pembuka']?>" class="chosen-select" style="display: none;">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Status</b></label>
                                        <select name="status_pembuka" value="<?php echo $tampil['status_pembuka']?>" class="chosen-select" style="display: none;">
                                            <option value="Siswa">Siswa</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Orang Lain">Orang Lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="col-md-4">
                                        <label><b>No. Telephon</b><i class="fa fa-phone"></i>  </label>
                                        <input name="telepon_pembuka" value="<?php echo $tampil['telepon_pembuka']?>" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No. Whatsapp</b><i class="fa fa-whatsapp"></i>  </label>
                                        <input name="whatsapp_pembuka" value="<?php echo $tampil['whatsapp_pembuka']?>" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Instagram</b><i class="fa fa-instagram"></i></label>
                                        <input name="instagram_pembuka" value="<?php echo $tampil['instagram_pembuka']?>" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Facebook</b><i class="fa fa-facebook"></i></label>
                                        <input name="facebook_pembuka" value="<?php echo $tampil['facebook_pembuka']?>" type="text"class="form-control">  
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
                                        <label><b>Provinsi</b> <i class="fa fa-map-marker"></i></label>
                                        <select data-placeholder="Provinsi" class="chosen-select" style="display: none;">
                                            <option>Aceh</option>
                                            <option>Sumatera Utara</option>
                                            <option>Sumatera Barat</option>
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
                                        <textarea  rows="1" name="alamat_pembuka" value="<?php echo $tampil['alamat_pembuka']?>" type="text"class="form-control autosize-input" style="height: 70px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kode Pos</b><i class="fa fa-map-marker"></i></label>
                                        <input name="kode_pos_pembuka" value="<?php echo $tampil['kode_pos_pembuka']?>" type="text"class="form-control">  
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
                                        <input name="nama_penerima" value="<?php echo $tampil['nama_penerima']?>" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Nama Sekolah/Kelas</b><i class="fa fa-university"></i></label>
                                        <input name="sekolah_penerima" value="<?php echo $tampil['sekolah_penerima']?>" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Tentang Diri Kamu</b><i class=""></i></label>
                                        <textarea  rows="1" name="tentang_diri_penerima" value="<?php echo $tampil['tentang_diri_penerima']?>" type="text"class="form-control autosize-input" style="height: 200px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Identitas(KTP/Kartu pelajar)</b></label>
                                        <div class="add-list-media-wrap">
                                            <form class="fuzone">
                                                <div class="fu-text">
                                                    <span><i class="fa fa-picture-o"></i> Pilih salah satu foto untuk identitas diri</span>
                                                </div>
                                                <input type="file" class="upload">
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
                                        <select data-placeholder="Provinsi" class="chosen-select" style="display: none;">
                                            <option>Aceh</option>
                                            <option>Sumatera Utara</option>
                                            <option>Sumatera Barat</option>
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
                                        <textarea  rows="1" name="alamat_penerima" value="<?php echo $tampil['alamat_penerima']?>" type="text"class="form-control autosize-input" style="height: 70px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kode Pos</b><i class="fa fa-map-marker"></i></label>
                                        <input name="kode_pos_penerima" value="<?php echo $tampil['kode_pos_penerima']?>" type="text"class="form-control">  
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
                                        <input name="telepon_penerima" value="<?php echo $tampil['telepon_penerima']?>" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No. Whatsapp</b><i class="fa fa-whatsapp"></i>  </label>
                                        <input name="whatsapp_penerima" value="<?php echo $tampil['whatsapp_penerima']?>" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Instagram</b><i class="fa fa-instagram"></i></label>
                                        <input name="instagram_penerima" value="<?php echo $tampil['instagram_penerima']?>" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Facebook</b><i class="fa fa-facebook"></i></label>
                                        <input name="facebook_penerima" value="<?php echo $tampil['facebook_penerima']?>" type="text"class="form-control">  
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
                                        <input name="judul_donasi_penerima" value="<?php echo $tampil['judul_donasi_penerima']?>" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Target Donasi</b><i class="fa fa-bullseye"></i></label>
                                        <input name="target_donasi_penerima" value="<?php echo $tampil['target_donasi_penerima']?>" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Tanggal Mulai</b></label>
                                        <input name="tanggal_mulai" value="<?php echo $tampil['tanggal_mulai']?>" type="date"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Tanggal Berakhir</b></label>
                                        <input name="tanggal_akhir" value="<?php echo $tampil['tanggal_akhir']?>" type="date"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No. Rekening</b><i class="fa fa-briefcase"></i></label>
                                        <input name="no_rekening_penerima" value="<?php echo $tampil['no_rekening_penerima']?>" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Batas Waktu Penggalangan Dana</b><i class="fa fa-calendar-check-o"></i>  </label>
                                        <select name="batas_waktu_penerima"  class="chosen-select" style="display: none;">
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
                                        <select name="kategori_penerima" class="chosen-select" style="display: none;">
                                            <option value="Siswa Putus Sekolah">Siswa Putus Sekolah</option>
                                            <option value="Siswa Tidak Mampu">Siswa Tidak Mampu</option>
                                            <option value="Kecelakaan/Sakit">Kecelakaan/Sakit</option>
                                            <option value="Pembangunan">Pembangunan</option>
                                            <option value="Kebakaran">Kebakaran</option>
                                            <option value="Banjir">Banjir</option>
                                            <option value="Tanah Longsor">Tanah Longsor</option>
                                        </select>
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Deskripsi Kejadian</b></label>
                                        <textarea cols="15" rows="2" name="deskripsi_penerima" value="<?php echo $tampil['deskripsi_penerima']?>" type="text"class="form-control autosize-input"></textarea>
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Tujuan Galang Dana</b></label>
                                        <textarea cols="15" rows="2" name="tujuan_penerima" value="<?php echo $tampil['tujuan_penerima']?>" type="text"class="form-control autosize-input"></textarea>
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
                                                            <input name="foto" type="file" class="form-control-file">
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
                                                            <input name="foto" type="file" class="form-control-file">
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
                                                            <input name="foto" type="file" class="form-control-file">
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
                            <button class="btn  big-btn  color-bg flat-btn" type="submit" >Simpan Perubahan<i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
    </form>