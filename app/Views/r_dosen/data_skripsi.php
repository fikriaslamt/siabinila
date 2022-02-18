<div class="container">
    <H2 style="text-align: center; margin-top:50px;"><a href="">DATA MAHASISWA YANG SEDANG SKRIPSI</H2>
    <div class="clas mx-auto">
    <table>
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
                    <th scope="col">AKSI</th>

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
</div>
