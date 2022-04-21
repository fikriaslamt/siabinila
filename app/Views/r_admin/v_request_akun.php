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
        <div class="alert alert-primary">
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
    
        <td class="d-flex justify-content-center"><a href="<?= base_url('Admin/tambah_akun/'.$data["user"])?>"><button class="btn btn-success btn-sm">TERIMA</button></a>
        <a href="#"><button class="btn btn-danger btn-sm">TOLAK</button></a></td>

        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

        </div>
    </div>
</div>