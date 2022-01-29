
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
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">AKSI</th>
                    
                </tr>
            </thead>
                
                <?php foreach ($data as $data) : ?>
            <tbody>
                <tr>
                    <td><?= $data["nama"]; ?></td>
                    <td><?= $data["nip"]; ?></td>
                
                    <td>
                        <a href="<?= base_url('Admin/delete_akun/'.$data["nip"])?>">
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </div>
    </div>
</div>