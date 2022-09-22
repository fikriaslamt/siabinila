
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Cetakan/surat_studi_lapangan')?>" method="post">
        <label for="npm1">NPM Anggota 1:</label>        
        <input type="number" name="npm1" class="form_text" placeholder="Masukan npm">
        <label for="mhs1">Nama Anggota 1 :</label>
        <input type="text" name="mhs1" class="form_text" placeholder="Masukan Nama">

        <label for="npm2">NPM Anggota 2:</label>        
        <input type="number" name="npm2" class="form_text" placeholder="Masukan npm">
        <label for="mhs2">Nama Anggota 2 :</label>
        <input type="text" name="mhs2" class="form_text" placeholder="Masukan Nama">

        <label for="npm3">NPM Anggota 3:</label>        
        <input type="number" name="npm3" class="form_text" placeholder="Masukan npm">
        <label for="mhs3">Nama Anggota 3 :</label>
        <input type="text" name="mhs3" class="form_text" placeholder="Masukan Nama">

        <label for="npm4">NPM Anggota 4:</label>        
        <input type="number" name="npm4" class="form_text" placeholder="Masukan npm">
        <label for="mhs4">Nama Anggota 4 :</label>
        <input type="text" name="mhs4" class="form_text" placeholder="Masukan Nama">
        <br>
        <label for="perusahaan">Nama Perusahaan :</label>
        <input type="text" name="perusahaan" class="form_text" placeholder="Nama Perusahaan">

        <label for="mk">Mata Kuliah :</label>
        <input type="text" name="mk" class="form_text" placeholder="Mata Kuliah">
        <br>
       
        <label for="tgl_awal">Tanggal Mulai Studi : (contoh : 1 Januari 2022)</label>
        <input type="text" name="tgl_awal" class="form_text" placeholder="Tanggal">
        <label for="tgl_akhir">Tanggal Selesai Studi : (contoh : 1 Januari 2022)</label>
        <input type="text" name="tgl_akhir" class="form_text" placeholder="Tanggal">

        <br>
        <label for="dosen">
        Dosen Pengampu Mata Kuliah :</label>
        <select name="dosen" class="form_text" id="dosen" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn_pa) : ?>
            <option value="<?= $dsn_pa["nama"]?>"><?= $dsn_pa["nama"]?></option>
            <?php endforeach;?>
        </select>
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
