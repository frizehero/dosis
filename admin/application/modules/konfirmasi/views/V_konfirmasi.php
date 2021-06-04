 <div class="app-main__inner">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Konfirmasi Postingan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Konfirmasi Pembayaran</span>
                                </a>
                            </li>
                        </ul>
                        <?php tampilnotif()?>
                        <class class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <?php $no=1; 
                                    foreach ($tampilpostingan AS $rowA ) { ?>
                                        <div class="col-md-4">
                                            <div class="main-card mb-3 card">
                                                <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Postingan
                                                    <div class="btn-actions-pane-right">
                                                        <a href="detail-donasi.html">
                                                        <button class="mr-2 text-danger btn btn-link btn-sm">Views</button>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div class="dropdown-menu-header">
                                                            <div class="wrapper rounded"></div>
                                                            <img src="http://localhost/dosis/user/images/galangdana/<?php echo $rowA->identitas_penerima;?>" style="width: 278px; height:210px;">   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-block text-center card-footer">
                                                    <a href="javascript:void(0);" class="btn-wide btn btn-success">Terima</a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus1">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal HAPUS -->
                                        <div class="modal fade" id="hapus<?php echo $no ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form action="<?php echo base_url('galang_dana2/hapus') ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <!--Modal body-->
                                                            <p class="text-semibold text-main"></p>
                                                            <p>Anda Yakin Ingin Menghapus <b>galang dana ini</b> ? </p>

                                                            <input name="id" type="hidden" value="<?php echo $rowA->id_galang_dana2 ?>" class="form-control">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                                            <button class="btn btn-primary" type="submit">Hapus</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    <?php $no++;} ?>
                                </div>
                            </div>                                    
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">History Pembayaran
                                                <div class="btn-actions-pane-right">
                                                    <button class="btn btn-primary" id="reportrange">
                                                        <i class="fa fa-calendar pr-1"></i>
                                                        <span>February 1, 2021 - February 28, 2021</span>
                                                        <i class="fa pl-1 fa-caret-down"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No.</th>
                                                            <th>Nama</th>
                                                            <th class="text-center">Tanggal Transfer</th>
                                                            <th class="text-center">Jumlah</th>
                                                            <th class="text-center">Nomor Rekening</th>
                                                            <th class="text-center">Bukti Transfer</th>
                                                            <th class="text-center">Bank</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $no=1; 
                                                    foreach ($tampil AS $rowP ) { ?>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center text-muted"><?php echo $no;?></td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper"<?php echo $rowP->nama_rekening; ?>>
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading"><?php echo $rowP->nama_rekening; ?></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><?php echo $rowP->tgl_pembayaran; ?></td>
                                                                <td class="text-center">Rp.<?php echo $rowP->nominal_donasi; ?></td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-warning"><?php echo $rowP->no_rekening; ?></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <img width="100" src="http://localhost/dosis/user/images/pembayaran/<?php echo $rowP->bukti_pembayaran;?>" alt="">
                                                                </td>
                                                                <td class="text-center"><?php echo $rowP->pilih_bank; ?></td>
                                                                 <div class="d-block text-center card-footer">
                                                                <td class="text-center">
                                                                    <div role="group" class="btn-group-sm btn-group">
                                                                        <button class="btn-shadow btn btn-primary">konfirmasi</button>
                                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus2<?php echo $no ?>">
                                                                            Hapus
                                                                        </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                     <!-- Modal HAPUS -->
                                                        <div class="modal fade" id="hapus2<?php echo $no ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <form action="<?php echo base_url('konfirmasi/hapus2') ?>" method="POST" enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                            <!--Modal body-->
                                                                            <p class="text-semibold text-main"></p>
                                                                            <p>Anda Yakin Ingin Menghapus <b>pembayaran ini</b> ? </p>

                                                                            <input name="id" type="hidden" value="<?php echo $rowP->id_pembayaran?>" class="form-control">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                                                            <button class="btn btn-primary" type="submit">Hapus</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php $no++;} ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script></body>