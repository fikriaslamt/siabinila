
<div class="col-xl-12 col-lg-4">
    <a href="<?= base_url('Admin/form_Add_akun_dosen')?>"><button class="btn btn-primary">TAMBAH AKUN DOSEN</button></a>
</div><br/>

<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">TABEL DATA DOSEN</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <?php if (session()->getFlashdata('pesan')) { ?>
        <div class="alert alert-primary">
        <?php echo session()->getFlashdata('pesan') ?>
        </div>
        <?php } ?> 

        <form method="GET" action="<?= base_url('Admin/data_dosen')?>" class="form-group">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" name="cari" placeholder="Cari berdasarkan Nama atau NIP" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <?php if($jumlah != ""): 
                    echo $jumlah
                    ?>
                    Tampilkan <a href="<?= base_url('Admin/data_dosen')?>">semua data</a>
                    <?php endif ?>
                </div>
            </div>
        </form>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Peer Grup</th>
                    <th scope="col">Bimbingan Skripsi</th>
                    <th scope="col">AKSI</th>
                    
                </tr>
            </thead>
                
                <?php foreach ($data as $data) : ?>
            <tbody>
                <tr>
                    <td><?= $data["nama"]; ?></td>
                    <td><?= $data["grup"]; ?></td>
                    <td>
                        <?php
                        $jumlah = 0;
                        if(!empty(array_count_values(array_column($skrip, 'dospem1'))[$data["nama"]])){
                            $jumlah = $jumlah + array_count_values(array_column($skrip, 'dospem1'))[$data["nama"]];                          
                        }
                        if(!empty(array_count_values(array_column($skrip, 'dospem2'))[$data["nama"]])){
                            $jumlah = $jumlah + array_count_values(array_column($skrip, 'dospem2'))[$data["nama"]];
                        }
                        echo $jumlah." Bimbingan";
                        ?>
                    </td>
                
                    <td>
                    <a data-toggle="modal" data-target="#det<?= $data["nip"]?>" class="btn btn-primary btn-sm">Detail</a>
                        <a data-toggle="modal" data-target="#ke<?= $data["nip"]?>" class="btn btn-danger btn-sm">Hapus</a>
                        <!-- Modal Detail     -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="det<?= $data["nip"]?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <h4 class="modal-title">Detail Dosen</h4>
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    </div>
                                    <div class="text-left" style="padding: 15px;">
                                    <!-- isi -->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                        <img src="../upload/foto/dosen/<?= $data["foto"]; ?>" width="100">
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <label class="col-sm-4">Nama</label>
                                        <div class="col-sm-8">
                                        : <?= $data["nama"]; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4">NIP</label>
                                        <div class="col-sm-8">
                                        : <?= $data["nip"]; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4">Peer Group</label>
                                        <div class="col-sm-8">
                                        : <?= $data["grup"]; ?>
                                        </div>
                                    </div>
                                    <!-- End isi -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Modal Detail -->
                        <!-- Modal Tambah -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ke<?= $data["nip"]?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Hapus</h4>
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    </div>
                                    <div style="padding: 10px;text-align:center;">
                                    Hapus akun dan data dosen bernama <?= $data["nama"]; ?> ?<hr/>
                                    <a href="<?= base_url('Admin/delete_akun_D/'.$data["nip"])?>">
                                    <button class="btn btn-danger">Hapus</button></a>
                                    <button aria-hidden="true" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Modal Tambah -->
                    </a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('dosen','page_custom'); ?>

        </div>
    </div>
</div>