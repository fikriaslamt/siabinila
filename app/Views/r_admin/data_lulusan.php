<?php
$jumlah_mhs = [];
$var_angkatan = [];
$jumlah_bil = [];
$jumlah_nil = [];
foreach($data as $k => $v){
    if(isset($jumlah_mhs[$v['angkatan']])){
        $jumlah_mhs[$v['angkatan']] += 1;
        $jumlah_bil[$v['angkatan']] += 1;
        $jumlah_nil[$v['angkatan']] += $v['waktu_tempuh'];
    }else{
        $jumlah_mhs[$v['angkatan']] = 1;
        $jumlah_bil[$v['angkatan']] = 1;
        $jumlah_nil[$v['angkatan']] = $v['waktu_tempuh'];
        array_push($var_angkatan, $v['angkatan']);
    }
}
//$arrUnique = array_unique(array_column($data, 'angkatan'));
?>

<!-- Area Chart -->
<div class="col-xl-12">
    <div class="card shadow">
        <!-- Card Body -->
        <div class="card-body table-responsive">
            
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Jumlah Lulusan</th>
                    <th scope="col">Waktu Tempuh Rata-Rata</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($var_angkatan as $tahun) : ?>
                    <tr>
                    <th><?= $tahun ?></th>
                    <td><?= $jumlah_mhs[$tahun]." Mahasiswa" ?></td>
                    <td><?= $jumlah_nil[$tahun]/$jumlah_bil[$tahun]." Tahun" ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Area Chart -->
<div class="col-xl-12">
    <div class="card shadow">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA MAHASISWA YANG TELAH LULUS</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body table-responsive">
            
        <table class="table table-bordered table-hover">
            <caption>*Waktu tempuh dihitung dari semester 1 sampai lulus skripsi</caption>
            <thead>
                <tr>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tanggal Lulus</th>
                <th scope="col">Waktu Tempuh</th>
                
                
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                <tr>
                <td><?= $data["npm"]; ?></td>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["email"]; ?></td>
                <td><?= $data["tanggal_lulus"]; ?></td>
                <td><?= $data["waktu_tempuh"]; ?> Tahun</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </div>
    </div>
</div>