<div class="container-top">
  <div class="row">
    <a href="<?=base_url('Dosen/data_skripsi')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>     
  </div>
</div>

<div class="container dosen">

    <h3><?=$title?><h3>

    <table class="table table-bordered table-hover mb-5">
    
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