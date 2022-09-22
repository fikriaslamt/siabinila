<!-- 
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_pembetulan_nilai')?>" method="post">

        <label for="npm">NPM :</label>        
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">

        <label for="nama">Nama :</label>
        <input type="text" name="nama" class="form_text" placeholder="Masukan Nama">

        <label for="semester">Semester :</label>
        <input type="number" name="semester" class="form_text" placeholder="Semester Saat ini">

        <label for="mk">Mata Kuliah :</label>
        <input type="text" name="mk" class="form_text" placeholder="Nama Mata kuliah">

        <label for="ta">Tahun Ajaran : (contoh : 2020/2021)</label>
        <input type="number" name="ta" class="form_text" placeholder="Tahun Ajaran">

        <label for="dospa">
            Dosen Pembimbing Akademik :</label>
        <select name="dospa" class="form_text" id="dospa" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn_pa) : ?>
            <option value="<?= $dsn_pa["nama"]?>"><?= $dsn_pa["nama"]?></option>
            <?php endforeach;?>
        </select>

        <label for="dospj">
        Dosen PJ Mata Kuliah :</label>
        <select name="dospj" class="form_text" id="dospj" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn_pa) : ?>
            <option value="<?= $dsn_pa["nama"]?>"><?= $dsn_pa["nama"]?></option>
            <?php endforeach;?>
        </select>


       

        <label for="tanggal">Tanggal : (contoh : 1 Januari 2022)</label> 
        <input type="text" name="tanggal" class="form_text" placeholder="tanggal">
        
   
        
        <div class="row">
        <a href="<?=base_url()?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> CETAK
        </button>
        </div>    
                
    </form>
</div>
</div> -->

<div class="kotak-form"><center>belum ada data formulir</center></div>
