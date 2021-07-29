

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <br>
                        <h4>Pengaturan</h4>
                        <br>
                        <!-- Menu tab -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block"><i class="ti-user mr-2"></i>Ubah Data Diri</span>    
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block"><i class="ti-key mr-2"></i>Ubah Kata Sandi</span>    
                                </a>
                            </li>
                        </ul>  
                        <!-- selesai menu tab -->

                        <!-- Isi Tab -->
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="padding: 10px;">
                                            <br>
                                            <h5>Pengaturan Data Diri</h5>
                                            <br>
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" required placeholder="Masukkan Nama"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" required placeholder="Masukkan Email"/>
                                            </div>
                                            <div class="form-group">
                                                <label>No. Handphone</label>
                                                <input type="text" class="form-control" required placeholder="Masukkan No. Handphone"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block mb-3">Jenis Kelamin :</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1">Laki - Laki</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                </div>
                                            </div>
                                            <div class="row col-md-6">
                                                <button type="button" class="btn btn-secondary waves-effect waves-light mr-3" style="float: left;">Batal</button>
                                                <button type="button" class="btn btn-info waves-effect waves-light" style="float: left;">Simpan</button>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-3" id="profile" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="padding: 10px;">
                                            <br>
                                            <h5>Ubah Kata Sandi</h5>
                                            <br>
                                            <div class="form-group">
                                                <label>Kata Sandi Lama</label>
                                                <input type="password" class="form-control" required placeholder="Masukkan Sandi Lama"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Kata Sandi Baru</label>
                                                <input type="password" class="form-control" required placeholder="Masukkan Sandi Baru"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Kata Sandi Baru</label>
                                                <input type="password" class="form-control" required placeholder="Ulangi Sandi Baru"/>
                                            </div>
                                            <div class="row col-md-6">
                                                <button type="button" class="btn btn-secondary waves-effect waves-light mr-3" style="float: left;">Batal</button>
                                                <button type="button" class="btn btn-info waves-effect waves-light" style="float: left;">Ubah Kata Sandi</button>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Selesai isi tab -->

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