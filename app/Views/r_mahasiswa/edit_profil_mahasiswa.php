
<div class="container">
  <br/>
  
  <br/>

  <h4>Ubah Data Profil</h4>
  <?php foreach ($data as $data) : ?>
    <form action="<?=base_url('Mahasiswa/edit_profil/'.$data->npm)?>" method="post">
    <input type="text" name="nama" value="<?=$data->nama?>"><br/>
    <input type="text" name="prodi" value="<?=$data->prodi?>"><br>
    <input type="text" name="jenis_kelamin" value="<?=$data->jenis_kelamin?>"><br/>
    <input type="text" name="angkatan" value="<?=$data->angkatan?>"><br>
    <input type="text" name="status" value="<?=$data->status?>"><br><br>
    <button type="submit">Ubah</button>
    </form>
    <?php endforeach; ?>
<br/><br/>
</div>