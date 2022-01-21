
<div class="container">
  <center>
    <br/>
  <?php foreach ($data as $datamhs) : ?>
    <img src="../upload/foto/<?= $datamhs->foto ?>" width="150">
  <form action="<?=base_url('Mahasiswa/edit_foto/'.$datamhs->npm)?>" method="post" enctype="multipart/form-data">
    <input type="file" name="gambarmhs" value="add"><br/>
    <?php if($pesan_err->getError('gambarmhs')!=""){echo $pesan_err->getError('gambarmhs')."<br/>";}?>
    <button type="submit">Ganti Foto</button>
  </form>
  <?php endforeach; ?>
  </center>

<table>
<?php foreach ($data as $data) : ?>
  <tr>
    <th>NPM</th>
    <td><?= $data->npm; ?></td>
  </tr>
  <tr>
    <th>Nama</th>
    <td><?= $data->nama; ?></td>
  </tr>
  <tr>
    <th>Prodi</th>
    <td><?= $data->prodi; ?></td>
  </tr>
  <tr>
    <th>Jenis kelamin</th>
    <td><?= $data->jenis_kelamin; ?></td>
  </tr>
  <tr>
    <th>Angkatan</th>
    <td><?= $data->angkatan; ?></td>
  </tr>
  <tr>
    <th>Status</th>
    <td><?= $data->status; ?></td>
  </tr>
  <tr>
    <td colspan="2"><center><a href="<?=base_url("Mahasiswa/form_edit_profil")?>"><button>Edit Profil</button></a></center></td>
  </tr>
  <?php endforeach; ?>
</table>
<br/><br/>
</div>