<!-- Area Chart -->
<div class="col-xl-12">
    <div class="card shadow">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA REQUEST PEMBUATAN AKUN</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body table-responsive">

        <?php if (session()->getFlashdata('pesan')) { ?>
        <div class="alert alert-success">
        <?php echo session()->getFlashdata('pesan') ?>
        </div>
        <?php } ?> 

    <table class="table table-bordered table-hover">
    <thead>
        <tr>
        <th scope="col">NPM (Username)</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $data) : ?>
        <tr>
        
        <td><?= $data['user']; ?></td>
        <td><?= $data['nama']; ?></td>
    
        <td class="text-align:center;">
            <a data-toggle="modal" data-target="#det<?= $data["user"]?>" class="btn btn-primary btn-sm">DETAIL</a> |
            <a href="<?= base_url('Admin/tambah_akun/'.$data["user"])?>" onclick="javascript:return confirm('Konfirmasi terima pengajuan akun');"><button class="btn btn-success btn-sm">TERIMA</button></a> |
            <a href="#" onclick="javascript:return confirm('Konfirmasi tolak pengajuan akun');"><button class="btn btn-danger btn-sm">TOLAK</button></a> 
        </td>
        <!-- Modal Tambah     -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="det<?= $data["user"]?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Mahasiswa</h4>
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <div class="text-left" style="padding: 15px;">
                    <!-- isi -->
                    <div class="row">
                        <label class="col-sm-4">Nama</label>
                        <div class="col-sm-8">
                        : <?= $data["nama"]; ?>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4">NPM</label>
                        <div class="col-sm-8">
                        : <?= $data["user"]; ?>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4">Jenis Kelamin</label>
                        <div class="col-sm-8">
                        : <?= $data["jenis_kelamin"]; ?>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4">Email</label>
                        <div class="col-sm-8">
                        : <?= $data["email"]; ?>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4">No. HP</label>
                        <div class="col-sm-8">
                        : <?= $data["no_hp"]; ?>
                        </div>
                    </div>
                    <!-- End isi -->
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