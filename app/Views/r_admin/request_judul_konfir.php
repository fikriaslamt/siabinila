
<div class="row"><!-- Content Row -->

<!-- Area Chart -->
<div class="col-xl-12">
    <div class="card shadow mb-12">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Konfirmasi Judul Skripsi</h6>
            
        </div>
        
        <div class="card-body"><!-- Card Body -->

        <?php if (session()->getFlashdata('error')) { ?>
            <div class="alert alert-warning">
            <?php echo session()->getFlashdata('error') ?>
            </div>
        <?php } ?> 

        <form action="<?= base_url('Admin/terima_judul/'.$data['npm'])?>" method="POST">

            <div class="form-group">
            <label>
                NPM</label>
            <input type="text" name="npm" class="form-control" value="<?=$data['npm']?>" id="inputUsername" placeholder="NPM Kosong" readonly/>
            </div>
            <div class="form-group">
            <label>
                Nama</label>
            <input type="text" name="nama" class="form-control" value="<?=$data['nama']?>" id="Nama" placeholder="Nama Kosong" readonly/>
            </div>
            <div class="form-group">
            <label for="Nama">
                Judul</label>
            <input type="text" name="judul" class="form-control" value="<?=$judul?>" placeholder="Judul Kosong" readonly/>
            </div>
            <div class="form-group">
            <label for="dospem1">
                Dosen Pembimbing 1</label>
            <select name="dospem1" class="form-control" id="dospem1" required>
                <option value="<?=$data['dospem1']?>">- <?=$data['dospem1']?> -</option>
                <?php foreach ($dosen as $dsn1) : ?>
                <option value="<?= $dsn1["nama"]?>"><?= $dsn1["nama"]?></option>
                <?php endforeach;?>
            </select>
            <label for="dospem2">
                Dosen Pembimbing 2</label>
            <select name="dospem2" class="form-control" id="dospem2" required>
                <option value="<?=$data['dospem2']?>">- <?=$data['dospem2']?> -</option>
                <?php foreach ($dosen as $dsn2) : ?>
                <option value="<?= $dsn2["nama"]?>"><?= $dsn2["nama"]?></option>
                <?php endforeach;?>
            </select> 
            <div class="row" style="margin-top:70px">            
            <a href="<?= base_url('/Admin/data_pengajuan_judul')?>" class="btn btn-dark ml-3 mb-4">&larr; Kembali</a>
            <input type="submit" name="register" class="btn btn-success ml-3 mb-4"  value="Terima" />
            </div>
        
        </form>

        </div><!-- Card Body -->
    </div>
</div>
</div><!-- Content Row -->