<?php
$col_jk = array_column($mhs, 'jenis_kelamin');
if (!empty(array_count_values($col_jk)['Laki-laki'])){
    $j_laki = array_count_values($col_jk)['Laki-laki'];
} else { $j_laki = 0; }
if (!empty(array_count_values($col_jk)['Perempuan'])){
    $j_prem = array_count_values($col_jk)['Perempuan'];
} else { $j_prem = 0; }
if (!empty(array_count_values($col_jk)['Lainnya'])){
    $j_lain = array_count_values($col_jk)['Lainnya'];
} else { $j_lain = 0; }

$col_stats = array_column($dat_skrip, 'status');
$j_usul = 0;
if (!empty(array_count_values($col_stats)['Judul Disetujui'])){
    $j_usul = array_count_values($col_stats)['Judul Disetujui'];
}
if (!empty(array_count_values($col_stats)['Mengajukan Seminar Usul'])){
    $j_usul += array_count_values($col_stats)['Mengajukan Seminar Usul'];
}
$j_hasil = 0;
if (!empty(array_count_values($col_stats)['Seminar Usul Disetujui'])){
    $j_hasil = array_count_values($col_stats)['Seminar Usul Disetujui'];
}
if (!empty(array_count_values($col_stats)['Mengajukan Seminar Hasil'])){
    $j_hasil += array_count_values($col_stats)['Mengajukan Seminar Hasil'];
}
$j_kompre = 0;
if (!empty(array_count_values($col_stats)['Seminar Hasil Disetujui'])){
    $j_kompre = array_count_values($col_stats)['Seminar Usul Disetujui'];
}
if (!empty(array_count_values($col_stats)['Mengajukan Ujian Skripsi'])){
    $j_kompre += array_count_values($col_stats)['Mengajukan Ujian Skripsi'];
}
$j_lulus = 0;
if (!empty(array_count_values($col_stats)['Telah Lulus Skripsi'])){
    $j_lulus = array_count_values($col_stats)['Telah Lulus Skripsi'];
}


?>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Mahasiswa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($mhs)?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Sedang Skripsi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($dat_skrip)?></div>
                    </div>
                    <div class="col-auto">
                        <i class="far fa-file-alt fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Jumlah Dosen
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=count($dosen)?></div>
                            </div>
                            <!-- <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chalkboard-teacher fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pengajuan Akun</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($dat_regist)?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hand-paper fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row"><!-- Content Row -->

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> Statistik Skripsi</h6>
            <div style="color:#444"><i class="fas fa-users"></i> <?=count($dat_skrip)?> Mahasiswa</div>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <h4 class="small font-weight-bold">Progres Usul : <?=$j_usul?>
                <span class="float-right"><?= round(($j_usul/count($dat_skrip))*100) ?>%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: <?= ($j_usul/count($dat_skrip))*100?>%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <h4 class="small font-weight-bold">Progres Hasil : <?=$j_hasil?>
                <span class="float-right"><?= round(($j_hasil/count($dat_skrip))*100) ?>%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: <?= ($j_hasil/count($dat_skrip))*100?>%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Progres Kompre : <?=$j_kompre?>
                <span class="float-right"><?= round(($j_kompre/count($dat_skrip))*100) ?>%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: <?= ($j_kompre/count($dat_skrip))*100?>%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Selesai Skripsi (Belum Wisuda) : <?=$j_lulus?>
                <span class="float-right"><?= round(($j_lulus/count($dat_skrip))*100) ?>%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: <?= ($j_lulus/count($dat_skrip))*100?>%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">Pengajuan Judul Skripsi</div>
                <div class="col-sm-6">: <?=count($dat_pejudul)?> Mahasiswa Mengajukan</div>
            </div>
            <div class="row">
                <div class="col-sm-6">Pengajuan Penguji Seminar</div>
                <div class="col-sm-6">: <?=count($dat_penguji)?> Mahasiswa Mengajukan</div>
            </div>
        </div>
    </div>
</div>


<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-venus-mars"></i> Perbandingan Gender</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        
            <div class="chart-pie pt-4 pb-2">
                
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Laki-laki: 
                    <a id="dom-pria" style=""><?= htmlspecialchars($j_laki)?></a>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color:#ff5d8f"></i> Perempuan:
                    <a id="dom-wanita" style=""><?= htmlspecialchars($j_prem)?></a>
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color:#999"></i> Lainnya:
                    <a id="dom-lain" style=""><?= htmlspecialchars($j_lain)?></a>
                </span>
                
            </div>
        </div>
    </div>
</div>


</div><!-- Content Row -->