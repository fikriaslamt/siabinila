
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_penghapusan_mk')?>" method="post">
        <label for="npm">NPM :</label>        
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" class="form_text" placeholder="Masukan Nama">
        <label for="dospa">Dosen Pembimbing Akademik :</label>
        <input type="text" name="dospa" class="form_text" placeholder="Dosen Pembimbing Akademik">
        <label for="nip_dospa">NIP Dosen Pembimbing Akademik :</label>
        <input type="number" name="nip_dospa" class="form_text" placeholder="NIP Dosen Pembimbing Akademik">
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
</div>
