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

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">AKSI</th>
                    
                </tr>
            </thead>
                
                <?php foreach ($data as $data) : ?>
            <tbody>
                <tr>
                    <td><?= $data["nama"]; ?></td>
                    <td><?= $data["npm"]; ?></td>
                
                    <td>
                        <a href="<?= base_url('Admin/delete_akun_M/'.$data["npm"])?>">
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </div>
    </div>
</div>