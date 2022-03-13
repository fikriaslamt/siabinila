<div class="container-top">
    <div class="row">
        <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<div class="container">
  <center>
    <br/>
  <?php foreach ($data as $datamhs) : ?>
    <img src="../upload/foto/mhs/<?= $datamhs->foto ?>" width="150">
  <form action="<?=base_url('Mahasiswa/edit_foto/'.$datamhs->npm)?>" method="post" enctype="multipart/form-data">
    <input style="display:none;" type="text" name="foto" value="<?=$datamhs->foto?>">
    <input class="form-file" type="file" name="gambarmhs" value="add"><br/>
    <?php if($pesan_err->getError('gambarmhs')!=""){echo $pesan_err->getError('gambarmhs')."<br/>";}?>
    <button type="submit"><i class="fas fa-paste"></i> Ganti Foto</button>
  </form>
  <?php endforeach; ?>
  </center>
<div class="profil">
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
    <th>E-Mail</th>
    <td><?= $data->email; ?></td>
  </tr>
  <tr>
    <th>No. HP</th>
    <td><?= $data->no_hp; ?></td>
  </tr>
  <tr>
    <th>Status</th>
    <td><?= $data->status; ?></td>
  </tr>
  <tr>
    <td colspan="2"><center><a href="<?=base_url("Mahasiswa/form_edit_profil")?>"><i class="fas fa-pen"></i> Edit Profil</a></center></td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
<br/>
</div>