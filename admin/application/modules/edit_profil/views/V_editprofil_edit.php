<div class="app-main__inner">
                    <div class="mb-3 card">
                        <div class="card-header">
                            <font face= "Times New Roman" color="blue" size="3">Edit Profil</font>
                            <hr>
                        </div>
                        <?php tampilnotif()?>
                        <form action="<?php echo base_url('edit_profil/edit') ?>" method="POST" enctype="multipart/form-data">
                        <input name="id" value="<?php echo $tampil['id_edit_profil']?>" type="hidden" class="form-control">
                        <div class="content-right ">
                        </br>
                            <center><img width="100" class="rounded-circle" src="assets/images/avatars/14.jpg" alt=""></center>
                        </div></br>
                        <div class="d-block text-center">
                            <a href="<?php echo base_url('edit_profil/editview/'); ?>">
                                <button class="btn-shadow-primary btn btn-primary btn-lg" type="submit">Ganti Foto Profil</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <input nama="nama_lengkap" value="<?php echo $tampil['nama_lengkap']?>" type="text" class="form-control">
                                <div class="col-sm-9">
                                    <input name="nama lengkap" value="Abdul Hasan" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input name="username" value="hasan123" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input name="email" id="exampleEmail" value="abdulhasan@gmail.com" type="email" class="form-control">
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

                                                <?php foreach($getwilayah_provinsi as $res) { ?>
                                                

                                                    <option value="<?php echo $res->id_prov?>"><?php echo $res->nama?></option>

                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">KOTA/KAB.</label>
                                        <div class="col-sm-9">
                                            <select name="wilayah_kabupaten" class="multiselect-dropdown form-control">

                                                <?php foreach($getwilayah_kabupaten as $res) { ?>

                                                    <option value="<?php echo $res->id_kab?>"><?php echo $res->nama?></option>

                                                <?php } ?>

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

                                                <?php foreach($getwilayah_kecamatan as $res) { ?>

                                                    <option value="<?php echo $res->id_kec?>"><?php echo $res->nama?></option>

                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative row form-group">
                                        <label for="exampleEmail" class="col-sm-3 col-form-label">Kel./Desa</label>
                                        <div class="col-sm-9">
                                            <select name="wilayah_desa" class="multiselect-dropdown form-control">

                                                <?php foreach($getwilayah_desa as $res) { ?>

                                                    <option value="<?php echo $res->id_desa?>"><?php echo $res->nama?></option>

                                                <?php } ?>

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
                                    <input name="Kode Pos" value="654576" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No WA</label>
                                <div class="col-sm-9">
                                    <input name="No WA" value="0852447786543" type="text" class="form-control">
                                </div>
                            </div>
                            </div> 
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No Telepon</label>
                                <div class="col-sm-9">
                                    <input name="No Telepon" value="082133221234" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input name="instagram" value="boyohasan" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input name="facebook" value="hasan09" type="text" class="form-control">
                                </div>
                            </div>  
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">twitter</label>
                                <div class="col-sm-9">
                                    <input name="twitter" value="@abdulhasan" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div>
                                <div class="d-block text-center ">
                                    <button type="submit" class="btn-shadow-primary btn btn-primary btn-lg" >SIMPAN</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>