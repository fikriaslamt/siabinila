
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_pindah_studi')?>" method="post">
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

        <label for="nomor">No. Telepon/HP :</label>
        <input type="text" name="nomor" class="form_text" placeholder="No. Telepon/HP">

        <label for="asal_prodi">Asal Program Studi :</label>
        <input type="text" name="asal_prodi" class="form_text" placeholder="Asal Program Studi">
        <label for="asal_fk">Asal Fakultas :</label>
        <input type="text" name="asal_fk" class="form_text" placeholder="Asal Fakultas">
        <label for="asal_univ">Asal Universitas :</label>
        <input type="text" name="asal_univ" class="form_text" placeholder="Asal Universitas">
        <label for="strata">Strata (S1/S2/D3) :</label>
        <input type="text" name="strata" class="form_text" placeholder="Strata">
        <label for="prodi_tujuan">Program Studi Yang Dituju :</label>
        <input type="text" name="prodi_tujuan" class="form_text" placeholder="PS Yang Dituju">


       
        <label for="alasan"> Alasan Pindah Studi : </label>
        <input type="text" name="alasan" class="form_text" placeholder="Alasan Pindah Studi">
        
        <label for="ortu">Orang Tua/Wali :</label>
        <input type="text" name="ortu" class="form_text" placeholder="Orang Tua/Wali">
  
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
