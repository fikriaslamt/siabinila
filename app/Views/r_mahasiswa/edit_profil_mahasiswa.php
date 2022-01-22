
<div class="container">
  <br/>
  
  <br/>

  <center><h3>Ubah Data Profil</h3></center>
  <div class="kotak-form">
    <?php foreach ($data as $data) : ?>
      <form action="<?=base_url('Mahasiswa/edit_profil/'.$data->npm)?>" method="post">
      <input type="text" class="form_text"  name="nama" value="<?=$data->nama?>"><br/>
      <input type="text" class="form_text"  name="prodi" value="<?=$data->prodi?>"><br>
      <input type="text" class="form_text"  name="jenis_kelamin" value="<?=$data->jenis_kelamin?>"><br/>
      <input type="text" class="form_text"  name="angkatan" value="<?=$data->angkatan?>"><br>
      <input type="text" class="form_text"  name="status" value="<?=$data->status?>"><br><br>
      <div class="row">
        <a href="<?=base_url('Mahasiswa/profil')?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="submit">
        <i class="fa fa-file-import"></i> Ganti
        </button>
        </div>      
      </form>
    <?php endforeach; ?>
  </div>
<br/><br/>
</div>