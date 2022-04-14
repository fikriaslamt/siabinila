
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<table>
    <thead>
        <tr>
            <th colspan="3">Jadwal Seminar Usul</th>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td><b>Jam</b></td>
            <td><b>Tanggal</b></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jadwal1 as $j1): ?>
        <tr>
            <td><?=$j1["npm"]?> <?=$j1["nama"]?></td>
            <td><?=$j1["jam"]?></td>
            <td><?=$j1["tanggal"]?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th colspan="3">Jadwal Seminar Hasil</th>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td><b>Jam</b></td>
            <td><b>Tanggal</b></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jadwal2 as $j2): ?>
        <tr>
            <td><?=$j2["npm"]?> <?=$j2["nama"]?></td>
            <td><?=$j2["jam"]?></td>
            <td><?=$j2["tanggal"]?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="kotak-form">
    <form action="<?= base_url('Mahasiswa/tambah_pengajuan_hasil/'.session()->user)?>" method="post">
                
        <input type="number" name="npm" class="form_text" value="<?=session()->user?>" placeholder="Masukan npm" readonly required>
        
        <input type="text" name="nama" class="form_text" value="<?=session()->nama?>" placeholder="Masukan Nama" readonly required>
        <label for="judul">
            Judul Skripsi  <a class="btn" id="peubah" style="padding: 3px; margin:5px!important;" href="javascript:void(0);" onClick="ubah()">ubah</a>
        </label>  
        <input type="judul" name="judul" id="judul" class="form_text" value="<?=$skripsi["judul"]?>" readonly required>
        <label for="dospem1">
            Dosen Pembimbing 1
        </label>  
        <input type="text" name="dospem1" class="form_text" value="<?=$skripsi["dospem1"]?>" placeholder="Dosen Pembimbing 1" readonly required>
        <div style="display: <?= $skripsi["dospem2"] == null ? "none" : "visible"?>">
            <label for="dospem2">
                Dosen Pembimbing 2
            </label>  
            <input type="text" name="dospem2" class="form_text" value="<?=$skripsi["dospem2"]?>" readonly required>
        </div>
        <label for="penguji">
            Penguji Utama
        </label>
        <input type="text" name="penguji" class="form_text" value="<?=$skripsi["penguji_u"]?>" readonly required>
        <div style="display: <?= $skripsi["penguji_p"] == null ? "none" : "visible"?>">
            <label for="penguji_p">
                Penguji Dua
            </label>  
            <input type="text" name="penguji_p" class="form_text" value="<?=$skripsi["penguji_p"]?>" readonly required>
        </div>

        <label for="pembahas1">
            Pembahas Mahasiswa I
        </label>  
        <input type="text" name="pembahas1" class="form_text" required>
        <label for="pembahas2">
            Pembahas Mahasiswa II
        </label>  
        <input type="text" name="pembahas2" class="form_text" required>
        <label for="moderator">
            Moderator
        </label>  
        <input type="text" name="moderator" class="form_text" required>

        <label for="judul2">Pilih Tanggal</label> 
        <input type="date" name="tanggal" class="form_text" placeholder="Tanggal" required>
        <label for="judul2">Pilih Jam</label> 
        <input type="time" min="07:30" max="17:00" name="jam" class="form_text" placeholder="Contoh: 13:00" required>
        <input type="checkbox" id="check1" required>
        <label class="form-check-label" for="check1">Saya menyatakan sudah siap seminar hasil</label>
        <br/><br/>
        
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
function ubah() {
    if(document.getElementById('judul').readOnly == true){
        var result = confirm('Perubahan judul harus berdasarkan izin pembimbing, apakah anda yakin ingin mengubah judul skripsi anda?');
        if(result == true){
            document.getElementById('judul').readOnly = false;
            document.getElementById('peubah').hidden = true;
        } 
    }
}

</script>