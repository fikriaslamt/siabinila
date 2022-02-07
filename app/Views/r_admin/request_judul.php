<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA MAHASISWA YANG MENGAJUKAN JUDUL SKRIPSI</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">NPM</th>
                    <th scope="col">Judul Skripsi 1</th>
                    <th scope="col">Judul Skripsi 2</th>
                    <th scope="col" class="text-center"><i class="fas fa-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                <tr>
                
                    <td><?= $data['npm']; ?></td>
                    <td>
                        <form method='POST' target="_blank" action='<?= base_url('Cetakan/surat_pengajuan_jview/'.$data["npm"])?>'>
                        <input type="hidden" name="judul" value="judul1">
                        <button class="button btn-link" type="submit"><?= $data['judul1']; ?></button>
                        </form>
                    </td>
                    <td>
                        <form method='POST' target="_blank" action='<?= base_url('Cetakan/surat_pengajuan_jview/'.$data["npm"])?>'>
                        <input type="hidden" name="judul" value="judul2">
                        <button class="button btn-link" type="submit"><?= $data['judul2']; ?></button>
                        </form>
                    </td>
                    
                    <td class="d-flex justify-content-center">
                    <form method='POST' action='<?= base_url('Admin/konfirmasi_terima_judul/'.$data["npm"])?>'>
                    <select name="judul">
                    <option value="<?= $data['judul1']; ?>">Judul 1</option>
                    <option value="<?= $data['judul2']; ?>">Judul 2</option>
                    </select>
                    <input type="submit" name="submit" class="btn btn-success btn-sm" value="TERIMA"/>
                    </form>

                        <a data-toggle="modal" data-target="#ke<?= $data["npm"]?>" class="btn btn-danger btn-sm">Tolak</a>
                        <!-- Modal Tambah -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ke<?= $data["npm"]?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Tolak Judul</h4>
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    </div>
                                    <div style="padding: 10px;text-align:center;">
                                    Tolak judul skripsi dari mahasiswa dengan NPM, <?= $data["npm"]; ?> ?<hr/>
                                    <a href="<?= base_url('Admin/tolak_judul/'.$data["npm"])?>">
                                    <button class="btn btn-danger">Tolak</button></a>
                                    <button aria-hidden="true" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Modal Tambah -->
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>            

        </div>
    </div>
</div>