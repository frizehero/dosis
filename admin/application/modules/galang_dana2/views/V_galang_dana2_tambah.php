






<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Tambah Galang Dana
                                        <div class="page-title-subheading">Tambah Galang Dana, Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('galang_dana2'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div> 


 <?php tampilnotif()?>
 <form action="<?php echo base_url('galang_dana2/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <div id="smartwizard">
                                                <ul class="forms-wizard">
                                                    <li>
                                                        <a href="#step-1">
                                                            <em>1</em><span>Data Diri Pembuka Galang Dana</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <em>2</em><span>Data Diri Penerima</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-3">
                                                            <em>3</em><span>Selesai</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                               

                                                <div class="form-wizard-content">
                                                    <div id="step-1">
                                                        <div class="form-row">                                                          
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Nama</label>
                                                                    <input name="nama_pembuka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Status</label>
                                                                    <select name="status_pembuka" class="multiselect-dropdown form-control">

                                                                        <?php foreach($getstatus as $res) { ?>

                                                                            <option value="<?php echo $res->id_status_pembuka?>"><?php echo $res->jenis_status_pembuka?></option>

                                                                        <?php } ?>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Jenjang</label>
                                                                    <select name="jenjang_pembuka" class="multiselect-dropdown form-control">

                                                                        <?php foreach($getjenjang_pembuka as $res) { ?>

                                                                            <option value="<?php echo $res->id_jenjang_pembuka?>"><?php echo $res->name?></option>

                                                                        <?php } ?>


                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Asal Sekolah</label>
                                                                    <input name="sekolah_pembuka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Kelas</label>
                                                                    <input name="kelas_pembuka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>                     
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">No Rekening</label>
                                                                    <input name="no_rekening" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">No Telepon</label>
                                                                    <input name="telepon_pembuka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">No Whatsapp</label>
                                                                    <input name="wa_pembuka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Instagram</label>
                                                                    <input name="instagram" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Facebook</label>
                                                                    <input name="facebook" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Twitter</label>
                                                                    <input name="twitter" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label name="nobpkb" for="exampleFile" class="">Identitas( KTP/Kartu Pelajar )</label>
                                                                    <div class="card mb-3 bg-primary widget-content">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                                                                <small class="form-text text-light">Gunakan File format PNG/JPG Max 10 MB</small>

                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Alamat Lengkap</label>
                                                                    <textarea rows="1" name="alamat_pembuka" class="form-control autosize-input" style="height: 80px;"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Provinsi</label>
                                                                        <select name="provinsi" class="multiselect-dropdown form-control">

                                                                        <?php foreach($getprovinsi as $res) { ?>

                                                                            <option value="<?php echo $res->id_provinsi?>"><?php echo $res->name?></option>

                                                                        <?php } ?>

                                                                        </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kota/Kabupaten</label>
                                                                        <select name="kota" class="multiselect-dropdown form-control">

                                                                            <?php foreach($getkota as $res) { ?>

                                                                                <option value="<?php echo $res->id_kota?>"><?php echo $res->name?></option>

                                                                            <?php } ?>

                                                                        </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kecamatan</label>
                                                                        <select name="kecamatan" class="multiselect-dropdown form-control">

                                                                            <?php foreach($getkecamatan as $res) { ?>

                                                                                <option value="<?php echo $res->id_kecamatan?>"><?php echo $res->name?></option>

                                                                            <?php } ?>

                                                                        </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kelurahan</label>
                                                                        <select name="kelurahan" class="multiselect-dropdown form-control">

                                                                            <?php foreach($getkelurahan as $res) { ?>

                                                                                <option value="<?php echo $res->id_kelurahan?>"><?php echo $res->name?></option>

                                                                            <?php } ?>

                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Desa</label>
                                                                        <select name="desa" class="multiselect-dropdown form-control">

                                                                            <?php foreach($getdesa as $res) { ?>

                                                                                <option value="<?php echo $res->id_desa?>"><?php echo $res->name?></option>

                                                                            <?php } ?>

                                                                        </select>
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kode POS</label>
                                                                        <select name="kode_pos_pembuka" class="multiselect-dropdown form-control">

                                                                        </select>
                                                                </div>
                                                            </div>
                                                                                                                                                                           
                                                        </div>
                                                                                                                                              
                                                    </div>

                                                    <div id="step-2">
                                                        <div id="accordion" class="accordion-wrapper mb-3">
                                                            <div class="card">             
                                                                <div data-parent="#accordion" id="collapseOne" aria-labelledby="headingOne" class="collapse show">
                                                                    <div class="card-body">                     
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Nama Penerima</label>
                                                                                    <input name="nama_penerima" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Alamat Penerima</label>
                                                                                    <input name="alamat_penerima" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Jenjang Sekolah</label>
                                                                                    <select name="jenjang_penerima" class="multiselect-dropdown form-control">

                                                                                        <?php foreach($getjenjang_penerima as $res) { ?>

                                                                                            <option value="<?php echo $res->id_jenjang_penerima?>"><?php echo $res->name?></option>

                                                                                        <?php } ?>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Nama Sekolah</label>
                                                                                    <input name="sekolah_penerima" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kelas</label>
                                                                                    <input name="kelas_penerima" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">No Telepon</label>
                                                                                    <input name="telepon_penerima" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>  
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Whatsapp</label>
                                                                                    <input name="wa_penerima" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Email</label>
                                                                                    <input name="email" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Instagram</label>
                                                                                    <input name="instagram" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>  
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Facebook</label>
                                                                                    <input name="facebook" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Twitter</label>
                                                                                    <input name="twitter" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label name="nobpkb" for="exampleFile" class="">Identitas( KTP/Kartu Pelajar )</label>
                                                                                    <div class="card mb-3 bg-primary widget-content">
                                                                                        <div class="widget-content-wrapper">
                                                                                            <div class="widget-content-left">
                                                                                                <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                                                                                <small class="form-text text-light">Gunakan File format PNG/JPG Max 10 MB</small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Tentang Diri Kamu</label>
                                                                                    <textarea rows="1" name="tentang_diri_kamu" class="form-control autosize-input" style="height: 80px;"></textarea>
                                                                                </div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Judul Donasi</label>
                                                                                    <input name="judul_donasi" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">    
                                                                                <div class="position-relative form-group">
                                                                                        <label for="exampleEmail11" class="">Kategori Donasi</label>
                                                                                        <select name="jenjang_penerima" class="multiselect-dropdown form-control">

                                                                                            <?php foreach($getjenjang_penerima as $res) { ?>

                                                                                                <option value="<?php echo $res->id_jenjang_penerima?>"><?php echo $res->name?></option>

                                                                                            <?php } ?>

                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">    
                                                                                <div class="position-relative form-group">
                                                                                        <label for="exampleEmail11" class="">Batas Waktu Penggalangan Dana</label>
                                                                                        <select name="jenjang_penerima" class="multiselect-dropdown form-control">

                                                                                            <?php foreach($getjenjang_penerima as $res) { ?>

                                                                                                <option value="<?php echo $res->id_jenjang_penerima?>"><?php echo $res->name?></option>

                                                                                            <?php } ?>

                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Tanggal Mulai</label>
                                                                                    <input type="date" class="form-control" name="tgl_awal">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Tanggal Berakhir</label>
                                                                                    <input type="date" class="form-control" name="tgl_akhir">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Target Donasi</label>
                                                                                    <input name="jml_donasi" id="exampleAddress" placeholder="RP20.000.000,00" type="text" class="form-control">
                                                                                </div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Provinsi</label>
                                                                                        <select name="provinsi_penerima" class="multiselect-dropdown form-control">

                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Kota/Kabupaten</label>
                                                                                        <select name="kabupaten_penerima" class="multiselect-dropdown form-control">

                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Kecamatan</label>
                                                                                        <select name="kecamatan_penerima" class="multiselect-dropdown form-control">

                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Kelurahan</label>
                                                                                        <select name="desa_penerima" class="multiselect-dropdown form-control">

                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Desa</label>
                                                                                        <select name="desa_penerima" class="multiselect-dropdown form-control">

                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kode Pos</label>
                                                                                    <input name="kode_pos_" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                                                                    
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Deskripsi Peristiwa</label>
                                                                                    <textarea rows="1" name="deskripsi_peristiwa" class="form-control autosize-input" style="height: 80px;"></textarea>
                                                                                </div>
                                                                            </div>
 
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Tujuan Membuka Galang Dana</label>
                                                                                    <textarea rows="1" name="deskripsi_penerima" class="form-control autosize-input" style="height: 80px;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label name="nobpkb" for="exampleFile" class="">Dokumentasi 1</label>
                                                                                    <div class="card mb-3 bg-primary widget-content">
                                                                                        <div class="widget-content-wrapper">
                                                                                            <div class="widget-content-left">
                                                                                                <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                                                                                <small class="form-text text-light">Gunakan File format PNG/JPG Max 10 MB</small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
 
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label name="nobpkb" for="exampleFile" class="">Dokumentasi 2</label>
                                                                                    <div class="card mb-3 bg-primary widget-content">
                                                                                        <div class="widget-content-wrapper">
                                                                                            <div class="widget-content-left">
                                                                                                <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                                                                                <small class="form-text text-light">Gunakan File format PNG/JPG Max 10 MB</small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label name="nobpkb" for="exampleFile" class="">Dokumentasi 3</label>
                                                                                    <div class="card mb-3 bg-primary widget-content">
                                                                                        <div class="widget-content-wrapper">
                                                                                            <div class="widget-content-left">
                                                                                                <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                                                                                <small class="form-text text-light">Gunakan File format PNG/JPG Max 10 MB</small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
 
                                                                        </div>                                                                                                                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                
                                                    <div id="step-3">
                                                        <div class="no-results">
                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                            </div>
                                                            <div class="results-subtitle mt-4">Selesai! silahkan klik simpan di bwah ini!.</div>                                        
                                                            <div class="mt-3 mb-3"></div>
                                                            <div class="text-center">

                                                            <button class="btn-wide btn btn-success"  type="submit" >Simpan Data</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="divider"></div>
                                            <div class="clearfix">
                                                <button type="button" id="reset-btn" class="btn-shadow float-left btn btn-link">Reset</button>
                                                <button type="button" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                                                <button type="button" id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Sebelumnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

 </form>



  <!--   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  <div style="clear:both"></div> -->


</div>


  <!-- Modal Load Kode -->
                  


