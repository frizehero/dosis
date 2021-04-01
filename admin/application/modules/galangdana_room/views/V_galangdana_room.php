<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Data Galang Dana
                                        <div class="page-title-subheading">Halaman Manajemen Data Ruangan</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                <a href="<?php echo base_url('galangdana_room/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-warning">Halaman Input</a>
                                  
                                  <a href="<?php echo base_url('galangdana_room/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>

                                </div>    </div>
                        </div>

                        <?php tampilnotif()?>

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                

                                <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th width="20%">Nama</th>
                                        <th width="20%">Nama Galang Dana</th>
                                        <th>Jumlah Nominal</th>
                                        <th>Deskripsi</th>
                                        <th>Opsi</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php  
                                    $no=1;
                                           
                                    foreach ($tampil AS $rowP ) { ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $rowP->nama_room;?></td>
                                        <td><?php echo $rowP->galangdana;?></td>
                                        <td><?php echo $rowP->jumlah_room;?></td>
                                        <td><?php echo $rowP->deskripsi_room;?></td>
                                        <td>
                                            <a href="<?php echo base_url('galangdana_room/editview/'. encrypt_url($rowP->id_gld_room)); ?>" class="btn btn-primary">
                                            <i class="fa fa-pen fa-w-16"></i>
                                            </a>

                                        <button class="btn btn-warning" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                        <i class="fa fa-trash fa-w-16"></i>
                                        </button>
                                    </td>

                                    </tr>

                                       <!-- Modal HAPUS -->
                                    <div class="modal fade" id="hapus<?php echo $no ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>

                                          <form action="<?php echo base_url('galangdana_room/hapus') ?>" method="POST" enctype="multipart/form-data">
                                          <div class="modal-body">
                                            <!--Modal body-->
                                                <p class="text-semibold text-main"></p>
                                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_room ?></b> ? </p>

                                                <input name="id"  type="hidden" value="<?php echo $rowP->id_gld_room ?>" class="form-control">
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                            <button class="btn btn-primary" type="submit" >Hapus</button>
                                          </div>
                                          </form>

                                        </div>
                                      </div>
                                    </div>




                                    <?php $no++;} ?>
                                   
                                    
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                   

                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="lnr-map text-info"></i>
                                </div>
                                <div>Form Galang Dana
                                    <div class="page-title-subheading">Buka Galang Dana untuk siswa-siswi yang membutuhkan Uluran Tangan</div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <em>1</em><span>Data Diri Penggalang Dana</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <em>2</em><span>Data Diri Penerima Donasi</span>
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
                                                                    <label for="exampleEmail55">Nama Lengkap</label>
                                                                    <input name="email" id="exampleEmail55" type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Status</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>Siswa/Siswi</option>
                                                                    <option>Guru (Pihak Sekolah)</option>
                                                                    <option>Orang Lain</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Jenjang Sekolah</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>SD</option>
                                                                    <option>SMP</option>
                                                                    <option>SMA</option>
                                                                    <option>SMK</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail55">Nama Sekolah</label>
                                                                    <input name="email" id="exampleEmail55" type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail55">Kelas</label>
                                                                    <input name="email" id="exampleEmail55" type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail55">No.Telepon</label>
                                                                    <input name="email" id="exampleEmail55" type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail55">No.Whatsapp</label>
                                                                    <input name="email" id="exampleEmail55" type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail55">E-mail</label>
                                                                    <input name="email" id="exampleEmail55" type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleText" class="">Identitas(KTP/Kartu Pelajar) </label>
                                                                    <div class="card mb-3 bg-plum-plate widget-content">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <input name="file" id="exampleFile" type="file" class="form-control-file text-light">
                                                                                <small class="input-text text-light" >Masukkan foto KTP/Kartu Pelajar Yang Jelas Dengan Ukuran Tidak Lebih Dari 2MB
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Provinsi</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>Aceh</option>
                                                                    <option>Sumatera Utara</option>
                                                                    <option>Sumatera Barat</option>
                                                                    <option>Riau</option>
                                                                    <option>Jawa Timur</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Kota/Kabupaten</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>Probolinggo</option>
                                                                    <option>Medan</option>
                                                                    <option>Banda Aceh</option>
                                                                    <option>Jambi</option>
                                                                    <option>Bandar Lampung</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Kelurahan</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>Mangunharjo</option>
                                                                    <option>Jrebeng Lor</option>
                                                                    <option>Jrebeng Wwetan</option>
                                                                    <option>Jati</option>
                                                                    <option>Kademangan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Kecamatan</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>Kebonsari Kulon</option>
                                                                    <option>Kebonsari Wetan</option>
                                                                    <option>Pakistaji</option>
                                                                    <option>Muneng</option>
                                                                    <option>Kebonsari Lor</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Desa</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>Mangunharjo</option>
                                                                    <option>Jrebeng Lor</option>
                                                                    <option>Jrebeng Wwetan</option>
                                                                    <option>Jati</option>
                                                                    <option>Kademangan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleAddress">Kode Pos</label>
                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>21219</option>
                                                                    <option>30987</option>
                                                                    <option>21297</option>
                                                                    <option>24098</option>
                                                                    <option>21234</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative form-group">
                                                                <label for="exampleText" class="">Alamat Lengkap</label>
                                                                <textarea name="text" id="exampleText" class="form-control"></textarea>
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
                                                                                    <label for="exampleEmail2">Nama Lengkap</label>
                                                                                    <input name="email" id="exampleEmail2" type="email" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail2">E-mail</label>
                                                                                    <input name="email" id="exampleEmail2" type="email" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Jenjang Sekolah</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <small class="form-text text-muted">Masukkan foto KTP anda disini
                                                                                    </small>
                                                                                    <option>SD</option>
                                                                                    <option>SMP</option>
                                                                                    <option>SMA</option>
                                                                                    <option>SMK</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Nama Sekolah</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>SDN Mangunharjo 1</option>
                                                                                    <option>SDN Mangunharjo 2</option>
                                                                                    <option>SMP Negeri 2 Probolinggo</option>
                                                                                    <option>SMK Negeri 1 Probolinggo</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kelas</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>XI RPL 1</option>
                                                                                    <option>XI RPL 2</option>
                                                                                    <option>X AKL 1</option>
                                                                                    <option>X BDP 3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">No Telepon</label>
                                                                                    <input name="address" id="exampleAddress" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">No Whatsapp</label>
                                                                                    <input name="address" id="exampleAddress" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                          <div class="col-md-12">
                                                                              <div class="position-relative form-group">
                                                                                  <label for="exampleText" class="">Identitas(KTP/Kartu Pelajar) </label>
                                                                                  <div class="card mb-3 bg-plum-plate widget-content">
                                                                                      <div class="widget-content-wrapper">
                                                                                          <div class="widget-content-left text-light">
                                                                                              <input name="file" id="exampleFile" type="file" class="form-control-file">
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>        
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleText" class="">Deskripsi Peristiwa</label>
                                                                                    <textarea name="text" id="exampleText" class="form-control">                     </textarea>         
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleText" class="">Dokumentasi Peristiwa </label>
                                                                                <div class="card mb-3 bg-plum-plate widget-content">
                                                                                <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left text-light">
                                                                                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-4">
                                                                                <div class="card-body">
                                                                                <h5 class="card-title">Waktu Mulai Donasi</h5>
                                                                                <input type="text" class="form-control" data-toggle="datepicker">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="card-body">
                                                                                <h5 class="card-title">Waktu Berakhir Donasi</h5>
                                                                                <input type="text" class="form-control" data-toggle="datepicker">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="card-body">
                                                                                <h5 class="card-title">Jumlah Uang yang Dibutuhkan</h5>
                                                                                <input name="email" id="exampleEmail55" type="email" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider"></div> 

                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Provinsi</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>Aceh</option>
                                                                                    <option>Sumatera Utara</option>
                                                                                    <option>Sumatera Barat</option>
                                                                                    <option>Riau</option>
                                                                                    <option>Jawa Timur</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kota/Kabupaten</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>Probolinggo</option>
                                                                                    <option>Medan</option>
                                                                                    <option>Banda Aceh</option>
                                                                                    <option>Jambi</option>
                                                                                    <option>Bandar Lampung</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kelurahan</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>Mangunharjo</option>
                                                                                    <option>Jrebeng Lor</option>
                                                                                    <option>Jrebeng Wwetan</option>
                                                                                    <option>Jati</option>
                                                                                    <option>Kademangan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kecamatan</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>Kebonsari Kulon</option>
                                                                                    <option>Kebonsari Wetan</option>
                                                                                    <option>Pakistaji</option>
                                                                                    <option>Muneng</option>
                                                                                    <option>Kebonsari Lor</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Desa</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>Mangunharjo</option>
                                                                                    <option>Jrebeng Lor</option>
                                                                                    <option>Jrebeng Wwetan</option>
                                                                                    <option>Jati</option>
                                                                                    <option>Kademangan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleAddress">Kode Pos</label>
                                                                                    <select name="select" id="exampleSelect" class="form-control">
                                                                                    <option>21219</option>
                                                                                    <option>30987</option>
                                                                                    <option>21297</option>
                                                                                    <option>24098</option>
                                                                                    <option>21234</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative form-group">
                                                                                <label for="exampleText" class="">Alamat Lengkap</label>
                                                                                <textarea name="text" id="exampleText" class="form-control"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="position-relative form-check">
                                                                        <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                                                        <label for="exampleCheck" class="form-check-label">Centang untuk menyetujui peraturan yang telah dibuat!</label>
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
                                                            <div class="results-subtitle mt-4">Selamat!</div>
                                                            <div class="results-title">Pembukaan Galang Dana-mu Sedang Diajukan. Tunggu Pemberitahuan Lebih Lanjut Tentang Persetujuan Pembukaan Galang Dana-mu!</div>
                                                            <div class="mt-3 mb-3"></div>
                                                            <div class="text-center">
                                                                <button class="btn-shadow btn-wide btn btn-success btn-lg">SELESAI</button>
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
                            </div>
                        </div>
                    </div>
                </div> 
