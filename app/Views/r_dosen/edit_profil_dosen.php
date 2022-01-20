
<div class="container">
  <br/>
  
  <br/>

  <h4>Ubah Data Profil</h4>
  <?php foreach ($data as $data) : ?>
    <form action="<?=base_url('Dosen/edit_profil/'.$data->nip)?>" method="post">
    <input type="text" name="nip" value="<?=$data->nip?>"><br/>
    <input type="text" name="nama" value="<?=$data->nama?>"><br/>
    
    
    <button type="submit">Ubah</button>
    </form>
    <?php endforeach; ?>
<br/><br/>
</div>