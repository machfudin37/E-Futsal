<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="container-fluid py-0">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Edit Data Admin</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-4">
                                <div class="body">
                                    <div class="col-md-4">
                                        <?php
                                        $this->load->helper('form');
                                        $error = $this->session->flashdata('error');
                                        if ($error) {
                                        ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <?php echo $this->session->flashdata('error'); ?>
                                            </div>
                                        <?php } ?>
                                        <?php
                                        $success = $this->session->flashdata('success');
                                        if ($success) {
                                        ?>
                                            <div class="alert alert-success alert-dismissable">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                        <?php } ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-secondary" href="<?= base_url('backend/admin') ?>">Kembali</a>
                                    <form role="form" action="<?php echo base_url() ?>backend/Admin/updateAdmin" method="post" id="editAdmin" role="form">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Nama Admin &nbsp;&nbsp;:</label>
                                                        <label><input type="text" class="form-control" value="<?php echo $datas->nama_admin; ?>" id="nama_admin" placeholder="Masukan Nama Admin" name="nama_admin"></label>
                                                        <input type="hidden" value="<?php echo $datas->id_user; ?>" name="ids" id="ids" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                                        <label><input type="text" value="<?php echo $datas->username; ?>" class="form-control" id="username" placeholder="Masukan Username" name="username"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                                        <label><input type="text" class="form-control" id="password" placeholder="Masukan Password" name="password"></label>
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