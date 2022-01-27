
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Mahasiswa/tambah_pengajuan_judul')?>" method="post">
                
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">
        <input type="text" name="judul1" class="form_text" placeholder="Masukan judul skripsi 1">
        <input type="text" name="judul2" class="form_text" placeholder="Masukan judul skripsi 2">
        <input type="text" name="dospem1" class="form_text" placeholder="Dosen Pembimbing 1"> 
        <input type="text" name="dospem2" class="form_text" placeholder="Dosen Pembimbing 2">
        <div class="row">
        <a href="<?=base_url('home')?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> Submit
        </button>
        </div>
    </form>
</div>
</div>
