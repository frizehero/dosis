<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Data Ruangan
                                        <div class="page-title-subheading">Halaman Manajemen Data Ruangan</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                  <a href="<?php echo base_url('pembayaran2/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>

                                </div>    </div>
                        </div>

                        <?php tampilnotif()?>

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                

                                <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Detail</th>
                                        <th>No</th>
                                        <th width="20%">Nominal Donasi</th>
                                        <th width="20%">Nama Lengkap</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Pilih Bank</th>
                                        <th>Nama Rekening</th>
                                        <th>No.Rekening</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Pesan dan Kesan</th>
                                        <th>Opsi</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php  
                                    $no=1;
                                           
                                    foreach ($tampil AS $rowP ) { ?>
                                    <tr>
                                        <td><button type="button" class="btn btn-warning">
                                            <i class="fa fa-search fa-w-16 fa-spin "></i>
                                            </button></td>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $rowP->nominal_donasi;?></td>
                                        <td><?php echo $rowP->nama_lengkap;?></td>
                                        <td><?php echo $rowP->tgl_pembayaran;?></td>
                                        <td><?php echo $rowP->pilih_bank;?></td>
                                        <td><?php echo $rowP->nama_rekening;?></td>
                                        <td><?php echo $rowP->nama_rekening;?></td>
                                        <td><?php echo $rowP->nama_rekening;?></td>
                                        <td><?php echo $rowP->nama_rekening;?></td>

                                            <a href="<?php echo base_url('pembayaran2/editview/'. encrypt_url($rowP->id_pembayaran)); ?>" class="btn btn-primary">
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

                          <form action="<?php echo base_url('inventory_room/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_room ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $rowP->id_inv_room ?>" class="form-control">
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
                   

            