<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<div class="kotak-form">
    <form action="<?= base_url('Mahasiswa/tambah_pengajuan_judul')?>" method="post" required>
        <label>
            NPM</label>        
        <input type="number" name="npm" id="npm" class="form_text" value="<?=session()->user?>" placeholder="Masukan npm" required>
        <label>
            Nama</label>
        <input type="text" name="nama" class="form_text" value="<?=session()->nama?>" placeholder="nama" required>
        <div class="row">
            <div class="col col-per2">
            <label for="sks">
                SKS yang diselesaikan</label>  
            <input type="number" min="110" name="sks" id="sks" class="form_text" placeholder="Min. 110" required>
            </div>
            <div class="col col-per2">
            <label for="ipk">
                Indek Prestasi Kumulatif</label>  
            <input type="text" name="ipk" id="ipk" class="form_text" placeholder="Misal: 3.5" required>
            </div>
        </div>
        <div class="row">
            <div class="col col-per2">
            <label for="Alamat">
                Alamat</label>  
            <input type="text" name="alamat" id="Alamat"class="form_text" placeholder="Alamat Anda" required>
            </div>
            <div class="col col-per2">
            <label for="telepon">
                No. Telepon</label>  
            <input type="number" name="telepon" id="telepon" class="form_text" placeholder="No. telepon" required>
        </div>
        <label for="konsen">Konsentrasi</label>
        <select name="konsen" class="form_text" id="konsen" required>
            <option value="">- Pilih -</option>
            <option value="Kebijakan Bisnis dan Kewirausahaan">Kebijakan Bisnis dan Kewirausahaan</option>
            <option value="Keuangan Bisnis dan Pasar Modal">Keuangan Bisnis dan Pasar Modal</option>
            <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
            <option value="Manajemen Sumber Daya Manusia dan Organisasi">Manajemen Sumber Daya Manusia dan Organisasi</option>
            <option value="Sistem Informasi Manajemen">Sistem Informasi Manajemen</option>
        </select>
        <label for="judul1">
            Judul Skripsi 1</label> 
        <input type="text" name="judul1" id="judul1" class="form_text" placeholder="Masukan judul skripsi 1" required>
        <label for="isijudul1">
            Permasalahan Pokok Judul 1</label> 
        <textarea type="text" name="judul1_isi" id="isijudul1" rows="20" class="form_text" spellcheck="false" placeholder="Masukan isi judul skripsi 1" required></textarea>
        <label for="dapus1">
            Daftar Pustaka Judul 1</label> 
        <textarea type="text" name="dapus1" id="dapus1" class="form_text" rows="8" spellcheck="false" placeholder="Masukan daftar pustaka judul 1" required></textarea>
        

        <label for="judul2">
            Judul Skripsi 2</label> 
        <input type="text" name="judul2" id="judul1" class="form_text" placeholder="Masukan judul skripsi 2" required>
        <label for="isijudul2">
            Permasalahan Pokok Judul 2</label> 
        <textarea type="text" name="judul2_isi" id="isijudul2" class="form_text" rows="20" spellcheck="false" placeholder="Masukan isi judul skripsi 2" required></textarea>
        <label for="dapus2">
            Daftar Pustaka Judul 2</label> 
        <textarea type="text" name="dapus2" id="isijudul2" class="form_text" rows="8" spellcheck="false" placeholder="Masukan daftar pustaka judul 2" required></textarea>
        
        <label for="dosen_pa">
            Dosen Pembimbing Akademmik </label>
        <select name="dosen_pa" class="form_text" id="dosen_pa" required>
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn_pa) : ?>
            <option value="<?= $dsn_pa["nama"]?>"><?= $dsn_pa["nama"]?></option>
            <?php endforeach;?>
        </select>
        
        <label for="dospem1">
            Permohonan Dosen Pembimbing 1 <span class="text-muted">(opsional)</span></label>
        <select name="dospem1" class="form_text" id="dospem1">
            <option value="">- Pilih Dosen-</option>
            <?php foreach ($dosen as $dsn1) : ?>
            <option value="<?= $dsn1["nama"]?>"><?= $dsn1["nama"]?></option>
            <?php endforeach;?>
        </select>
        <label for="dospem2">
            Permohonan Dosen Pembimbing 2 <span class="text-muted">(opsional)</span></label>
        <select name="dospem2" class="form_text" id="dospem2">
            <option value="">- Pilih Dosen -</option>
            <?php foreach ($dosen as $dsn2) : ?>
            <option value="<?= $dsn2["nama"]?>"><?= $dsn2["nama"]?></option>
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

<link rel="stylesheet" href="<?=base_url('assets/virtual-select/dist/virtual-select.min.css')?>" />
<script src="<?=base_url('assets/virtual-select/dist/virtual-select.min.js')?>"></script>
<script>
function store() {
  var txt = document.getElementById("text-area-first").value;

  var txttostore = '<p>' + txt.replace(/\n/g, "</p>\n<p>") + '</p>';

  console.log(txttostore);
}

VirtualSelect.init({ 
    ele: 'select',
    // options: myOptions, //tambah isi opsinya
    search: true,
    hideClearButton: true,
    // searchGroup: false, // Include group title for searching
    // searchByStartsWith: false, // Search options by startsWith() method 
    maxWidth: '100%',// Maximum width
    //selectAllText: 'Select all',

});
document.querySelector('select').addEventListener('change', function() {
    console.log(this.value);
});
</script>   
