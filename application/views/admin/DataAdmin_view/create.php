<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-3">
        <div class="row">
            <div class="container-fluid py-1">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tambah Data Admin</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-4">
                                <div class="body">
                                    <a class="btn btn-secondary" href="<?= base_url('backend/admin') ?>">Kembali</a>
                                    <form role="form" id="addUser" action="<?php echo base_url() ?>backend/admin/addNewAdmin" method="post" role="form">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Nama Admin &nbsp;&nbsp;:</label>
                                                        <label><input type="text" class="form-control required" id="nama_admin" name="nama_admin" placeholder="Nama Admin"></label>
                                                        <?= form_error('nama_admin', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Username &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label><input type="text" class="form-control required" id="username" name="username" placeholder="Username Admin"></label>
                                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="fname">Masukan Password &nbsp; &nbsp; &nbsp; &nbsp;: </label>
                                                        <label><input type="password" class="form-control required" id="password" name="password" placeholder="Password Admin"></label>
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
                </div>
            </div>
        </div>
    </div>
</main>