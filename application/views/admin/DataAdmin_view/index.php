<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="container-fluid py-0">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Data Admin</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <a class="btn btn-primary" href="<?= base_url() ?>backend/admin/createAdmin">+ Tambah Data</a>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center text-sm">No</th>
                                            <th class="align-middle text-center text-sm">Nama Admin</th>
                                            <th class="align-middle text-center text-sm">Username</th>
                                            <th class="align-middle text-center text-sm">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($admin as $f) { ?>
                                            <tr>
                                                <td class="align-middle text-center text-sm">
                                                    <?= $no++; ?>
                                                </td>
                                                <td class="text-center text-sm"><?= $f->nama_admin ?></td>
                                                <td class="align-middle text-center text-sm"><?php echo $f->username; ?></td>
                                                <td class="align-middle text-center text-sm">
                                                    <a class="btn btn-warning" href="<?= base_url() ?>backend/admin/editAdmin/<?php echo $f->id_user; ?>"><i class="fa fa-edit"></i>Edit</a>
                                                    <a class="btn btn-danger" onClick="javascript: return confirm('Please confirm deletion');" href="<?= base_url() ?>backend/admin/deleteAdmin/<?php echo $f->id_user; ?>"><i class="fa fa-trash"></i>Hapus</a>
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
        </div>
    </div>
</main>