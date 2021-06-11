<div class="app-main__inner">

<?php tampilnotif()?>
<?php $no=1; 
foreach ($tampil AS $rowA ) { ?>

                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="card-shadow-primary card-border mb-3 profile-responsive-sm card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-vicious-stance">
                                            <div class="menu-header-image opacity-1"
                                                style="background-image: url('assets/images/dropdown-header/abstract1.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                    <div class="avatar-icon rounded-circle">
                                                    <img src="assets/images/fotoprofil/<?php echo $rowA->foto_profil;?>">
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title"><?php echo $rowA->nama_lengkap; ?> </h5>
                                                    <h6 class="menu-header-subtitle">Admin 1</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                <a href="<?php echo base_url('edit_profil/tambahview'); ?>" type="button" class="btn btn-primary">
                                                    EDIT
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $no++;} ?>
                </div>