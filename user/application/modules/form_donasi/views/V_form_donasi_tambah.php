


<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Tambah Data Peralatan & Mesin
                                        <div class="page-title-subheading">Tambah Data Peralatan & Mesin , Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('form_donasi'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   




                    

 <?php tampilnotif()?>

 <form action="<?php echo base_url('form_donasi/tambah') ?>" method="POST" enctype="multipart/form-data">
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
                                                            <em>1</em><span>Profil Aset</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <em>2</em><span>Informasi Dokumen</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-3">
                                                            <em>3</em><span>Informasi Administrasi</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-4">
                                                            <em>4</em><span>Selesai</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                               

                                                <div class="form-wizard-content">
                                                    <div id="step-1">
                                                        <div class="form-row">                                                            
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kode Barang </label>
                                                                    <input name="kode" type="text" class="form-control" placeholder="klik disini!" id="kodekat" data-toggle="modal" data-target="#Modalkode">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kategori</label>
                                                                   <input name="kategori" type="text" class="form-control" placeholder="Nama Kategori" id="katname" data-toggle="modal" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Merk</label>
                                                                    <select name="merk" class="multiselect-dropdown form-control">

                                                                        <?php foreach($getmerk as $res) { ?>

                                                                            <option value="<?php echo $res->id_merk?>"><?php echo $res->nama_merk?></option>

                                                                        <?php } ?>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Tipe</label>
                                                                    <input name="tipe" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Ukuran/CC</label>
                                                                    <input name="ukuran" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Bahan</label>
                                                                    <input name="bahan" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Nomor Pabrik</label>
                                                                    <input name="nopabrik" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Nomor Rangka</label>
                                                                    <input name="norangka" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Nomor Mesin</label>
                                                                    <input name="nomesin" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Nomor Polisi</label>
                                                                    <input name="nopolisi" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Nomor BPKB</label>
                                                                    <input name="nobpkb" id="exampleAddress" placeholder="" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Kondisi</label>
                                                                        <select name="kondisi"  class="mb-2 form-control">
                                                                            <option value="Baik">Baik</option>
                                                                            <option value="Kurang Baik">Kurang Baik</option>
                                                                            <option value="Rusak">Rusak</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail11" class="">Ruang</label>
                                                                        <select name="ruang" class="multiselect-dropdown form-control">

                                                                                <?php foreach($getruang as $res2) { ?>

                                                                                    <option value="<?php echo $res2->id_inv_room?>"><?php echo $res2->nama_room?></option>

                                                                                <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>                                                                                                                       
                                                        </div>
                                                        <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="position-relative form-group">
                                                                        <label name="nobpkb" for="exampleFile" class="">Gambar Aset</label>
                                                                            <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                                                            <small class="form-text text-muted">Gunakan File format DOC / EXCEL Max 10 MB</small>
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
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Asal Usul</label>
                                                                                    <input name="asal" id="exampleAddress" placeholder="Pembelian" type="text" class="form-control">
                                                                                </div>
                                                                            </div>                                                                            
                                                                        </div>

                                                                         <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <h5 class="card-title">Tanggal Perolehan</h5>
                                                                                    <input type="text" class="form-control" name="tgl_oleh" data-toggle="datepicker"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <h5 class="card-title">Tanggal Pembukuan</h5>
                                                                                    <input type="text" class="form-control" name="tgl_buku" data-toggle="datepicker"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>            

                                                                        <div class="form-row">                                                                            
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <h5 h5 class="card-title">Keterangan</h5>
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
                                                        <div id="accordion" class="accordion-wrapper mb-3">
                                                            <div class="card">                                                                
                                                                <div data-parent="#accordion" id="collapseOne" aria-labelledby="headingOne" class="collapse show">
                                                                    <div class="card-body">
                                                                        <div div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Nilai Aset</label>
                                                                                    <input name="nilai" type="number" class="form-control" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="examplePassword11" class="">Nilai Tambah</label>
                                                                                    <input name="nilaitambah"  type="number" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="examplePassword11" class="">Nilai Beban</label>
                                                                                    <input name="beban"  type="number" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail11" class="">Akumulasi</label>
                                                                                    <input name="akumulasi" type="number" class="form-control" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="examplePassword11" class="">Nilai Buku</label>
                                                                                    <input name="nilaibuku"  type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="examplePassword11" class="">Sisa Usia Manfaat</label>
                                                                                    <input name="sisausia"  type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-4">
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
                                                <button type="button" id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
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


                    <div class="main-card mb-3 card">
                                            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Header Tabs Buttons
                                                <div class="btn-actions-pane-right">
                                                    <div class="nav">
                                                        <a data-toggle="tab" href="#tab-eg2-0" class="btn-pill btn-wide active btn btn-outline-alternate btn-sm">Tab 1</a>
                                                        <a data-toggle="tab" href="#tab-eg2-1" class="btn-pill btn-wide mr-1 ml-1  btn btn-outline-alternate btn-sm">Tab 2</a>
                                                        <a data-toggle="tab" href="#tab-eg2-2" class="btn-pill btn-wide  btn btn-outline-alternate btn-sm">Tab 3</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg2-0" role="tabpanel">
                                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                                        software like Aldus PageMaker
                                                        including versions of Lorem Ipsum.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab-eg2-1" role="tabpanel">
                                                        <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                                        essentially unchanged. </p>
                                                    </div>
                                                    <div class="tab-pane" id="tab-eg2-2" role="tabpanel">
                                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                                        type specimen book. It has
                                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block text-right card-footer">
                                                <a href="javascript:void(0);" class="btn-wide btn btn-success">Save</a>
                                            </div>
                                        </div>