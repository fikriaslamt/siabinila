
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_permohonan_cuti')?>" method="post">
        <label for="npm">NPM :</label>        
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">

        <label for="nama">Nama :</label>
        <input type="text" name="nama" class="form_text" placeholder="Masukan Nama">

        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" class="form_text" placeholder="Alamat">

        <label for="nomor">No. Telepon/HP :</label>
        <input type="number" name="nomor" class="form_text" placeholder="No. Telepon/HP">

        <label for="tanggal">Tanggal : (contoh : 1 Januari 2022)</label> 
        <input type="text" name="tanggal" class="form_text" placeholder="tanggal">

        <label for="cuti">Cuti Semester (contoh : Ganjil TA 2021/2022) :</label>
        <input type="text" name="cuti" class="form_text" placeholder="Cuti Semester">      

        <label for="strata">Strata (D-3/S-1/S-2) :</label>
        <input type="text" name="strata" class="form_text" placeholder="strata">      
        
        <label for="lama">Lama Cuti (Semester) :</label>
        <input type="number" name="lama" class="form_text" placeholder="Lama Cuti">     

        <label for="alasan">Alasan Cuti :</label>
        <input type="text" name="alasan" class="form_text" placeholder="Alasan Cuti">   

        <label for="orangtua">Orang Tua/Wali :</label>
        <input type="text" name="orangtua" class="form_text" placeholder="Orang Tua/Wali">

        <label for="dospem">
            Dosen Pembimbing Akademik :</label>
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
