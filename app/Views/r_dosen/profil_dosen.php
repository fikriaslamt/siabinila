
<div class="container">
  <br/>
    <a href="<?=base_url("Dosen/form_edit_profil")?>"><button>EDIT</button></a>
  <br/>
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
 
  <?php endforeach; ?>
</table>
<br/><br/>
</div>