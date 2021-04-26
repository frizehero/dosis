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
                                        <input name="nama_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <label><b>Jenjang</b></label>
                                        <select data-placeholder="Status" class="chosen-select" style="display: none;">
                                            <option>Guru</option>
                                            <option>Siswa/Siswi</option>
                                            <option>Orang lain</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Status</b></label>
                                        <select data-placeholder="Status" class="chosen-select" style="display: none;">
                                            <option>Guru</option>
                                            <option>Siswa/Siswi</option>
                                            <option>Orang lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="col-md-4">
                                        <label><b>NO.TELEPON</b><i class="fa fa-phone"></i>  </label>
                                        <input name="telepon_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>NO.WHATSAPP</b><i class="fa fa-whatsapp"></i>  </label>
                                        <input name="wa_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Instagram</b><i class="fa fa-instagram"></i></label>
                                        <input name="instagram" placeholder="" type="text"class="form-control">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Facebook</b><i class="fa fa-facebook"></i></label>
                                        <input name="facebook" placeholder="" type="text"class="form-control">  
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
                                        <label><b>ALAMAT LENGKAP</b></label>                                              
                                        <textarea  rows="1" name="alamat_pembuka" placeholder="" type="text"class="form-control autosize-input" style="height: 70px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kode Pos</b><i class="fa fa-map-marker"></i></label>
                                        <input name="#" placeholder="" type="text"class="form-control">  
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
                                        <div class="custom-form">
                                            <label><b>Nama Lengkap*</b><i class="fa fa-user-o"></i></label>
                                            <input type="text" placeholder="Indah Novita" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Nama Sekolah/Kelas*</b><i class="fa fa-university"></i></label>
                                        <input type="text" placeholder="SMKN 10 PROBOLINGGO/X OTKP 3" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="custom-form">
                                            <label><b>Tentang Diri Kamu*</b><i class=""></i></label>
                                            <textarea cols="15" rows="2" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Identitas(KTP/Kartu pelajar)*</b></label>
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
                                        <label><b>ALAMAT LENGKAP</b></label>                                              
                                        <textarea  rows="1" name="alamat_pembuka" placeholder="" type="text"class="form-control autosize-input" style="height: 70px" ></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Kode Pos</b><i class="fa fa-map-marker"></i></label>
                                        <input name="#" placeholder="" type="text"class="form-control">  
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
                                        <label><b>Telpon</b><i class="fa fa-phone"></i></label>
                                        <input type="text" placeholder="+62 __________" value="">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Whatsapp</b> <i class="fa fa-whatsapp"></i>  </label>
                                        <input type="text" placeholder="08XX-XXXX-XXXX" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>E-mail</b> <i class="fa fa-envelope"></i>  </label>
                                        <input type="text" placeholder="*********@gmail.com" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Instagram</b><i class="fa fa-instagram"></i></label>
                                        <input type="text" placeholder="@indahnr_15" value="">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Facebook</b><i class="fa fa-facebook"></i></label>
                                        <input type="text" placeholder="indah novita" value="">  
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Twitter</b><i class="fa fa-twitter"></i></label>
                                        <input type="text" placeholder="@indahnov" value="">  
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
                                        <label><b>Judul Donasi*</b><i class="fa fa-briefcase"></i></label>
                                        <input type="text" placeholder="Terdampak Corona. Bantu Wahyudi Siswa Yang Putus Sekolah " value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Target Donasi*</b><i class="fa fa-bullseye"></i></label>
                                        <input type="text" id="long" placeholder="RP.20.000.000" value="">                                                    
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Tanggal Mulai*</b><i class="fa fa-calendar-check-o"></i>  </label>
                                        <input type="text" placeholder="04/05/2020" value="">
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Tanggal Berakhir*</b><i class="fa fa-calendar-check-o"></i>  </label>
                                        <input type="text" placeholder="04/05/2020" value="">
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Batas Waktu Penggalangan Dana*</b><i class="fa fa-calendar-check-o"></i>  </label>
                                        <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                            <option>30 Hari</option>
                                            <option>60 Hari</option>
                                            <option>90 Hari</option>
                                            <option>120 Hari</option>
                                        </select>
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Kategori*</b></label>
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
                                        <label><b>Deskripsi</b></label>
                                        <textarea cols="15" rows="2" placeholder="Ceritakan tentang diri Anda,alasan penggalangan dana, dan rencana penggunaan dana*"></textarea>
                                    </div> 
                                    <div class="col-md-6">
                                        <label><b>Tujuan Galang Dana</b></label>
                                        <textarea cols="15" rows="2" placeholder="Contoh: Membantu siswa yang rumahnya ambruk karena longsor*"></textarea>
                                    </div> 
                                    <div class="profile-edit-container add-list-container">
                                        <div class="profile-edit-header fl-wrap">
                                            <h4>Foto</h4>
                                        </div>
                                        <div class="custom-form">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!-- act-widget--> 
                                                    <div class="act-widget fl-wrap">
                                                        <div class="add-list-media-wrap">
                                                            <form class="fuzone">
                                                                <div class="fu-text">
                                                                    <span><i class="fa fa-picture-o"></i> Click here or drop files to upload</span>
                                                                </div>
                                                                <input type="file" class="upload">
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
                                                                    <span><i class="fa fa-picture-o"></i> Click here or drop files to upload</span>
                                                                </div>
                                                                <input type="file" class="upload">
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
                                                                    <span><i class="fa fa-picture-o"></i> Click here or drop files to upload</span>
                                                                </div>
                                                                <input type="file" class="upload">
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- act-widget end-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn  big-btn  color-bg flat-btn book-btn">SELESAI<i class="fa fa-angle-right"></i></button>
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