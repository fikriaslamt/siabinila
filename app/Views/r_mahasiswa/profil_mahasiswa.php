
<div class="container">
  <br/>
    <a href="<?=base_url("Mahasiswa/form_edit_profil")?>"><button>EDIT</button></a>
  <br/>
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
  <?php endforeach; ?>
</table>
<br/><br/>
</div>