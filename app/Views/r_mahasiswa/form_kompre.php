
<div class="container"><br/>

<form action="<?= base_url('Mahasiswa/tambah')?>" method="post">
            
    <input type="number" name="npm" class="form_text" placeholder="Masukan npm">
    <input type="text" name="judul1" class="form_text" placeholder="Masukan judul skripsi 1">
    <input type="text" name="judul2" class="form_text" placeholder="Masukan judul skripsi 2">
    <input type="text" name="dospem1" class="form_text" placeholder="Dosen Pembimbing 1"> 
    <input type="text" name="dospem2" class="form_text" placeholder="Dosen Pembimbing 2">
    
    <input type="submit" name="submit" class="tombol_submit" value="submit" />
            
</form>
</div>