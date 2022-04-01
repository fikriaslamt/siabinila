
<div class="row"><!-- Content Row -->

<!-- Area Chart -->
<div class="col-xl-12">
    <div class="card shadow mb-12">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Konfirmasi Penguji Skripsi</h6>
            
        </div>
        
        <div class="card-body"><!-- Card Body -->

        <?php if (session()->getFlashdata('error')) { ?>
            <div class="alert alert-warning">
            <?php echo session()->getFlashdata('error') ?>
            </div>
        <?php } ?> 

        <form action="<?= base_url('Admin/tambah_penguji/'.$skrip['npm'])?>" method="POST">
            <div class="row">
                <div class="col-sm-3">NPM</div>
                <div class="col-sm-9">: <?= $skrip["npm"] ?></div>

                <div class="col-sm-3">Nama</div>
                <div class="col-sm-9">: <?= $skrip["nama"] ?></div>

                <div class="col-sm-3">Judul Skripsi</div>
                <div class="col-sm-9">: <?= $skrip["judul"] ?></div>

                <div class="col-sm-3">Dosen Pembimbing 1</div>
                <div class="col-sm-9">: <?= $skrip["dospem1"] ?></div>

                <div class="col-sm-3">Dosen Pembimbing 2</div>
                <div class="col-sm-9">: <?= $skrip["dospem2"] == "" ? " - " :  $skrip["dospem2"] ?></div>
            </div><br/>
            
            <div class="form-group">
                <label for="penguji">
                    Penguji Seminar Utama</label>
                <select name="penguji_u" class="form-control" id="penguji" required>
                <option value="">- Pilih -</option>
                    <?php foreach ($dosen as $dsn1) : ?>
                    <option value="<?= $dsn1["nama"]?>"><?= $dsn1["nama"]?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label for="penguji_p">
                    Penguji Seminar Kedua 
                    <small id="passwordHelpBlock" class="form-text text-muted">
                    *Tidak wajib
                    </small> 
                </label> 
                <select name="penguji_p" class="form-control" id="penguji_p">
                <option value="">- Pilih -</option>
                    <?php foreach ($dosen as $dsn2) : ?>
                    <option value="<?= $dsn2["nama"]?>"><?= $dsn2["nama"]?></option>
                    <?php endforeach;?>
                </select>
                
            </div>


            <!-- <div class="form-group">
                <label for="penguji">
                    Penguji Seminar dan Kompre (2, dst..)</label>
                <select name="penguji_p[]" class="form-control" id="penguji" multiple>
                    <?php foreach ($dosen as $dsn2) : ?>
                    <option value="<?= $dsn2["nama"]?>"><?= $dsn2["nama"]?></option>
                    <?php endforeach;?>
                </select>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Tahan tombol Ctrl (windows) atau Command (Mac), untuk memilih beberapa penguji
                </small>
            </div> -->
            <div class="row" style="margin-top:70px">            
            <a href="<?= base_url('/Admin/data_pengajuan_seminar')?>" class="btn btn-dark ml-3 mb-4">&larr; Kembali</a>
            <input type="submit" name="register" class="btn btn-success ml-3 mb-4"  value="Terima" />
            </div>
        
        </form>

        </div><!-- Card Body -->
    </div>
</div>
</div><!-- Content Row -->