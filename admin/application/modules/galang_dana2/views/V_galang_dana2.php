<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Data Galang Dana
                                        <div class="page-title-subheading">Data User yang Mengajukan Galang Dana </div>
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
                                                    <a class="nav-link" href="galang_dana2/tambahview">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span> Tambah Data</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div tabindex="-2" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="galang_dana2/view">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span> Edit Data</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div> 

            <?php tampilnotif()?>
                <div class="row">
                <?php $no=1;
                foreach ($tampil AS $rowP ) { ?>
                    <div class="col-sm-12 col-md-4">
                        <div class="card-hover profile-responsive card-border border-success mb-3 card">
                        <div class="dropdown-menu-header">
                            <div class="wrapper rounded"></div>
                            <img src="<?php echo base_url() ?>assets/images/galangdana/<?php echo $rowP->foto1_penerima;?>" name="foto" style="width: 314px; height:210px;">   
                        </div>
                        <div class="p-0 card-body">
                            

                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-2-eg1">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">


                                        	
                                            <div class="h5 modal-title">
                                                <div class="text-right">
                                                    <h6>
                                                        <div >20-april-2021</div>
                                                    </h6>
                                                </div>
                                                <h5 class="menu-header-title">
                                                    <div><a href="<?php echo base_url('galang_dana2/detailview/' . encrypt_url($rowP->id_galang_dana2)); ?>"><?php echo $rowP->judul_donasi_penerima; ?></a></div>

                                                </h5>
                                                <h6>
                                                    <div>Diposting oleh : <?php echo $rowP->nama_pembuka;?></div>
                                                </h6>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Rp 0 Terkumpul dari Rp 15.000.000    
                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                            </div>
                                            </div>
                                            <div> <br> </div>
                                            <div> Sisa Waktu : 0 Hari</div>
                                            <div> 465 Orang telah Berdonasi</div>
                                        </li>
                                        <div class="card-body">
                                        <div class="br-wrapper br-theme-css-stars"><select id="css-stars" style="display: none;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2" class=""></a><a href="#" data-rating-value="3" data-rating-text="3"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div>
                                    </div>

                                    </ul>
                                </div>
                                <div class="tab-pane" id="tab-2-eg2">
                                    <ul class="list-group list-group-flush"><a href="javascript:void(0);" class="disabled list-group-item">Cras justo odio</a><a href="javascript:void(0);" class="list-group-item">Dapibus ac facilisis in</a><a href="javascript:void(0);" class="list-group-item">Morbi leo risus</a><a href="javascript:void(0);" class="list-group-item">Porta ac consectetur ac</a><a href="javascript:void(0);" class="list-group-item">Vestibulum at eros</a>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="tab-2-eg3">
                                    <div class="p-3">
                                        <p>With supporting text below as a natural lead-in to additional content.</p>
                                        <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since
                                            the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
                        <div class="text-center d-block card-footer">
                        	<button type="button" class="btn-shadow-primary btn btn-primary btn-lg" data-toggle="modal" data-target="#hapus<?php echo $no ?>">Hapus</button>
                            <a href="<?php echo base_url('galang_dana2/editview/'. encrypt_url($rowP->id_galang_dana2)); ?>" class="btn-shadow-primary btn btn-primary btn-lg">Edit</a>
                        </div>
                        </div>
     
                    </div>
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

                                                    <input name="id" type="hidden" value="<?php echo $rowP->id_galang_dana2 ?>" class="form-control">
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

