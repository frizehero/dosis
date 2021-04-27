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
                            <a href="<?php echo base_url('edit_profil/editview/'); ?>">
                                <button class="btn-shadow-primary btn btn-primary btn-lg" type="submit" name="gambar">Ganti Foto Profil</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input name="nama_lengkap" placeholder="" type="text"class="form-control">
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
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Jenis Kelamain</label>
                                <div class="col-sm-9">
                                    <select name="select" id="exampleSelect" class="form-control">
                                        <option>Laki - laki</option>
                                        <option>Perempuan</option>
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
                                            <select name="wilayah_provinsi" class="multiselect-dropdown form-control">

                                                

                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">KOTA/KAB.</label>
                                        <div class="col-sm-9">
                                            <select name="wilayah_kabupaten" class="multiselect-dropdown form-control">


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
                                            <select name="districts" class="multiselect-dropdown form-control">

                                             

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">Kel./Desa</label>
                                        <div class="col-sm-9">
                                            <select name="wilayah_desa" class="multiselect-dropdown form-control">


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
                                    <textarea id="w3review" name="" rows="4" cols="54"></textarea>
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