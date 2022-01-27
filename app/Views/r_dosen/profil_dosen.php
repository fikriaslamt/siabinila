
<div class="container">
<center>
    <br/>
  <?php foreach ($data as $datads) : ?>
    <img src="../upload/foto/dosen/<?= $datads->foto ?>" width="150">
  <form action="<?=base_url('Dosen/edit_foto/'.$datads->nip)?>" method="post" enctype="multipart/form-data">
    <input style="display:none;" type="text" name="foto" value="<?=$datads->foto?>">
    <input type="file" name="gambar_profil" value="add"><br/>
    <?php if($pesan_err->getError('gambar_profil')!=""){echo $pesan_err->getError('gambar_profil')."<br/>";}?>
    <button type="submit">Ganti Foto</button>
  </form>
  <?php endforeach; ?>
  </center>


    
<table>
<?php foreach ($data as $data) : ?>
  <tr>
    <th>NIP</th>
    <td><?= $data->nip; ?></td>
  </tr>
  <tr>
    <th>Nama</th>
    <td><?= $data->nama; ?></td>
  </tr>

  <tr>
    <td colspan="2"><a href="<?=base_url("Dosen/form_edit_profil")?>"><button>EDIT</button></a></td>
  </tr>
 
  <?php endforeach; ?>
</table>
<br/><br/>
</div>