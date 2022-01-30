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
                        <i class="fas fa-users fa-2x text-gray-300"></i>
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
                            Mahasiswa Laki-laki</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($mhs_pria) ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-male fa-2x text-gray-300"></i>
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
                            Mahasiswa Perempuan
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= count($mhs_wanita) ?></div>
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
                        <i class="fas fa-female fa-2x text-gray-300"></i>
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
                            Jumlah Dosen</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($dosen)?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row"><!-- Content Row -->

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Statistic Overview</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body row">

        <div class="col-xl-5 ">
            Pengajuan Judul Skripsi
        </div>
        <div class="col-xl-6 ">
            : <?=count($dat_pejudul)?> Pengajuan Judul
        </div>
        <hr>
        <div class="col-xl-5 ">
            Data Skripsi
        </div>
        <div class="col-xl-6 ">
            : <?=count($dat_skrip)?> Sedang Skripsi
        </div>
        <div class="col-xl-5 ">
            Pengajuan Judul Usul
        </div>
        <div class="col-xl-6 ">
            : <?=count($dat_usul)?> Pengajuan Usul
        </div>
        <div class="col-xl-5 ">
            Pengajuan Seminar Hasil
        </div>
        <div class="col-xl-6 ">
            : <?=count($dat_hasil)?> Pengajuan Seminar Hasil
        </div>
        <div class="col-xl-5 ">
            Pengajuan Seminar Kompehensif
        </div>
        <div class="col-xl-6 ">
            : <?=count($dat_kompre)?> Pengajuan Seminar Kompre
        </div>
        <hr>
        <div class="col-xl-5 ">
            Pengajuan Akun
        </div>
        <div class="col-xl-4 ">
            : <?=count($dat_regist)?> Pengajuan Akun
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
            <h6 class="m-0 font-weight-bold text-primary">Perbandingan Gender</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        
            <div class="chart-pie pt-4 pb-2">
                
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Laki-laki: 
                    <a id="dom-pria" style=""><?php 
                    echo htmlspecialchars(count($mhs_pria));?></a>
                </span>

                </span>
                <span class="mr-2">
                    <i class="fas fa-circle" style="color:#ff5d8f"></i> Perempuan:
                    <a id="dom-wanita" style=""><?php 
                    echo htmlspecialchars(count($mhs_wanita));?></a>
                </span>
                
            </div>
        </div>
    </div>
</div>
</div><!-- Content Row -->