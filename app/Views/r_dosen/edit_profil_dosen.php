<div class="container">
    <br />

    <center><h4>Ubah Data Profil</h4></center>
    <div class="kotak-form">
        <?php foreach ($data as $data) : ?>
        <form action="<?=base_url('Dosen/edit_profil/'.$data->nip)?>" method="post">
            <label for="nip">NIP</label>
            <input type="text" name="nip" value="<?=$data->nip?>" class="form_text" required><br />
            
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="<?=$data->nama?>" class="form_text" required><br />
            <div class="row">
                <a href="<?=base_url('Dosen/profil')?>" class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="submit">
                    <i class="fa fa-file-import"></i> Ganti
                </button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
    <br />
</div>