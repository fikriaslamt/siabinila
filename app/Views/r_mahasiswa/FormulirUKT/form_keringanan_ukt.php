
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_keringanan_ukt')?>" method="post">
        <label for="npm">NPM :</label>        
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">

        <label for="nama">Nama :</label>
        <input type="text" name="nama" class="form_text" placeholder="Masukan Nama">

        <label for="semester">Semester :</label>
        <input type="number" name="semester" class="form_text" placeholder="Semester Saat ini">

        <label for="tanggal">Tanggal : (contoh : 1 Januari 2022)</label> 
        <input type="text" name="tanggal" class="form_text" placeholder="tanggal">


        <label for="dospem">
        Dosen Pembimbing I Skripsi :</label>
        <select name="dospem" class="form_text" id="dospem" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn_pa) : ?>
            <option value="<?= $dsn_pa["nama"]?>"><?= $dsn_pa["nama"]?></option>
            <?php endforeach;?>
        </select>
   
        
        <div class="row">
        <a href="<?=base_url()?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> CETAK
        </button>
        </div>    
                
    </form>
</div>
</div>
