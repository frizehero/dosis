



 <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Data Galang Dana
                                        <div class="page-title-subheading">Data Peralatan Dan Mesin , silahkan gunakan menu di samping untuk menambahkan </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Menu
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="galang_dana/tambahview">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span> Tambah Data</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div> 

            <?php tampilnotif()?>
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="container">
                            <table id="myTable" class="display nowrap table table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>Detail</th>
                                        <th>Nama Pembuka</th>
                                        <th>Sekolah Pembuka</th>
                                        <th>Provinsi Pembuka</th>
                                        <th>Nama Penerima</th>
                                        <th>Jumlah Galang Dana</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    foreach($tampil as $res) { ?>

                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <i class="fa fa-search fa-w-16 "></i>
                                            </button>
                                                <a href="<?php echo base_url('galang_dana/editview/'. encrypt_url($res->id_galangdana)); ?>" type="button" class="btn btn-primary">
                                                    <i class="fa fa-pen fa-w-16  "></i>
                                                </a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                                <i class="fa fa-trash fa-w-16 "></i>
                                            </button>
                                        </td>
                                        <td><?php echo $res->nama_pembuka?></td>
                                        <td><?php echo $res->sekolah_pembuka?></td>
                                        <td><?php echo $res->provinces?></td>
                                        <td><?php echo $res->nama_penerima?></td>
                                        <td><?php echo $res->jml_donasi?></td>
                                        <td>-</td>

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

                          <form action="<?php echo base_url('inventory_peralatan/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $res->kategori ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $res->id_inv_peralatan ?>" class="form-control">
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
</div>

