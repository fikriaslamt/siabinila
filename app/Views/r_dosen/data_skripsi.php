<div class="container-top">
    <div class="row">
  <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>     
</div>
</div>

<div class="container">
    <H2 style="text-align: center; margin:15px;">Data Mahasiswa Bimbingan Skripsi</H2>
    <div class="h-scroll-l dosen">
        <table>
            <thead>
                <tr>
                    <th scope="col">NPM / Nama</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Dosen Pembimbing 1</th>
                    <th scope="col">Dosen Pembimbing 2</th>
                    <th scope="col">Status <hr style="margin: 5px"> Tanggal</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                <tr>
                    <td><?= $data["npm"]; ?> <br><br> <?= $data["nama"]; ?></td>
                    <td><?= $data["judul"]; ?></td>
                    <td><?= $data["dospem1"]; ?></td>
                    <td><?= $data["dospem2"] ? $data["dospem2"]: "-"; ?></td>
                    <td><?= $data["status"]; ?> <hr style="margin: 5px"> <?= $data["date"]; ?></td>
                    <td>
                        <a href="<?= base_url('Dosen/detail_skripsi/'.$data["npm"])?>">
                        <button class="btn btn-primary btn-sm">Detail</button>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
