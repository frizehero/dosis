<?php tampilnotif()?>
<form action="<?php echo base_url('edit_profil/tambah') ?>" method="POST" enctype="multipart/form-data">
                <div class="app-main__inner">
                    <div class="mb-3 card">
                        <div class="card-header">
                            <font face= "Times New Roman" color="blue" size="3">Edit Profil</font>
                            <hr>
                        </div>
                        <div class="content-right ">
                        </br>
                            <center><img width="100" class="rounded-circle" src="assets/images/avatars/14.jpg" alt=""></center>
                        </div></br>
                        <div class="d-block text-center">
                            <div class="photoUpload">
                                <input name="foto" type="file" class="form-control-file" style="margin-left: 400px;">
                                <span><i class="fa fa-picture-o"></i> Pilih salah satu foto untuk identitas diri</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input name="nama_lengkap" placeholder="" type="text"class="form-control" value="">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input name="username" placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input name="email" placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select name="jenis_kelamin" id="exampleSelect" class="form-control">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="bencong">bencong</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">Provinsi</label>
                                        <div class="col-sm-9">
                                            <select name="provinsi" class="multiselect-dropdown form-control">
                                                <option value="Jawa Timur">Jawa Timur</option>
                                                <option value="Jawa Tengah">Jawa Tengah</option>
                                                <option value="Jawa Barat">Jawa Barat</option>
                                                    

                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">KOTA/KAB.</label>
                                        <div class="col-sm-9">
                                            <select name="kota" class="multiselect-dropdown form-control">
                                                <option value="Probolinggo">Probolinggo</option>
                                                <option value="Yogyakarta">Yogyakarta</option>
                                                <option value="Jakarta">Jakarta</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">Kecamatan</label>
                                        <div class="col-sm-9">
                                            <select name="kecamatan" class="multiselect-dropdown form-control">
                                                <option value="Mayangan">Mayangan</option>
                                                <option value="Mangunharjo">Mangunharjo</option>
                                                <option value="Jati">Jati</option>
                                             
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">Kel./Desa</label>
                                        <div class="col-sm-9">
                                            <select name="desa" class="multiselect-dropdown form-control">
                                                <option value="Muneng">Muneng</option>
                                                <option value="Lowokwaru">Lowokwaru</option>
                                                <option value="Sukapura">Jakarta</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea rows="1" name="alamat" class="form-control autosize-input" style="height: 35px;"></textarea>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input name="kode_pos" placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No WA</label>
                                <div class="col-sm-9">
                                    <input name="no_wa" placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            </div> 
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No Telepon</label>
                                <div class="col-sm-9">
                                    <input name="no_telepon" placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input name="instagram" placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input name="facebook" placeholder="" type="text"class="form-control">
                                </div>
                            </div>  
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">twitter</label>
                                <div class="col-sm-9">
                                    <input name="twitter" placeholder="" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div>
                                <div class="d-block text-center ">
                                    <button class="btn-shadow-primary btn btn-primary btn-lg" type="submit">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>