
<div class="container"><br/>
<center><h2><?=$title?></h2></center>
<table>
    <thead>
        <tr>
            <th colspan="3">Jadwal Seminar Usul</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>Jam</td>
            <td>Tanggal</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jadwal1 as $j1): ?>
        <tr>
            <td><?=$j1["nama"]?></td>
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
            <td>Nama</td>
            <td>Jam</td>
            <td>Tanggal</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jadwal2 as $j2): ?>
        <tr>
            <td><?=$j2["nama"]?></td>
            <td><?=$j2["jam"]?></td>
            <td><?=$j2["tanggal"]?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="kotak-form">
    <form action="<?= base_url('Mahasiswa/tambah_pengajuan_usul/'.session()->user)?>" method="post">
                
        <input type="number" name="npm" class="form_text" value="<?=session()->user?>" placeholder="Masukan npm">
        <input type="text" name="nama" class="form_text" value="<?=session()->nama?>" placeholder="Masukan Nama">
        <label for="judul2">Pilih Tanggal</label> 
        <input type="date" min="<?= date('Y-m-d'); ?>" name="tanggal" class="form_text" value="<?=date("Y-m-d")?>"placeholder="Tanggal">
        <label for="judul2">Pilih Jam</label> 
        <input type="time" min="07:30" max="17:00" name="jam" class="form_text" placeholder="Contoh: 13:00">
        <input type="checkbox" id="check1" required>
        <label class="form-check-label" for="check1">Saya menyatakan sudah siap seminar usul</label>
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
