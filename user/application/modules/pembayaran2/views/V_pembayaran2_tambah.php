<?php tampilnotif()?>
<form action="<?php echo base_url('pembayaran2/tambah') ?>" method="POST" enctype="multipart/form-data">
                <div class="content">
                    <div class="col-md-7"  style="padding: 30px 50px 10px 100px;" >
                        <!-- profile-edit-container--> 
                        <div class="profile-edit-container add-list-container">
                            <div class="custom-form">
                                <label></label>
                            </div>
                            <div class="custom-form">
                                <label><b>Masukan Nominal Donasi Anda</b> <i class="fa fa-money"></i></label>
                                <input name="nominal_donasi" placeholder="" type="text"class="form-control">
                                <div class="row">
                                </div>
                            </div>
                            <div class="custom-form">
                                <label><b>Nama Lengkap</b><i class="fa fa-user-o"></i></label>
                                <input name="nama_lengkap" placeholder="" type="text"class="form-control">
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
                                        <label><i class="fa fa-calendar-check-o"></i>  </label>
                                        <input type="text" placeholder="Date" class="datepicker picker-input" data-large-mode="true" data-large-default="true" value="" data-id="datedropper-0" readonly="">
                                </div>
                                <div class="act-widget fl-wrap">
                                    <label><b>Pilih Bank</b></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="add-list-media-image">
                                                <img src="images/transfer/1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="add-list-media-image">
                                                <img src="images/transfer/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="add-list-media-image">
                                                <img src="images/transfer/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="add-list-media-image">
                                                <img src="images/transfer/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row"> 
                                        <div class="col-md-3">
                                            <div class="add-list-media-image">
                                                <a href="#">
                                                    <img src="images/transfer/5.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="add-list-media-image">
                                                <img src="images/transfer/6.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="add-list-media-image">
                                                <img src="images/transfer/7.png" alt="">
                                            </div>
                                        </div>                                     
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <label></label>
                                <label><b>Nama Rekening</b><i class="fa fa-money"></i></label>
                                <input name="nama_rekening" placeholder="" type="text"class="form-control">
                                <label><b>No.Rekening</b><i class="fa fa-money"></i></label>
                                <input name="no_rekening" placeholder="" type="text"class="form-control">
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
                                            <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                            <form class="fuzone">
                                                <div class="fu-text">
                                                    <span><i class="fa fa-picture-o"></i> Click here or drop files to upload</span>
                                                </div>
                                                <input type="file" class="upload">
                                            </form>
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
                    <div class="col-md-5"  style="padding: 30px 50px 10px 30px;" >
                        <div class="box-widget-item fl-wrap">
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
                                                        : Sandra Lidya
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
                                                        : Perum GPA blok ED-22
                                                    </div>
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
                                                        : Sandra Fitriani
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
                                                        : 731 025 2527</b>
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
                                                        : 085859057437
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row" style="text-align: left;">
                                                    <div class="col-md-1">
                                                        <span><i class="fa fa-envelope-o"></i>
                                                    </div>
                                                    <div class="col-md-4" style="padding: 0px 5px 0px 1opx;">
                                                        Email
                                                    </div>
                                                    <div class="col-md-6" style="padding: 0px 5px 0px 5px;">
                                                        :Sndrfitriani03@gmail.com
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>