<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">TABEL DATA MAHASISWA</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        
        <?php if (session()->getFlashdata('pesan')) { ?>
        <div class="alert alert-primary">
        <?php echo session()->getFlashdata('pesan') ?>
        </div>
        <?php } ?> 
        
        <form method="GET" action="<?= base_url('Admin/data_mahasiswa')?>" class="form-group">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" name="cari" placeholder="Cari berdasarkan Nama atau NPM" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <?php if($jumlah != ""): 
                    echo $jumlah
                    ?>
                    Tampilkan <a href="<?= base_url('Admin/data_mahasiswa')?>">semua data</a>
                    <?php endif ?>
                </div>
            </div>
        </form>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">AKSI</th>
                    
                </tr>
            </thead>
                
                <?php foreach ($data as $data) : ?>
            <tbody>
                <tr>
                    <td><?= $data["npm"]; ?></td>
                    <td><?= $data["nama"]; ?></td>
                    <td>
                        <a data-toggle="modal" data-target="#det<?= $data["npm"]?>" class="btn btn-primary btn-sm">Detail</a>
                        <a data-toggle="modal" data-target="#ke<?= $data["npm"]?>" class="btn btn-danger btn-sm">Hapus</a>
                        <!-- Modal Tambah -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ke<?= $data["npm"]?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Hapus</h4>
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    </div>
                                    <div style="padding: 10px;text-align:center;">
                                    Hapus akun dan data mahasiswa bernama <?= $data["nama"]; ?> ?<hr/>
                                    <a href="<?= base_url('Admin/delete_akun_M/'.$data["npm"])?>">
                                    <button class="btn btn-danger">Hapus</button></a>
                                    <button aria-hidden="true" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Modal Tambah -->
                        <!-- Modal Tambah     -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="det<?= $data["npm"]?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <h4 class="modal-title">Detail Mahasiswa</h4>
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    </div>
                                    <div class="text-left" style="padding: 15px;">
                                    <!-- isi -->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                        <img src="../upload/foto/mhs/<?= $data["foto"]; ?>" width="100">
                                        </div>
                                    </div><br/>
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

        <?= $pager->links('mhs','page_custom'); ?>

        </div>
    </div>
</div>