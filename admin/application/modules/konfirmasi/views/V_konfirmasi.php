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
                                                        <img src="assets/images/Peristiwa/1.jpg" style="width: 278px; height:210px;">   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block text-center card-footer">
                                                <a href="javascript:void(0);" class="btn-wide btn btn-success">Terima</a>
                                                <a href="javascript:void(0);" class="btn-wide btn-shadow btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
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
                                                                <td class="text-center">
                                                                    <div role="group" class="btn-group-sm btn-group">
                                                                        <button class="btn-shadow btn btn-primary">konfirmasi</button>
                                                                <td class="text-center">
                                                                    <div role="group" class="btn-group-sm btn-group">
                                                                        <button class="btn-shadow btn btn-primary">tolak</button>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
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