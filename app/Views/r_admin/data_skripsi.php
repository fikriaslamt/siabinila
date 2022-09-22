<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA SKRIPSI MAHASISWA</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body table-responsive">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="align-middle">NPM / Nama</th>
                            <th scope="col" class="align-middle">Judul</th>
                            <th scope="col" class="align-middle">Dosen Pembimbing 1</th>
                            <th scope="col" class="align-middle">Dosen Pembimbing 2</th>
                            <th scope="col" class="align-middle">Status <hr> Tanggal</th>
                            <th scope="col" class="align-middle">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $data) : ?>
                        <tr>

                            <td><?= $data["npm"]; ?> <br><br> <?= $data["nama"]; ?></td>
                            <td><?= $data["judul"]; ?></td>
                            <td><?= $data["dospem1"]; ?></td>
                            <td><?= $data["dospem2"] ? $data["dospem2"]: "-"; ?></td>
                            <td><?= $data["status"]; ?> <hr> <?= $data["date"]; ?></td>
                            <td class="align-middle">
                                <a href="<?= base_url('Admin/detail_skripsi/'.$data["npm"])?>">
                                    <button class="btn btn-primary btn-sm">Detail</button>
                                </a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>