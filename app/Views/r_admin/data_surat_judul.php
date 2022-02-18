<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA SURAT PENGAJUAN JUDUL</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
        
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">npm</th>  
                    <th scope="col">nama</th>
                    <th scope="col">AKSI</th>
                    
                </tr>
            </thead>
                
                <?php foreach ($data as $data) : ?>
            <tbody>
                <tr>
                    
                    <td><?= $data['no_surat']; ?></td>
                    <td><?= $data['npm']; ?></td>
                    
                    <td><?= $data['nama']; ?></td>
                
                    <td class="d-flex justify-content-center">
                        <a href="<?= base_url('Cetakan/surat_pengajuan_judul/'.$data["npm"])?>"><button class="btn btn-success btn-sm">CETAK</button></a>
                        
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>   

        </div>
    </div>
</div>