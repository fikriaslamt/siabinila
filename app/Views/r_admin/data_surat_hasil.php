<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA SURAT PENGAJUAN SEMINAR HASIL</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body table-responsive">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <th scope="col"><i class="fas fa-cog"></i> Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $data) : ?>
                        <tr>

                            <td><?= $data['no_surat']; ?></td>
                            <td><?= $data['npm']; ?></td>

                            <td><?= $data['nama']; ?></td>

                            <td class="d-flex justify-content-center">
                                <a href="<?= base_url('Cetakan/surat_pengajuan_hasil/'.$data["npm"])?>"><button
                                        class="btn btn-success btn-sm">CETAK</button></a>

                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>