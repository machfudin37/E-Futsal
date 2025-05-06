<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="container-fluid py-0">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Data Transaksi Terkini</h6>
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
                                                    <th class="align-middle text-center text-sm">Member</th>
                                                    <th class="align-middle text-center text-sm">Kode</th>
                                                    <th class="align-middle text-center text-sm">Lapangan</th>
                                                    <th class="align-middle text-center text-sm">Status Bayar</th>
                                                    <th class="align-middle text-center text-sm">Total Bayar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($penyewaan as $rows) { ?>
                                                    <tr>
                                                        <td class="align-middle text-center text-sm"><?= $no++ ?></td>
                                                        <td class="align-middle text-center text-sm"> <?= $rows->nama_member ?></td>
                                                        <td class="align-middle text-center text-sm"> <?= $rows->id_sewa ?></td>
                                                        <td class="align-middle text-center text-sm"><?= $rows->nama_lap ?></td>
                                                        <td class="align-middle text-center text-sm"><?= $rows->status_bayar ?></td>
                                                        <td class="align-middle text-center text-sm">Rp.<?= number_format($rows->totalbayar) ?></td>
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
        </div>
    </div>
</main>
<!--   Core JS Files   -->
<script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets/js/material-dashboard.min.js?v=3.0.2') ?>"></script>