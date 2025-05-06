<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="container-fluid py-0">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Data Pembayaran</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center text-sm">No</th>
                                                    <th class="align-middle text-center text-sm">Id Bayar</th>
                                                    <th class="align-middle text-center text-sm">Bukti</th>
                                                    <th class="align-middle text-center text-sm">Id Sewa</th>
                                                    <th class="align-middle text-center text-sm">Total Bayar</th>
                                                    <th class="align-middle text-center text-sm">Tanggal Bayar</th>
                                                    <th class="align-middle text-center text-sm">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($pembayaran as $f) { ?>
                                                    <tr>
                                                        <td class="align-middle text-center text-sm"><?= $no++; ?></td>
                                                        <td class="align-middle text-center text-sm"><?= $f->id_bayar ?></td>
                                                        <td class="align-middle text-center text-sm"><img src="<?php echo base_url() . '/assets/bukti/' . $f->bukti; ?>" width="80" height="80" alt="Belum Upload"></td>
                                                        <td class="align-middle text-center text-sm"><?= $f->id_sewa ?></td>
                                                        <td class="align-middle text-center text-sm"><?php echo number_format($f->totalbayar); ?></td>
                                                        <td class="align-middle text-center text-sm"><?= $f->tgl_bayar ?></td>
                                                        <td class="align-middle text-center text-sm">
                                                            <?php if ($f->status_bayar == "Terkonfirmasi") {
                                                                echo "Terkonfirmasi"; ?>

                                                            <?php } else if ($f->status_bayar == "Menunggu Konfirmasi") { ?>
                                                                <a class="btn btn-warning" href="<?= base_url() ?>backend/pembayaran/editbayar/<?php echo $f->id_bayar; ?>"><i class="fa fa-edit"></i>Menunggu Konfirmasi</a>

                                                            <?php } else if ($f->status_bayar == "Menunggu Pembayaran") {
                                                                echo "Menunggu Pembayaran"; ?>

                                                            <?php } ?>
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