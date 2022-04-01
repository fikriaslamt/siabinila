<div class="row">    
    <!-- Area Chart -->
    <div class="col-xl-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA MAHASISWA YANG MENGAJUKAN UJIAN KOMPREHENSIF</h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body table-responsive">
                
            <table class="table table-bordered table-hover">
                <thead>
                        <tr>
                            <th scope="col">NPM/Nama</th>
                            <th scope="col">judul</th>
                            <th scope="col">Dosen Terkait</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $data) : ?>
                        <tr>
                            <td><?= $data['npm']; ?><br/><?= $data['nama']; ?></td>
                            <td><?= $data['judul']; ?></td>
                            <td>Pembimbing 1: <?= $data['dospem1']; ?><br/>
                                Pembimbing 2: <?= $data['dospem2']; ?><br/>
                                Penguji Utama: <?= $data['penguji_u']; ?><br/></td>
                            <td><?= $data['tanggal']; ?><br/><br/><?= $data['jam']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>   

            </div>
        </div>
    </div>
<div>