
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Mahasiswa/tambah_pengajuan_judul')?>" method="post">
        <label>
            NPM</label>        
        <input type="number" name="npm" id="npm" class="form_text" value="<?=session()->user?>" placeholder="Masukan npm" >
        <label>
            Nama</label>
        <input type="text" name="nama" class="form_text" value="<?=session()->nama?>" placeholder="nama">
        <label for="sks">
            Beban SKS yang diselesaikan</label>  
        <input type="number" min="140" name="sks" id="sks" class="form_text" placeholder="Alamat">
        <label for="ipk">
            Indek Prestasi Kumulatif</label>  
        <input type="text" name="ipk" id="ipk" class="form_text" placeholder="IPK">
        <label for="Alamat">
            Alamat</label>  
        <input type="text" name="alamat" id="Alamat"class="form_text" placeholder="Alamat Anda">
        <label for="telepon">
            No. Telepon</label>  
        <input type="number" name="telepon" id="telepon" class="form_text" placeholder="No. telepon">
        <label for="judul1">
            Judul Skripsi 1</label> 
        <input type="text" name="judul1" id="judul1" class="form_text" placeholder="Masukan judul skripsi 1">
        <label for="isijudul1">
            Permasalahan Pokok Judul 1</label> 
        <textarea type="text" name="judul1_isi" id="isijudul1" rows="20" class="form_text" spellcheck="false" placeholder="Masukan isi judul skripsi 1"></textarea>
        
        <label for="judul2">
            Judul Skripsi 2</label> 
        <input type="text" name="judul2" id="judul2" class="form_text" placeholder="Masukan judul skripsi 2">
        <label for="isijudul2">
            Permasalahan Pokok Judul 2</label> 
        <textarea type="text" name="judul2_isi" id="isijudul2" class="form_text" rows="20" spellcheck="false" placeholder="Masukan isi judul skripsi 2"></textarea>
        

        <label for="dospem1">
            Dosen Pembimbing 1</label>
        <select name="dospem1" class="form_text" id="dospem1" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn1) : ?>
            <option value="<?= $dsn1["nama"]?> "><?= $dsn1["nama"]?></option>
            <?php endforeach;?>
        </select>
        <label for="dospem2">
            Dosen Pembimbing 2</label>
        <select name="dospem2" class="form_text" id="dospem2" required>
            <option value="">- Pilih Dosen -</option>
            <?php foreach ($dosen as $dsn2) : ?>
            <option value="<?= $dsn2["nama"]?> "><?= $dsn2["nama"]?></option>
            <?php endforeach;?>
        </select> 
        
        

        <div class="row">
        <a href="<?=base_url('Mahasiswa/skripsi')?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> Submit
        </button>
        </div>
    </form>
</div>
</div>

<script>
function store() {
  var txt = document.getElementById("text-area-first").value;

  var txttostore = '<p>' + txt.replace(/\n/g, "</p>\n<p>") + '</p>';

  console.log(txttostore);
}
</script>
