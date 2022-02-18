<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA JADWAL SEMINAR USUL</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">npm</th>
                        <th scope="col">judul</th>
                        <th scope="col">Dosen pembimbing</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data1 as $data1) : ?>
                    <tr>
                        <td><?= $data1['npm']; ?></td>
                        <td><?= $data1['judul']; ?></td>
                        <td><?= $data1['dospem1']; ?>, <?= $data1['dospem2']; ?></td>
                        <td><?= $data1['tanggal']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>
    </div>
</div>

<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA JADWAL SEMINAR HASIL</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">npm</th>
                        <th scope="col">judul</th>
                        <th scope="col">Dosen pembimbing</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data2 as $data2) : ?>
                    <tr>
                        <td><?= $data2['npm']; ?></td>
                        <td><?= $data2['judul']; ?></td>
                        <td><?= $data2['dospem1']; ?>, <?= $data2['dospem2']; ?></td>
                        <td><?= $data2['tanggal']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>
    </div>
</div>