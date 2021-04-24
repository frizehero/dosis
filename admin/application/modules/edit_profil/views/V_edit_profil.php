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

                                  <a href="<?php echo base_url('edit_profil/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>

                                </div>    </div>
                        </div>

                        <?php tampilnotif()?>

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                

                                <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Details</th>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>username</th>
                                        <th width="20%">Email</th>
                                        <th>Aalamat</th>
                                        <th>Kode Pos</th>
                                        <th>No WA</th>
                                        <th>No Telepon</th>
                                        <th>Instagram</th>
                                        <th>Facebook</th>
                                        <th>twitter</th>
                                       
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
                                        <td><?php echo $rowP->nama_lengkap;?></td>
                                        <td><?php echo $rowP->username;?></td>
                                        <td><?php echo $rowP->email;?></td>
                                        <td><?php echo $rowP->alamat;?></td>
                                        <td><?php echo $rowP->kode_pos;?></td>
                                        <td><?php echo $rowP->no_wa;?></td>
                                        <td><?php echo $rowP->no_telepon;?></td>
                                        <td><?php echo $rowP->instagram;?></td>
                                        <td><?php echo $rowP->facebook;?></td>
                                        <td><?php echo $rowP->twitter;?></td>

                                            <a href="<?php echo base_url('edit_profil/editview/'. encrypt_url($rowP->id_edit_profil)); ?>" class="btn btn-primary">
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
                   

            