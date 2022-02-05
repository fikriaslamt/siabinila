<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA SURAT PENGAJUAN UJIAN KOMPREHENSIF</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            
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
                        <a href="<?= base_url('Cetakan/surat_pengajuan_kompre/'.$data["no_surat"])?>"><button class="btn btn-success btn-sm">CETAK</button></a>
                        
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>   

        </div>
    </div>
</div>