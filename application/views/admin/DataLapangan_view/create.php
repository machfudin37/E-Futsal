<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-3">
        <div class="row">
            <div class="container-fluid py-1">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tambah Data Lapangan</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-4">
                                <div class="body">
                                    <a class="btn btn-secondary" href="<?= base_url('backend/lapangan') ?>">Kembali</a>
                                    <form role="form" id="addLapangan" action="<?php echo base_url() ?>backend/Lapangan/addNew" method="post" role="form" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Nama Lapangan &nbsp;&nbsp;: </label>
                                                        <label><input type="text" class="form-control required" id="nama" name="nama" placeholder="Nama Lapangan"></label>
                                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Pilih Kategori &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                                        <label><select name="id_kategori" id="id_kategori" class="form-control show-tick required">
                                                                <?php foreach ($kategori as $f) { ?>
                                                                    <option value="<?= $f->id_kategori ?>"><?= $f->nama_kategori ?></option>
                                                                <?php } ?>
                                                            </select></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Lokasi Lapangan &nbsp;: </label>
                                                        <label><input type="text" class="form-control required" id="lokasi" name="lokasi" placeholder="Lokasi Lapangan"></label>
                                                        <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Tarif Sewa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                                        <label><input type="number" class="form-control required" id="tarif" name="tarif" placeholder="Tarif"></label>
                                                        <?= form_error('tarif', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Unggah Gambar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                                        <label><input type="file" class="form-control required" id="foto" name="userfile"></label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <input type="submit" class="btn btn-primary" value="Submit" />
                                            <input type="reset" class="btn btn-warning" value="Reset" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Exportable Table -->
                </div>
            </div>
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