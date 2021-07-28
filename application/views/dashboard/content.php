

<div class="topnav" style="background-color: #29b6f6 !important;">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                            <i class="ti-home mr-2"></i><b>Beranda</b>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                            <i class="ti-write mr-2"></i>Ruang Kelas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                            <i class="ti-email mr-2"></i>Obrolan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                            <i class="ti-world mr-2"></i>Jelajah
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="page-title-box">
                        <div class="card" style="padding: 10px; margin-top: 5px;">
                            <h4 class="font-size-18">Kelas Umum</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active">Semua kelas umum ditampilkan disini</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4 class="font-size-18">Bagikan sesuatu di kelas anda</h4>
                        <div class="card text-black">
                            <div class="card-body">
                                <div class="col-md-3 hovericon" style="float: left; padding: 10px;">
                                    <a href="#" data-toggle="modal" data-target=".modal-materi"><img src="<?= base_url();?>/assets/images/materi.jpg" alt="Materi" width="50" style="margin-left: auto; margin-right: auto; display: block;"></a>
                                    <h6 style="text-align: center;"><a href="#" style="color: #616161">Materi</a></h6>
                                </div>
                                <div class="col-md-3 hovericon" style="float: left; padding: 10px;">
                                    <a href="#" data-toggle="modal" data-target=".modal-tugas"><img src="<?= base_url();?>/assets/images/materi.jpg" alt="Tugas" width="50" style="margin-left: auto; margin-right: auto; display: block;"></a>
                                    <h6 style="text-align: center;"><a href="#" style="color: #616161">Tugas</a></h6>
                                </div>
                                <div class="col-md-3 hovericon" style="float: left; padding: 10px;">
                                    <a href="#" data-toggle="modal" data-target=".modal-kuis"><img src="<?= base_url();?>/assets/images/materi.jpg" alt="Kuis" width="50" style="margin-left: auto; margin-right: auto; display: block;"></a>
                                    <h6 style="text-align: center;"><a href="#" style="color: #616161">Kuis</a></h6>
                                </div>
                                <div class="col-md-3 hovericon" style="float: left; padding: 10px;">
                                    <a class="mo-mb-2" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <img src="<?= base_url();?>/assets/images/materi.jpg" alt="Kuis" width="50" style="margin-left: auto; margin-right: auto; display: block;">
                                    </a>
                                    <h6 style="text-align: center;"><a href="#" style="color: #616161">Lainnya</a></h6>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body mb-0">
                                    <div class="row">
                                        <div class="col-md-1">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-3 hovericon" style="padding-top: 10px; padding-bottom: 10px;">
                                            <a href="#" data-toggle="modal" data-target=".modal-info"><img src="<?= base_url();?>/assets/images/info.png" alt="Materi" width="50" style="margin-left: auto; margin-right: auto; display: block;"></a>
                                            <h6 style="text-align: center;"><a href="#" style="color: #616161">Info</a></h6>
                                        </div>
                                        <div class="col-md-3 hovericon" style="padding-top: 10px; padding-bottom: 10px;">
                                            <a href="#" data-toggle="modal" data-target=".modal-tugas"><img src="<?= base_url();?>/assets/images/survey.png" alt="Tugas" width="50" style="margin-left: auto; margin-right: auto; display: block;"></a>
                                            <h6 style="text-align: center;"><a href="#" style="color: #616161">Survey</a></h6>
                                        </div>
                                        <div class="col-md-3 hovericon" style="padding-top: 10px; padding-bottom: 10px;">
                                            <a href="#" data-toggle="modal" data-target=".modal-kuis"><img src="<?= base_url();?>/assets/images/acara.png" alt="Kuis" width="50" style="margin-left: auto; margin-right: auto; display: block;"></a>
                                            <h6 style="text-align: center;"><a href="#" style="color: #616161">Acara</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-title-box">
                        <h4 class="font-size-18" style="float: left;"><i class="ti-menu"></i>&nbsp;&nbsp;Timeline</h4>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example" style="float: right;">
                            <button type="button" class="btn btn-info waves-effect waves-light">Semua</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Kelas</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Berita</button>
                        </div>
                    </div>

                    <div style="clear: both;">&nbsp;</div>

                    <div class="card text-black">
                        <div class="card-body">
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="<?= base_url();?>/assets/images/users/user-6.jpg" alt="Generic placeholder image" height="64">
                                <div class="media-body">
                                    <h6 class="mt-2">Endrianto <span>memposting di <a href="#">Grup Kelas Umum</a></span></h6>
                                    <small>3 jam yang lalu</small>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec erat tortor, interdum in quam sed, accumsan porta ante. Pellentesque pretium lacinia sem, quis mattis odio maximus eu. Etiam fringilla velit sem, ac suscipit risus pulvinar sed. In et enim in nunc posuere gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend odio sit amet est sollicitudin scelerisque. Praesent sodales nulla sed eros tincidunt venenatis. Nullam imperdiet metus vitae lacus tempus, eu tristique lectus imperdiet. Nam volutpat consectetur metus, ultricies tristique nunc imperdiet a. Fusce pellentesque id felis ac laoreet. Aliquam aliquam, dui id scelerisque fringilla, metus eros sagittis eros, mattis faucibus turpis sem id erat. Ut ornare, metus at condimentum maximus, augue felis tristique est, eu tempor metus est eu ipsum. Fusce consectetur at enim nec imperdiet. Sed elit nunc, accumsan a elit sed, mattis aliquam nisi. Integer mollis suscipit nulla facilisis iaculis.</p>
                            <img src="<?= base_url();?>/assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
                            <div class="mt-3 mb-2" style="border-bottom: 2px solid #e0e0e0;"></div>
                            <i class="ti-heart"></i>&nbsp;<a href="#" style="color: #6d6d6d;">Suka</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="ti-comments"></i>&nbsp;<a href="#" style="color: #6d6d6d;">Komentar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="ti-share"></i> <a href="#" style="color: #6d6d6d;">Bagikan</a>
                            <div class="card text-black bg-secondary mt-1">
                                <div class="card-body">
                                    <div class="media">
                                        <img class="d-flex mr-3 rounded-circle" src="<?= base_url();?>/assets/images/users/user-6.jpg" alt="Generic placeholder image" height="32">
                                        <div class="media-body">
                                            <h6 class="">Endrianto</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat lorem congue, ultrices nisi a, rhoncus dolor. Nam sollicitudin nisl odio, quis ultrices est vulputate tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <img class="d-flex mr-3 rounded-circle" src="<?= base_url();?>/assets/images/users/user-6.jpg" alt="Generic placeholder image" height="32">
                                </div>
                                <div class="col-md-10">
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="1" placeholder="Tambahkan komentar"></textarea>
                                </div>
                                <div class="col-md-1">
                                    <a href="#"><i class="ti-arrow-circle-right" style="border: 1px solid #e0e0e0; padding: 8px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-sm-3">
                    <div class="page-title-box">
                        <h4 class="font-size-18">Jadwal Minggu ini</h4>
                        <div class="card text-black">
                            <div class="card-body">
                                <p>Tidak ada jadwal</p>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-box">
                        <h4 class="font-size-18">Tugas belum dikumpulkan <?= $info; ?></h4>
                        <div class="card text-black">
                            <div class="card-body">
                                <p>Tidak ada tugas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
            <!-- end page title -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Modal Materi -->
    <div class="modal fade modal-materi" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Bagikan Sesuatu di Kelas Anda :</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Pilih Kelas & Sesi</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Atur Materi</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#messages2" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Bagikan Materi</span>   
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="home2" role="tabpanel">
                            <div class="form-group">
                                <label>Dikelas mana Materi akan dibagikan?</label>
                                <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                            </div>
                            <div class="form-group" data-select2-id="7">
                                <label class="control-label">Di sesi berapa Materi akan dibagikan?</label>
                                <select class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="3">Pilih Sesi</option>
                                    <optgroup label="Pilih Kelas" data-select2-id="14">
                                        <option value="AK" data-select2-id="15">Kelas Umum</option>
                                        <option value="HI" data-select2-id="16">Kelas Khusus</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="tab-pane p-3" id="profile2" role="tabpanel">
                            <p class="mb-0">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                single-origin coffee squid. Exercitation +1 labore velit, blog
                                sartorial PBR leggings next level wes anderson artisan four loko
                                farm-to-table craft beer twee. Qui photo booth letterpress,
                                commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                vero magna velit sapiente labore stumptown. Vegan fanny pack
                                odio cillum wes anderson 8-bit.
                            </p>
                        </div>
                        <div class="tab-pane p-3" id="messages2" role="tabpanel">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy
                                salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                retro mlkshk vice blog. Scenester cred you probably haven't
                                heard of them, vinyl craft beer blog stumptown. Pitchfork
                                sustainable tofu synth chambray yr.
                            </p>
                        </div>
                        <div class="tab-pane p-3" id="settings2" role="tabpanel">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                art party before they sold out master cleanse gluten-free squid
                                scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                art party locavore wolf cliche high life echo park Austin. Cred
                                vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                mustache readymade thundercats keffiyeh craft beer marfa
                                ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                vegan.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End modal materi -->

    <!-- Modal Tugas -->
    <div class="modal fade modal-tugas" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Bagikan Sesuatu di Kelas Anda :</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tugas1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Pilih Kelas & Sesi</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tugas2" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Atur Tugas</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tugas3" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Bagikan Tugas</span>   
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="tugas1" role="tabpanel">
                            <div class="form-group">
                                <label>Dikelas mana Tugas akan dibagikan?</label>
                                <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                            </div>
                            <div class="form-group" data-select2-id="7">
                                <label class="control-label">Di sesi berapa Tugas akan dibagikan?</label>
                                <select class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="3">Pilih Sesi</option>
                                    <optgroup label="Pilih Kelas" data-select2-id="14">
                                        <option value="AK" data-select2-id="15">Kelas Umum</option>
                                        <option value="HI" data-select2-id="16">Kelas Khusus</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="tab-pane p-3" id="tugas2" role="tabpanel">
                            <p class="mb-0">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                single-origin coffee squid. Exercitation +1 labore velit, blog
                                sartorial PBR leggings next level wes anderson artisan four loko
                                farm-to-table craft beer twee. Qui photo booth letterpress,
                                commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                vero magna velit sapiente labore stumptown. Vegan fanny pack
                                odio cillum wes anderson 8-bit.
                            </p>
                        </div>
                        <div class="tab-pane p-3" id="tugas3" role="tabpanel">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy
                                salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                retro mlkshk vice blog. Scenester cred you probably haven't
                                heard of them, vinyl craft beer blog stumptown. Pitchfork
                                sustainable tofu synth chambray yr.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End modal tugas -->

    <!-- Modal Kuis -->
    <div class="modal fade modal-kuis" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Bagikan Sesuatu di Kelas Anda :</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kuis1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Pilih Kelas & Sesi</span> 
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="kuis1" role="tabpanel">
                            <div class="form-group">
                                <label>Dikelas mana Kuis akan dibagikan?</label>
                                <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                            </div>
                            <div class="form-group" data-select2-id="7">
                                <label class="control-label">Di sesi berapa Kuis akan dibagikan?</label>
                                <select class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="3">Pilih Sesi</option>
                                    <optgroup label="Pilih Kelas" data-select2-id="14">
                                        <option value="AK" data-select2-id="15">Kelas Umum</option>
                                        <option value="HI" data-select2-id="16">Kelas Khusus</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End modal Kuis -->

    <!-- Modal Info -->
    <div class="modal fade modal-info" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Bagikan Sesuatu di Kelas Anda :</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#info1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Pilih Kelas & Sesi</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#info2" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Atur Info</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#info3" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Bagikan Info</span>   
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="info1" role="tabpanel">
                            <div class="form-group">
                                <label>Dikelas mana Info akan dibagikan?</label>
                                <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                            </div>
                        </div>
                        <div class="tab-pane p-3" id="info2" role="tabpanel">
                            <p class="mb-0">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                single-origin coffee squid. Exercitation +1 labore velit, blog
                                sartorial PBR leggings next level wes anderson artisan four loko
                                farm-to-table craft beer twee. Qui photo booth letterpress,
                                commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                vero magna velit sapiente labore stumptown. Vegan fanny pack
                                odio cillum wes anderson 8-bit.
                            </p>
                        </div>
                        <div class="tab-pane p-3" id="info3" role="tabpanel">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy
                                salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                retro mlkshk vice blog. Scenester cred you probably haven't
                                heard of them, vinyl craft beer blog stumptown. Pitchfork
                                sustainable tofu synth chambray yr.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End modal info -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © <script>document.write(new Date().getFullYear())</script> STIP JAKARTA
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->