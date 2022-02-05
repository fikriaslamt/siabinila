
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Mahasiswa/tambah_pengajuan_kompre')?>" method="post">
                
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">
        <input type="text" name="nama" class="form_text" placeholder="Masukan Nama">
        <input type="text" name="judul" class="form_text" placeholder="Masukan judul skripsi">
        
        <div class="row">
        <a href="<?=base_url('Mahasiswa/skripsi')?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> Submit
        </button>
        </div>    
                
    </form>
</div>
</div>
