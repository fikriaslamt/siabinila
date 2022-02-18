<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA MAHASISWA YANG MENGAJUKAN UJIAN KOMPREHENSIF</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">npm</th>
                    <th scope="col">judul</th>
                    
                    <th scope="col">dosen pembimbing 1</th>
                    <th scope="col">dosen pembimbing 2</th>
                    <th scope="col">AKSI</th>
                    
                </tr>
            </thead>
                
                <?php foreach ($data as $data) : ?>
            <tbody>
                <tr>
                    
                    <td><?= $data['npm']; ?></td>
                    <td><?= $data['judul']; ?></td>
                    
                    <td><?= $data['dospem1']; ?></td>
                    <td><?= $data['dospem2']; ?></td>
                    <td>
                        <a href="<?= base_url('Admin/terima_kompre/'.$data["npm"])?>"><button class="btn btn-success btn-sm">TERIMA</button></a>
                        <a href="<?= base_url('Admin/tolak_kompre/'.$data["npm"])?>"><button class="btn btn-danger btn-sm">TOLAK</button></a>

                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>   

        </div>
    </div>
</div>