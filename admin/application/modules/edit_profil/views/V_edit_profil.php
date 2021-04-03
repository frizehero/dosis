<div class="app-main__inner">
                <form action="<?php echo base_url('edit_profil/edit')?>" method="POST" enctype="multipart form-data">
                    <div class="mb-3 card">
                        <div class="card-header">
                            <font face= "Times New Roman" color="blue" size="3">Edit Profil</font>
                            <hr>
                        </div>
                        <div class="content-right ">
                            <center><img width="100" class="rounded-circle" src="<?php echo base_url().'assets/images/avatars/'.$tampil['dokumen'];?>" alt="First slide"></center>
                        </div></br>
                        <div class="d-block text-center ">
                            <button class="btn-shadow-primary btn btn-primary btn-lg">Ganti Foto Profil</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input name="nama lengkap" value="<?php echo $tampil['nama_lengkap']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input name="username" value="<?php echo $tampil['Username']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input name="email" id="exampleEmail" value="<?php echo $tampil['email']?>" type="email" class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select name="select" value="<?php echo $tampil['jenis_kelamin']?>" id="exampleSelect" class="form-control">
                                        <option></option>
                                        <option>Laki-Laki</option>
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
                                    <select name="select" value="<?php echo $tampil['provinsi']?>" id="exampleSelect" class="form-control">
                                        <option></option>
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
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">KOTA/KAB.</label>
                                <div class="col-sm-9">
                                    <select name="select" value="<?php echo $tampil['kota']?>" id="exampleSelect" class="form-control">
                                        <option></option>
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
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Kecamatan</label>
                                <div class="col-sm-9">
                                    <select name="select" value="<?php echo $tampil['kecamatan']?>" id="exampleSelect" class="form-control">
                                        <option></option>
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
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Desa</label>
                                <div class="col-sm-9">
                                    <input name="Desa" value="<?php echo $tampil['desa']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea id="w3review" value="<?php echo $tampil['alamat']?>" name="" rows="4" cols="54"></textarea>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input name="Kode Pos" value="<?php echo $tampil['kode_pos']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No WA</label>
                                <div class="col-sm-9">
                                    <input name="No WA" value="<?php echo $tampil['no_wa']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div> 
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">No Telepon</label>
                                <div class="col-sm-9">
                                    <input name="No Telepon" value="<?php echo $tampil['no_telepon']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input name="instagram" value="<?php echo $tampil['instagram']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input name="facebook" value="<?php echo $tampil['facebook']?>" type="text" class="form-control">
                                </div>
                            </div>  
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-3 col-form-label">twitter</label>
                                <div class="col-sm-9">
                                    <input name="twitter" vvalue="<?php echo $tampil['twitter']?>" type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                            </div>
                            <div>
                                <div class="d-block text-center ">
                                    <button class="btn-shadow-primary btn btn-primary btn-lg">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>