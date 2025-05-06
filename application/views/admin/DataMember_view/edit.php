<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="container-fluid py-0">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Edit Data Member</h6>
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
                                    <a class="btn btn-secondary" href="<?= base_url('backend/member') ?>">Kembali</a>
                                    <form role="form" action="<?php echo base_url() ?>backend/Member/updateMember" method="post" id="editMember" role="form">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Nama Lengkap &nbsp;&nbsp;:</label>
                                                        <label><input type="text" class="form-control" id="nama_member" name="nama_member" value="<?php echo $datas->nama_member; ?>" placeholder="Nama Member"></label>
                                                        <input type="hidden" value="<?php echo $datas->id_user; ?>" name="id" id="id" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Username &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label><input type="text" class="form-control" id="username" name="username" value="<?php echo $datas->username; ?>" placeholder="Username"></label>
                                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Masukan Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label><input type="email" class="form-control" id="email" name="email" value="<?php echo $datas->email; ?>" placeholder="Masukan Email"></label>
                                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="jkelamin">Jenis Kelamin &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label>
                                                            <select name="jenis_kelamin" class="form-control" autofocus>
                                                                <option value="Laki-laki" <?= ($datas->gender == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                                                                <option value="Perempuan" <?= ($datas->gender == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                                                            </select>
                                                        </label>
                                                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Alamat">Masukan Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label><input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $datas->alamat; ?>" placeholder="Masukan Alamat"></label>
                                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="nhp">Masukan No HP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label><input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $datas->no_hp; ?>" placeholder="Masukan No HP"></label>
                                                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label><input type="password" class="form-control" id="password" name="password" placeholder="Password Member"></label>
                                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
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