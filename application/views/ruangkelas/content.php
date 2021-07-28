
         

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <br>
                        <div class="row">
                            <h4>Kelas</h4>
                        </div>     
                        <br>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12 card">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#akademik" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">AKADEMIK</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#umum" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">UMUM</span> 
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="akademik" role="tabpanel">
                                        <p class="mb-0">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h5>KELAS AKADEMIK</h5>
                                                <P>Kelas akademik ini tersinkron dengan jadwal perkuliahan sistem informasi akademik yang anda ikuti.</P>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="tab-pane p-3" id="umum" role="tabpanel">
                                        <p class="mb-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>KELAS YANG TELAH DIBUAT</h5>
                                                    <P>Kelas umum yang anda buat dan dapat anda kelola</P>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" data-toggle="modal" data-target=".modal-lainnya" style="padding: 5px; float: right; color: #616161;"><b>LAINNYA</b></a>
                                                    <a href="#" data-toggle="modal" data-target=".modal-gabung" style="padding: 5px; float: right; color: #616161;"><b>GABUNG KE KELAS&nbsp;&nbsp;|</b></a>
                                                    <a href="#" data-toggle="modal" data-target=".modal-buat" style="padding: 5px; float: right; color: #616161;"><b>BUAT KELAS&nbsp;&nbsp;|</b></a>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal Info -->
                <div class="modal fade modal-buat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Buat Kelas Baru :</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Mata Kuliah :</label>
                                    <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                                </div>
                                <div class="form-group">
                                    <label>Nama Kelas :</label>
                                    <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi :</label>
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="Jelaskan secara singkat maksud dari pembuatan kelas ini"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="d-block mb-3">Tipe :</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="outer-group[0][customRadioInline1]" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Publik</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="outer-group[0][customRadioInline1]" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Pribadi</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Apa yang akan peserta pelajari :</label>
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="Jelaskan secara singkat apa yang akan peserta pelajari"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Buat</button>
                                <button type="submit" class="btn btn-secondary">Tutup</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Modal Info -->
                <div class="modal fade modal-gabung" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Gabung ke Kelas :</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>PIN :</label>
                                    <input type="text" class="colorpicker-default form-control colorpicker-element" data-colorpicker-id="1" data-original-title="" title="" placeholder="e.g ABCDE">
                                </div>
                                <button type="submit" class="btn btn-primary">Buat</button>
                                <button type="submit" class="btn btn-secondary">Tutup</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

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