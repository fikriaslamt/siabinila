
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_pindah_studi_internal')?>" method="post">
        <label for="npm">NPM :</label>        
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" class="form_text" placeholder="Masukan Nama">


        <label for="ttl">Tempat/Tgl. Lahir :</label>
        <input type="text" name="ttl" class="form_text" placeholder="Tempat/Tgl. Lahir">

        <label for="jk">Jenis Kelamin :</label>
        <input type="text" name="jk" class="form_text" placeholder="Jenis Kelamin">

        
        <label for="agama">Agama :</label>
        <input type="text" name="agama" class="form_text" placeholder="Agama">

        <label for="alamat">Alamat Lengkap :</label>
        <input type="text" name="alamat" class="form_text" placeholder="Masukan Alamat Lengkap">

        <label for="npm_lama">NPM Lama:</label>        
        <input type="number" name="npm_lama" class="form_text" placeholder="Masukan npm lama">

        <label for="semester">Semester:</label>        
        <input type="number" name="semester" class="form_text" placeholder="Semester Saat ini">

        <label for="nomor">No. Telepon/HP :</label>
        <input type="text" name="nomor" class="form_text" placeholder="No. Telepon/HP">

        <label for="prodi_tujuan">Program Studi Tujuan : </label>
        <input type="text" name="prodi_tujuan" class="form_text" placeholder="Program Studi Tujuan">

        <label for="fk_tujuan">Fakultas Tujuan : </label>
        <input type="text" name="fk_tujuan" class="form_text" placeholder="Fakultas Tujuan">
      
        <label for="strata"> Strata (S1/S2/D3) :</label>
        <input type="text" name="strata" class="form_text" placeholder="Strata">

   


       
        <label for="alasan"> Alasan Pindah Program Studi : </label>
        <input type="text" name="alasan" class="form_text" placeholder="Alasan Pindah Program Studi">
        
        <label for="ortu">Orang Tua/Wali :</label>
        <input type="text" name="ortu" class="form_text" placeholder="Orang Tua/Wali">

        <label for="dospa">
            Dosen Pembimbing Akademik :</label>
        <select name="dospa" class="form_text" id="dospa" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn_pa) : ?>
            <option value="<?= $dsn_pa["nama"]?>"><?= $dsn_pa["nama"]?></option>
            <?php endforeach;?>
        </select>
  
        <br>
        <label for="tanggal">Tanggal : (contoh : 1 Januari 2022)</label> 
        <input type="text" name="tanggal" class="form_text" placeholder="tanggal"
        
   
        
        <div class="row">
        <a href="<?=base_url()?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> CETAK
        </button>
        </div>    
                
    </form>
</div>
</div>
