<?php tampilnotif()?>
<form action="<?php echo base_url('galang_dana2/tambah') ?>" method="POST" enctype="multipart/form-data">
                <div class="content">
                    <div class="col-md-12"  style="padding: 100px 50px 10px 50px;" >
                        <!-- profile-edit-container--> 
                        <div class="profile-edit-container add-list-container">
                            <div class="custom-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><b>NAMA LENGKAP PENGGALANG DANA</b> <i class="fa fa-user-o"></i></label>
                                        <input name="nama_pembuka" placeholder="" type="text"class="form-control">
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
                                        <label><b>NO.REKENING</b><i class="fa fa-whatsapp"></i>  </label>
                                        <input name="no_rekening" placeholder="" type="text"class="form-control">
                                    </div>
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
                                    <div class="col-md-4">
                                        <label><b>Twitter</b><i class="fa fa-twitter"></i></label>
                                        <input name="twitter" placeholder="" type="text"class="form-control">  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><b>ALAMAT LENGKAP</b><i class="fa fa-map-marker"></i>  </label>                                              
                                        <textarea cols="40" rows="3" placeholder="Perumahan griya permata alam ngijo blok ED-22 karangploso malang"value></textarea>
                                        <input name="alamat_pembuka" placeholder="" type="text"class="form-control">
                                    </div>
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
                                        <label><b>PROVINSI</b> <i class="fa fa-map-marker"></i></label>
                                        <select data-placeholder="Provinsi" class="chosen-select" style="display: none;">
                                            <option>Aceh</option>
                                            <option>Sumatera Utara</option>
                                            <option>Sumatera Barat</option>
                                            <option>Riau</option>
                                            <option>Kepulauan Riau</option>
                                            <option>Jambi</option>
                                            <option>Sumatera Selatan</option>
                                            <option>Kepulauan Bangka Belitun</option>
                                            <option>Bengkulu</option>
                                            <option>Lampung</option>
                                            <option>DKI Jakarta</option>
                                            <option>Banten</option>
                                            <option>Jawa Barat</option>
                                            <option>Jawa Tengah</option>
                                            <option>DI Yogyakartn</option>
                                            <option>Jawa Timur</option>
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
                                            <option>KOTA SURAKARTA</option>
                                            <option>KOTA MAGELANG</option>
                                            <option>KOTA SEMARANG</option>
                                            <option>KAB.TEGAL</option>
                                            <option>KAB.REMBANG</option>
                                            <option>KAB.BEKASI</option>           
                                            <option>KAB.BANDUNG</option>
                                            <option>KAB.CIREBON</option>
                                            <option>KAB.BANYUWANGI</option>
                                            <option>KAB.BONDOWOSO</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>KECAMATAN</b><i class="fa fa-map-marker"></i>  </label>
                                        <input type="text" placeholder="Karangploso">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>KELURAHAN/DESA</b><i class="fa fa-map-marker"></i>  </label>
                                        <input type="text" placeholder="Ngijo">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Nama Jalan,Gedung,No.Rumah</b><i class="fa fa-map-marker"></i></label>
                                        <input type="text" id="long" placeholder="Jalan kalimas No.6" value="">                                                    
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>KODE POS</b><i class="fa fa-map-marker"></i>  </label>
                                        <input type="text" placeholder="654576"value>
                                    </div>
                                    <div class="map-container">
                                        <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="http://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Ups! Ada sesuatu yang salah.</div><div class="gm-err-message">Halaman ini tidak memuat Google Maps dengan benar. Lihat konsol JavaScript untuk mengetahui detail teknisnya.</div></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-edit-container add-list-container">
                            <button class="btn  big-btn  color-bg flat-btn" type="submit" >DONASI<i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>