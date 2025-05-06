<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="container-fluid py-0">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Data kategori</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <a class="btn btn-primary" href="<?= base_url() ?>backend/kategori/createKategori">+ Tambah Data</a>
                            <div class="table-responsive p-0">
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center text-sm">No</th>
                                                    <th class="align-middle text-center text-sm">Kategori</th>
                                                    <th class="align-middle text-center text-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($kategori as $f) { ?>
                                                    <tr>
                                                        <td class="align-middle text-center text-sm"><?= $no++; ?></td>
                                                        <td class="align-middle text-center text-sm"><?= $f->nama_kategori ?></td>
                                                        <td class="align-middle text-center text-sm">
                                                            <a class="btn btn-warning" href="<?= base_url() ?>backend/kategori/edit/<?php echo $f->id_kategori; ?>"><i class="fa fa-edit"></i>Edit</a>
                                                            <a class="btn btn-danger" onClick="javascript: return confirm('Please confirm deletion');" href="<?= base_url() ?>backend/kategori/delete/<?php echo $f->id_kategori; ?>"><i class="fa fa-trash"></i>Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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