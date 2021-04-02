


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
                                  
                                 <a href="<?php echo base_url('galang_dana'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   




                    

 <?php tampilnotif()?>

 <form action="<?php echo base_url('galang_dana/tambah') ?>" method="POST" enctype="multipart/form-data">
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
                                                            <em>4</em><span>Selesai</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                               

                                                <div class="form-wizard-content">
                                                    <div id="step-1">
                                                        <div class="form-row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Nama</label>
                                                                    <input name="tipe" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Status</label>
                                                                    <select name="merk" class="multiselect-dropdown form-control">

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
                                                                    <select name="merk" class="multiselect-dropdown form-control">

                                                                        <?php foreach($getmerk as $res) { ?>

                                                                            <option value="<?php echo $res->id_merk?>"><?php echo $res->nama_merk?></option>

                                                                        <?php } ?>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Asal Sekolah</label>
                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Kelas</label>
                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>                     
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">No Telepon</label>
                                                                    <input name="norangka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Whatsapp</label>
                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Email</label>
                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
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
                                                        </div>   
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Provinsi</label>
                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kota/Kabupaten</label>
                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kecamatan</label>
                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Desa/Kelurahan</label>
                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kode POS</label>
                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Alamat Lengkap</label>
                                                                    <textarea rows="1" name="keterangan" class="form-control autosize-input" style="height: 35px;"></textarea>
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
                                                                                    <label for="exampleAddress">Nama</label>
                                                                                    <input name="tipe" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Status</label>
                                                                                    <select name="merk" class="multiselect-dropdown form-control">

                                                                                        <?php foreach($getmerk as $res) { ?>

                                                                                            <option value="<?php echo $res->id_merk?>"><?php echo $res->nama_merk?></option>

                                                                                        <?php } ?>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                        
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Jenjang</label>
                                                                                    <select name="merk" class="multiselect-dropdown form-control">

                                                                                        <?php foreach($getmerk as $res) { ?>

                                                                                            <option value="<?php echo $res->id_merk?>"><?php echo $res->nama_merk?></option>

                                                                                        <?php } ?>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Asal Sekolah</label>
                                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kelas</label>
                                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>                     
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">No Telepon</label>
                                                                                    <input name="norangka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>  
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Whatsapp</label>
                                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Email</label>
                                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
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
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Deskripsi Donasi</label>
                                                                                    <textarea rows="1" name="keterangan" class="form-control autosize-input" style="height: 60px;"></textarea>
                                                                                </div>
                                                                            </div> 
                                                                        </div>  
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <label name="nobpkb" for="exampleFile" class="">Dokumentasi</label>
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
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Tanggal Awal</label>
                                                                                    <input type="text" class="form-control" name="tgl_oleh" data-toggle="datepicker"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Tanggal Akhir</label>
                                                                                    <input type="text" class="form-control" name="tgl_buku" data-toggle="datepicker"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Jumlah Dana</label>
                                                                                    <input name="asal" id="exampleAddress" placeholder="Pembelian" type="text" class="form-control">
                                                                                </div>
                                                                            </div> 
                                                                        </div>
                                                                        </br>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Provinsi</label>
                                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                                <?php } ?>
                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Kota/Kabupaten</label>
                                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                                <?php } ?>
                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Kecamatan</label>
                                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                                <?php } ?>
                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Desa/Kelurahan</label>
                                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                                <?php } ?>
                                                                                        </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Kode POS</label>
                                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                                <?php } ?>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Alamat Lengkap</label>
                                                                                    <textarea rows="1" name="keterangan" class="form-control autosize-input" style="height: 35px;"></textarea>
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
                    <div class="modal fade" id="Modalkode"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pilih Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="modal-body">
                             <!--Modal body-->
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                         <span class="input-group-text"><i class="fa fa-search fa-w-16"></i></span>
                                    </div>
                                       <input placeholder="Tulis Kode Barang" name="search_text" id="search_text"  type="text" class="form-control" onkeydown="return (event.keyCode!=13);">
                                </div>

                                <input placeholder="Tulis Kode Barang" name="search_text" id="myInput"  type="hidden" class="form-control">


                                <div id="result"></div>
                                <div style="clear:both"></div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                          </div>

                        </div>
                      </div>
                    </div>


