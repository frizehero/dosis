<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>EDIT PROFIL
                                        <div class="page-title-subheading">Silahkan Ubah Profil Kamu</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                  

                                    <a href="<?php echo base_url('edit_profil/tambahview'); ?>" type="button" class="btn btn-primary">
                                        Tambah Data
                                    </a>

                                </div>    </div>
                        </div>

                    <?php tampilnotif()?>

                    <?php 
                     $no=1;
                    foreach($tampil as $res) { ?>
                    
                    <div class="row">
                    <div class="app-main__inner">
                    <div class="mb-3 card">
                        <div class="card-header">
                            <font face= "Times New Roman" color="blue" size="3">Edit Profil</font>

                            <a href="<?php echo base_url('edit_profil/editview/'. encrypt_url($res->id_edit_profil)); ?>" type="button" class="btn btn-primary" style="margin-left: 675px;"> 
                                Ubahlah Data Dirimu
                            </a>
                            <hr>
                        </div>
                        <div class="content-right ">
                        </br>
                            <center><img width="100" class="rounded-circle" src="<?php echo base_url() ?>assets/images/fotoprofil/ <?php echo $res->foto_profil;?>"></center>
                        </div></br>
                        <div class="d-block text-center">
                            <a href="<?php echo base_url('edit_profil/editview/'); ?>"></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input name="nama_lengkap" value="<?php echo $res->nama_lengkap?>" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input name="username" value="<?php echo $res->username?>" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input name="email" value="<?php echo $res->email?>" type="text"class="form-control">
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
                                <textarea rows="1" name="alamat" class="form-control autosize-input" style="height: 80px;"></textarea>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input name="kode_pos" value="<?php echo $res->kode_pos?>" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No WA</label>
                                <div class="col-sm-9">
                                    <input name="no_wa" value="<?php echo $res->no_wa?>" type="text"class="form-control">
                                </div>
                            </div>
                            </div> 
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No Telepon</label>
                                <div class="col-sm-9">
                                    <input name="no_telepon" value="<?php echo $res->no_telepon?>" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input name="instagram" value="<?php echo $res->instagram?>" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input name="facebook" value="<?php echo $res->facebook?>" type="text"class="form-control">
                                </div>
                            </div>  
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">twitter</label>
                                <div class="col-sm-9">
                                    <input name="twitter" value="<?php echo $res->twitter?>" type="text"class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <?php $no++;} ?>

                </div>

                   
