
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_riset_data_skripsi')?>" method="post">
        <label for="npm">NPM :</label>        
        <input type="number" name="npm" class="form_text" placeholder="Masukan npm">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" class="form_text" placeholder="Masukan Nama">

        <br>
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" class="form_text" placeholder="Alamat">

        <label for="judul">Judul Skripsi :</label>
        <input type="text" name="judul" class="form_text" placeholder="Judul Skripsi">
        <br>
    
        <label for="nomor">No. Telp./HP :</label>
        <input type="number" name="nomor" class="form_text" placeholder="No. Telp./HP">

        <label for="perusahaan">Nama Perusahaan :</label>
        <input type="text" name="perusahaan" class="form_text" placeholder="Nama Perusahaan">
        <label for="alamat_perusahaan">Alamat Perusahaan:</label>
        <input type="text" name="alamat_perusahaan" class="form_text" placeholder="Alamat Perusahaan">

        <br>
        <label for="dosen">Dosen Pembimbing I Skripsi, :</label>
        <input type="text" name="dosen" class="form_text" placeholder="Dosen Pembimbing I Skripsi,">
        <label for="nip_dosen">NIP Dosen Pembimbing I Skripsi, :</label>
        <input type="number" name="nip_dosen" class="form_text" placeholder="NIP Dosen Pembimbing I Skripsi,">
        <br>
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
