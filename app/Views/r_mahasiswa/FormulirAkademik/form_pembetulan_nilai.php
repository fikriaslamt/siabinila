
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
        <label for="ta">Tahun Ajaran : (contoh : 2020/2021)</label>
        <input type="number" name="ta" class="form_text" placeholder="Tahun Ajaran">
        <label for="dospa">Dosen Pembimbing Akademik :</label>
        <input type="text" name="dospa" class="form_text" placeholder="Dosen Pembimbing Akademik">
        <label for="nip_dospa">NIP Dosen Pembimbing Akademik :</label>
        <input type="number" name="nip_dospa" class="form_text" placeholder="NIP Dosen Pembimbing Akademik">
        <label for="dospj">Dosen PJ Mata Kuliah :</label>
        <input type="text" name="dospj" class="form_text" placeholder="Dosen PJ Mata Kuliah">
        <label for="nip_dospj">NIP Dosen PJ Mata Kuliah :</label>
        <input type="number" name="nip_dospj" class="form_text" placeholder="NIP Dosen PJ Mata Kuliah">
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
