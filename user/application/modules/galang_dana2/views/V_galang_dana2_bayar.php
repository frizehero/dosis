<?php tampilnotif()?>
    <div class="content">
        <form action="<?php echo base_url('pembayaran2/tambah') ?>" method="POST" enctype="multipart/form-data">
            <div class="col-md-7"  style="padding: 30px 50px 10px 100px;" >
                <!-- profile-edit-container--> 
                <div class="profile-edit-container add-list-container">
                    <div class="custom-form">
                        <label></label>
                    </div>
                    <div class="custom-form">
                        <label><b>Masukan Nominal Donasi Anda</b> <i class="fa fa-money"></i></label>
                        <input name="nominal_donasi" placeholder="Minim 5.000" type="text"class="form-control">
                        <div class="row">
                        </div>
                    </div>
                    <div class="custom-form">
                        <div class="row">
                            <!--col --> 
                            <div class="col-md-6">
                                <div class="add-list-media-header">
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender">
                                    <span><b>Jadikan Donasi Anonim</b></span> 
                                    </label>
                                </div>
                            </div>                             
                        </div>
                        <label></label>
                        <div class="act-widget fl-wrap">
                            <label><b>Tanggal Pembayaran</b><i></i></label>
                            <input name="tgl_pembayaran" placeholder="" type="date"class="form-control">        
                        </div>
                        <div class="act-widget fl-wrap">
                            <label><b>Pilih Bank</b></label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="add-list-media-header">
                                        <label class="radio inline"> 
                                            <input type="radio" value="BCA" name="pilih_bank">
                                                <span><img src="<?php echo base_url() ?>images/transfer/1.png" alt=""></span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="add-list-media-header">
                                        <label class="radio inline"> 
                                            <input type="radio" value="MANDIRI SYARIAH" name="pilih_bank">
                                                <span><img src="<?php echo base_url() ?>images/transfer/2.png" alt=""></span>
                                        </label> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="add-list-media-header">
                                        <label class="radio inline"> 
                                            <input type="radio" value="BNI SYARIAH" name="pilih_bank">
                                                <span><img src="<?php echo base_url() ?>images/transfer/3.png" alt=""></span>
                                        </label> 
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="add-list-media-header">
                                        <label class="radio inline"> 
                                            <input type="radio" value="BANK MEGA SYARIAH" name="pilih_bank">
                                                <span><img src="<?php echo base_url() ?>images/transfer/4.png" alt=""></span>
                                        </label> 
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="add-list-media-header">
                                        <label class="radio inline"> 
                                            <input type="radio" value="BRI" name="pilih_bank">
                                                <span><img src="<?php echo base_url() ?>images/transfer/5.png" alt=""></span>
                                        </label> 
                                        </a>
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="add-list-media-header">
                                        <label class="radio inline"> 
                                            <input type="radio" value="MANDIRI" name="pilih_bank">
                                                <span><img src="<?php echo base_url() ?>images/transfer/6.png" alt=""></span>
                                        </label> 
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                    <div class="col-md-4">
                                    <div class="add-list-media-header">
                                        <label class="radio inline"> 
                                            <input type="radio" value="BNI" name="pilih_bank">
                                                <span><img src="<?php echo base_url() ?>images/transfer/7.png" alt=""></span>
                                        </label> 
                                    </div>
                                </div>                     
                            </div>
                            <br>
                            <br>
                        </div>
                        <label></label>
                        <label><b>Nama Rekening</b><i class="fa fa-money"></i></label>
                        <input name="nama_rekening" placeholder="Sandra Fitriani" type="text"class="form-control">
                        <label><b>No.Rekening</b><i class="fa fa-money"></i></label>
                        <input name="no_rekening" placeholder="731 025 2527" type="text"class="form-control">
                    </div>
                </div>
                <!-- profile-edit-container end-->                                        
                <!-- profile-edit-container--> 
                <div class="profile-edit-container add-list-container">
                    <div class="profile-edit-header fl-wrap">
                        <h4>Bukti Pembayaran</h4>
                    </div>
                    <div class="custom-form">
                        <div class="row">
                            <!--col --> 
                            <div class="col-md-6">
                                <div class="add-list-media-wrap">
                                    <form class="fuzone">
                                        <div class="fu-text">
                                                <span><i class="fa fa-picture-o"></i> Pilih salah satu foto untuk bukti pembayaran ini</span>
                                            <input name="foto" type="file" class="form-control-file">
                                        </div>
                                </div>
                            </div>
                            <!--col end--> 
                            <!--col --> 
                            <div class="col-md-4">
                                <div class="add-list-media-wrap">
                                </div>
                            </div>
                            <!--col end--> 
                            <!--col --> 
                            <!--col end-->                                                   
                        </div>
                    </div>
                </div>
                <div class="profile-edit-container add-list-container"> 
                    <div class="custom-form">
                        <label><b>Pesan dan Kesan :</b></label>
                        <textarea cols="40" rows="3" placeholder="" input name="pesan_kesan" type="text"class="form-control"></textarea>
                        <!-- Checkboxes -->
                    </div>
                </div>
                <div class="profile-edit-container add-list-container">
                    <button class="btn  big-btn  color-bg flat-btn" type="submit" >DONASI<i class="fa fa-angle-right"></i></button>
                </div>
            </div>
        </form>
        <form action="<?php echo base_url('galang_dana2/tampilbayar') ?>" method="POST" enctype="multipart/form-data">
            <div class="col-md-5"  style="padding: 30px 50px 10px 30px;" >
                <div class="box-widget-item fl-wrap">
                    <div class="box-widget-item-header">
                        <h3>Donasi Ke : <a href="<?php echo base_url('galang_dana2/detailview/' . encrypt_url($tampil['id_galang_dana2'])); ?>"><?php echo $tampil['judul_donasi_penerima'] ?></a> </h3>
                    </div>
                    <div class="box-widget-item-header">
                        <h3>Contacts : </h3>
                    </div>
                    <div class="box-widget">
                        <div class="box-widget-content">
                            <div class="list-author-widget-contacts list-item-widget-contacts">
                                <ul>
                                    <li>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-user-o"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 1opx;">
                                                Nama
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                : <?php echo $tampil['nama_pembuka'] ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 1opx;">
                                                Alamat
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                : <?php echo $tampil['alamat_pembuka'] ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-money"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 1opx;">
                                                Nama Rekening
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                : <?php echo $tampil['nama_penerima'] ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-money"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 1opx;"><b>
                                                No.Rekening</b>
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;"><b>
                                                : <?php echo $tampil['no_rekening_penerima'] ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-phone"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 1opx;">
                                                Phone
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                : <?php echo $tampil['telepon_pembuka'] ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row" style="text-align: left;">
                                            <div class="col-md-1">
                                                <span><i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="col-md-4" style="padding: 0px 5px 0px 1opx;">
                                                Whatsapp
                                            </div>
                                            <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                :<?php echo $tampil['whatsapp_pembuka'] ?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


                  
                   
                          