<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA MAHASISWA YANG MENGAJUKAN JUDUL</h6>
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
                    <th scope="col">NPM</th>
                    <th scope="col">judul 1</th>
                    <th scope="col">judul 2</th>
                    <th scope="col">dosen pembimbing 1</th>
                    <th scope="col">dosen pembimbing 2</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                <tr>
                
                    <td><?= $data['npm']; ?></td>
                    <td><?= $data['judul1']; ?></td>
                    <td><?= $data['judul2']; ?></td>
                    <td><?= $data['dospem1']; ?></td>
                    <td><?= $data['dospem2']; ?></td>
                    <td><a href="<?= base_url('Admin/terima_judul/'.$data["npm"])?>"><button class="btn btn-success">TERIMA</button></a></td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>            

        </div>
    </div>
</div>