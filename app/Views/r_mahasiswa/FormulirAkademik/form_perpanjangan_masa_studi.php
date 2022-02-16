
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_perpanjangan_masa_studi')?>" method="post">
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

          

        <label for="strata">Strata (D-3/S-1/S-2) :</label>
        <input type="text" name="strata" class="form_text" placeholder="strata">      
        
        <label for="semester">Tahun Ajaran : (contoh : 2021/2022)</label>
        <input type="text" name="semester" class="form_text" placeholder="Tahun Ajaran ">   

        <label for="ipk">IPK :</label>
        <input type="number" name="ipk" class="form_text" placeholder="IPK ">   

        <label for="sks">Jumlah SKS :</label>
        <input type="number" name="sks" class="form_text" placeholder="Jumlah SK ">   
        

        <label for="orangtua">Orang Tua/Wali :</label>
        <input type="text" name="orangtua" class="form_text" placeholder="Orang Tua/Wali">

        <label for="dospa">Dosen Pembimbing Akademik :</label>
        <input type="text" name="dospa" class="form_text" placeholder="Dosen Pembimbing Akademik">

        <label for="nip_dospa"> NIP Dosen Pembimbing Akademik :</label>
        <input type="number" name="nip_dospa" class="form_text" placeholder=" NIP Dosen Pembimbing Akademik">

        <label for="dospem">Dosen Pembimbing (tugas akhir/skripsi/tesis) :</label>
        <input type="text" name="dospem" class="form_text" placeholder="Dosen Pembimbing (tugas akhir/skripsi/tesis)">

        <label for="nip_dospem"> NIP Dosen Pembimbing (tugas akhir/skripsi/tesis) :</label>
        <input type="number" name="nip_dospem" class="form_text" placeholder=" NIP Dosen Pembimbing (tugas akhir/skripsi/tesis)">

        <br><br><br><br>
        Dengan ini menyatakan bahwa saya akan menyelesaikan skripsi paling lambat <br><br>
        <label for="tgl">Tanggal</label>
        <input type="number" name="tgl" class="form-row" placeholder="tanggal ">   
        <label for="bln">Bulan</label>
        <input type="text" name="bln" class="form-row" placeholder="bulan"> 
        <label for="thn">Tahun</label>
        <input type="number" name="thn" class="form-row" placeholder="tahun"> 
        <br><br>
        apabila setelah tanggal tersebut saya tidak dapat menyelesaikan
        skripsi, maka saya siap dinyatakan putus studi.
        <br><br>
        <br><br>
        <div class="row">
        <a href="<?=base_url()?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> CETAK
        </button>
        </div>    
                
    </form>
</div>
</div>
