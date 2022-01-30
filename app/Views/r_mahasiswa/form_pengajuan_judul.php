
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Mahasiswa/tambah_pengajuan_judul')?>" method="post">
        <label>
            NPM</label>        
        <input type="number" name="npm" id="npm" class="form_text" value="<?=session()->user?>" placeholder="Masukan npm" readonly>
        <label>
            Nama</label>
        <input type="text" name="nama" class="form_text" value="<?=session()->nama?>" placeholder="nama">
        <label for="Jenis_kelamin">
            Moderator</label>  
        <input type="text" name="moderator" class="form_text" placeholder="Moderator">
        <label for="Jenis_kelamin">
            NPM moderator</label>  
        <input type="number" name="npm_moderator" class="form_text" placeholder="npm moderator">
        <label for="Jenis_kelamin">
            Koordinator Seminar</label>  
        <input type="text" name="koor_seminar" class="form_text" placeholder="Koordinator seminar">
        <label for="Jenis_kelamin">
            NIP Koordinator Seminar</label>  
        <input type="number" name="nip_koor_seminar" class="form_text" placeholder="nip koor seminar">
        <label for="Jenis_kelamin">
            Judul Skripsi 1</label> 
        <input type="text" name="judul1" id="judul1" class="form_text" placeholder="Masukan judul skripsi 1">
        <label for="Jenis_kelamin">
            Judul Skripsi 2</label> 
        <input type="text" name="judul2" id="judul2" class="form_text" placeholder="Masukan judul skripsi 2">
        <label for="dospem1">
            Dosen Pembimbing 1</label>
        <select name="dospem1" class="form_text" id="dospem1" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn1) : ?>
            <option value="<?= $dsn1["nama"]?> "><?= $dsn1["nama"]?></option>
            <?php endforeach;?>
        </select>
        <label for="dospem12">
            Dosen Pembimbing 2</label>
        <select name="dospem2" class="form_text" id="dospem2" required>
            <option value="">- Pilih Dosen -</option>
            <?php foreach ($dosen as $dsn2) : ?>
            <option value="<?= $dsn2["nama"]?> "><?= $dsn2["nama"]?></option>
            <?php endforeach;?>
        </select> 
        
        

        <div class="row">
        <a href="<?=base_url('home')?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> Submit
        </button>
        </div>
    </form>
</div>
</div>
