<div class="container">
    <br />
    <br />

    <center>
        <h3>Ubah Data Profil</h3>
    </center>
    <div class="kotak-form">
        <?php foreach ($data as $data) : ?>
        <form action="<?=base_url('Mahasiswa/edit_profil/'.$data->npm)?>" method="post">
            <input type="text" class="form_text" name="nama" value="<?=$data->nama?>" placeholder="nama" required><br />
            <label for="Jenis_kelamin"><i class="fa fa-user-circle"></i> Jenis Kelamin</label>
            <div class="radio-wrapper">
                <div class="radio-item">
                <label class="form-control" for="rd1"><input type="radio" name="jenis_kelamin" id="rd1" value="Laki-laki" <?= $data->jenis_kelamin == 'Laki-laki' ? "checked" : ""; ?> required/> Laki-laki</label>
                </div>
                <div class="radio-item">
                <label class="form-control" for="rd2"><input type="radio" name="jenis_kelamin" id="rd2" value="Perempuan" <?= $data->jenis_kelamin == 'Perempuan' ? "checked" : ""; ?>/> Perempuan</label>
                </div>
                <div class="radio-item">
                <label class="form-control" for="rd3"><input type="radio" name="jenis_kelamin" id="rd3" value="Lainnya" <?= $data->jenis_kelamin == 'Lainnya' ? "checked" : ""; ?>/> Lainnya</label>
                </div>
            </div>
            <input type="email" class="form_text" name="email" value="<?=$data->email?>" placeholder="email" required><br>
            <input type="text" class="form_text" name="no_hp" value="<?=$data->no_hp?>" placeholder="no_hp" required><br><br>
            <div class="row">
                <a href="<?=base_url('Mahasiswa/profil')?>" class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="submit">
                    <i class="fa fa-file-import"></i> Ganti
                </button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
    <br />
</div>