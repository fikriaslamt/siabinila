<style>
.step-wizard-list{
    background: #fff;
    color: #333;
    list-style-type: none;
    border-radius: 10px 10px 0 0;
    box-shadow: 0 5px 5px rgba(0,0,0,0.1);
    display: flex;
    padding: 20px 0px;
    position: relative;
    z-index: 10;
}
.step-wizard-item{
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive:1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 100px;
    position: relative;
}
.step-wizard-item + .step-wizard-item:after{
    content: "";
    position: absolute;
    left: 0;
    top: 19px;
    background: #21d4fd;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}
.progress-count{
    height: 40px;
    width:40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index:10;
    color: transparent;
}
.progress-count:after{
    content: "";
    height: 40px;
    width: 40px;
    background: #21d4fd;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}
.progress-count:before{
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}
.progress-label{
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}
.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before{
    display: none;
}
.current-item ~ .step-wizard-item .progress-count:after{
    height:10px;
    width:10px;
}
.current-item ~ .step-wizard-item .progress-label{
    opacity: 0.5;
}
.current-item .progress-count:after{
    background: #fff;
    border: 2px solid #21d4fd;
}
.current-item .progress-count{
    color: #21d4fd;
}
</style>
<div class="row">
    
    <a class="position-absolute mr-4" href="<?= base_url('Admin/data_skripsi')?>" style="right: 0; top: 93px;">
        <button class="btn btn-primary">
        <i class="fa fa-arrow-left"></i> Kembali</button>
    </a>
    
    <div class="col-xl-12 col-lg-12">
        
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Pengajuan Judul</span>
            </li>
            <li class="step-wizard-item <?= $data["date_judul"] ? ($data["date_usul"] ? "" :"current-item") : ""; ?> ">
                <span class="progress-count">2</span>
                <span class="progress-label">Seminar Usul</span>
            </li>
            <li class="step-wizard-item <?= $data["date_usul"] ? ($data["date_hasil"] ? "" :"current-item") : ""; ?>">
                <span class="progress-count">3</span>
                <span class="progress-label">Seminar Hasil</span>
            </li>
            <li class="step-wizard-item <?= $data["date_hasil"] ? ($data["date_kompre"] ? "":"current-item") : ""; ?>">
                <span class="progress-count">4</span>
                <span class="progress-label">Kompre</span>
            </li>
        </ul> 
        
        <div class="card shadow mb-12">


            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary">Judul Skripsi: <?= $data["judul"]; ?></h5>
            </div>
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <table class="table table-bordered m-0">
                    <tr>
                        <td>
                            <?= $data["dospem1"] ? '<p class="m-0">Dospem 1: '.$data["dospem1"].'</p>' : ""?>
                            <?= $data["dospem2"] ? '<p class="m-0">Dospem 2: '.$data["dospem2"].'</p>' : ""?>
                        </td>
                        <td>
                            <?= $data["penguji_u"] ? '<p class="m-0">Penguji 1: '.$data["penguji_u"].'</p>' : ""?>
                            <?= $data["penguji_p"] ? '<p class="m-0">Penguji 2: '.$data["penguji_p"].'</p>' : ""?>
                        </td>
                    </tr>
                </table>
                
            </div>
            <!-- Card Body -->
            <div class="card-body table-responsive">

                <table class="table table-bordered table-hover">

                    <tr>
                        <th>Tanggal Diterima Judul </th>
                        <td><?= $data["date_judul"]; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Diterima Usul </th>
                        <td><?= $data["date_usul"] ?? "-"; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Diterima Hasil </th>
                        <td><?= $data["date_hasil"] ?? "-"; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Lulus Kompre </th>
                        <td><?= $data["date_kompre"] ?? "-"; ?></td>
                    </tr>
                    <tr>
                        <th>Waktu Tempuh Judul - Usul</th>
                        <td><?= empty($data["time_judul_usul"]) ? ($data["time_judul_usul"] == "0" ? "0 Hari" : "-") : $data["time_judul_usul"]." Hari"; ?></td>
                    </tr>
                    <tr>
                        <th>Waktu Tempuh Usul - Hasil</th>
                        <td><?= empty($data["time_usul_hasil"]) ? ($data["time_usul_hasil"] == "0" ? "0 Hari" : "-") : $data["time_usul_hasil"]." Hari"; ?></td>
                    </tr>
                    <tr>
                        <th>Waktu Tempuh Hasil - Kompre</th>
                        <td><?= empty($data["time_hasil_kompre"]) ? ($data["time_hasil_kompre"] == "0" ? "0 Hari" : "-") : $data["time_hasil_kompre"]." Hari"; ?></td>
                    </tr>
                     <tr>
                        <th>Total Waktu Tempuh Skripsi</th>
                        <td><?= empty($data["time_total"]) ? ($data["time_total"] == "0" ? "0 Hari" : "-") : $data["time_total"]." Hari"; ?></td>
                    </tr>
                    
                </table>

            </div>
        </div>
    </div>
</div>