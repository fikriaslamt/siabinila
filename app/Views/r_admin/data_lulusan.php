<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA MAHASISWA YANG TELAH LULUS</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Judul Skripsi</th>
                <th scope="col">Tanggal Lulus</th>
                <th scope="col">Waktu Tempuh</th>
                
                
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                <tr>
                
                <td><?= $data["npm"]; ?></td>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["judul"]; ?></td>
                <td><?= $data["date_kompre"]; ?></td>
                <td><?= $data["time_total"]; ?></td>
                    
              
                
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </div>
    </div>
</div>