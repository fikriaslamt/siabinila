<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">TABEL DATA MAHASISWA</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body table-responsive">

                <?php if (session()->getFlashdata('pesan')) { ?>
                <div class="alert alert-primary">
                    <?php echo session()->getFlashdata('pesan') ?>
                </div>
                <?php } ?>

                <table class="table table-bordered table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th style="width: 15px" scope="col">No.</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <th scope="col"><i class="fas fa-user-cog"></i> Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $nomor = 1;
                            foreach ($data as $data) : 
                        ?>
                        <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $data["npm"]; ?></td>
                            <td><?= $data["nama"]; ?></td>
                            <td>
                                <a data-toggle="modal" data-target="#det<?= $data["npm"]?>"
                                    class="btn btn-primary btn-sm">Detail</a>
                                <a data-toggle="modal" data-target="#ke<?= $data["npm"]?>"
                                    class="btn btn-danger btn-sm">Hapus</a>
                                <!-- Modal Tambah -->
                                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
                                    id="ke<?= $data["npm"]?>" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                <button aria-hidden="true" data-dismiss="modal" class="close"
                                                    type="button">×</button>
                                            </div>
                                            <div style="padding: 10px;text-align:center;">
                                                Hapus akun dan data mahasiswa bernama <?= $data["nama"]; ?> ?
                                                <hr />
                                                <a href="<?= base_url('Admin/delete_akun_M/'.$data["npm"])?>">
                                                    <button class="btn btn-danger">Hapus</button></a>
                                                <button aria-hidden="true" data-dismiss="modal"
                                                    class="btn btn-secondary">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Modal Tambah -->
                                <!-- Modal Tambah     -->
                                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
                                    id="det<?= $data["npm"]?>" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Detail Mahasiswa</h4>
                                                <button aria-hidden="true" data-dismiss="modal" class="close"
                                                    type="button">×</button>
                                            </div>
                                            <div class="text-left" style="padding: 15px;">
                                                <!-- isi -->
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <img src="../upload/foto/mhs/<?= $data["foto"]; ?>" width="100">
                                                    </div>
                                                </div><br />
                                                <div class="row">
                                                    <label class="col-sm-4">Nama</label>
                                                    <div class="col-sm-8">
                                                        : <?= $data["nama"]; ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-4">NPM</label>
                                                    <div class="col-sm-8">
                                                        : <?= $data["npm"]; ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-4">Angkatan</label>
                                                    <div class="col-sm-8">
                                                        : <?= $data["angkatan"]; ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-4">Jenis Kelamin</label>
                                                    <div class="col-sm-8">
                                                        : <?= $data["jenis_kelamin"]; ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-4">Email</label>
                                                    <div class="col-sm-8">
                                                        : <?= $data["email"]; ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-4">No. HP</label>
                                                    <div class="col-sm-8">
                                                        : <?= $data["no_hp"]; ?>
                                                    </div>
                                                </div>
                                                <!-- End isi -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Modal Tambah -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>