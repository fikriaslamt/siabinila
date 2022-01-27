<div class="container-top" style="min-height: 10px!important; text-align: right; box-shadow:none">
    <button style="background-color: #eb211a"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>">Logout &rarr;</a></button><br/>
</div>
<H2 style="margin-left:95px"><a href="#">DATA MAHASISWA YANG MENGAJUKAN JUDUL</H2>
<div class="clas mx-auto">
<a href="<?= base_url('Cetak/surat_pengajuan_judul')?>"><button>TES</button></a>
<table class="table table-bordered table-hover">
            <thead>
                <tr>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Judul</th>
                <th scope="col">Dosen Pembimbing 1</th>
                <th scope="col">Dosen Pembimbing 2</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Status</th>
                
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                <tr>
                
                <td><?= $data["npm"]; ?></td>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["judul"]; ?></td>
                <td><?= $data["dospem1"]; ?></td>
                <td><?= $data["dospem2"]; ?></td>
                <td><?= $data["date"]; ?></td>
                <td><?= $data["time"]; ?></td>
                <td><?= $data["status"]; ?></td>
                
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>

</div>