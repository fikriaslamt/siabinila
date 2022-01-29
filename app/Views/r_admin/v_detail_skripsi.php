<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        
            <table class="table table-bordered table-hover">
         
            <tr>
                <th>Tanggal Mengajukan Judul </th>
                <td><?= $data["date_judul"]; ?></td>
            </tr>
            <tr>
                <th>Tanggal Mengajukan Usul </th>
                <td><?= $data["date_usul"]; ?></td>
            </tr>
            <tr>
                <th>Tanggal Mengajukan Hasil </th>
                <td><?= $data["date_hasil"]; ?></td>
            </tr>
            <tr>
                <th>Tanggal Mengajukan Kompre </th>
                <td><?= $data["date_kompre"]; ?></td>
            </tr>
            <tr>
                <th>Waktu Tempuh Judul - Usul</th>
                <td><?= $data["time_judul_usul"]; ?></td>
            </tr>
            <tr>
                <th>Waktu Tempuh Usul - Hasil</th>
                <td><?= $data["time_usul_hasil"]; ?></td>
            </tr>
            <tr>
                <th>Waktu Tempuh Hasil - Kompre</th>
                <td><?= $data["time_hasil_kompre"]; ?></td>
            </tr>

          
            </table>

        </div>
    </div>
</div>