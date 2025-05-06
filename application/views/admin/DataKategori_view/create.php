<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-3">
        <div class="row">
            <div class="container-fluid py-1">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tambah Data Kategori</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-4">
                                <div class="body">
                                    <a class="btn btn-secondary" href="<?= base_url('backend/kategori') ?>">Kembali</a>
                                    <form role="form" id="addUser" action="<?php echo base_url() ?>backend/kategori/addNew" method="post" role="form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="fname">Masukan Nama Kategori &nbsp;&nbsp;:</label>
                                                    <label><input type="text" class="form-control required" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori"></label>
                                                    <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <input type="submit" class="btn btn-primary" value="Submit" />
                                            <input type="reset" class="btn btn-warning" value="Reset" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->


            </div>
        </div>
    </div>
    </div>
    <!-- #END# Exportable Table -->
    </div>
    </div>
</main>

<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


<script src="<?= base_url(); ?>assets/admin/js/admin.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/pages/tables/jquery-datatable.js"></script>