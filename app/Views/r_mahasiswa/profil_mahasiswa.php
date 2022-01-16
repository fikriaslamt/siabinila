<table>

                    <button>EDIT</button>
<table style="width:100%">
<?php foreach ($data as $data) : ?>
  <tr>
    <th>NPM:</th>
    <td><?= $data['npm']; ?></td>
  </tr>
  <tr>
    <th>Nama:</th>
    <td><?= $data['nama']; ?></td>
  </tr>
  <tr>
    <th>Prodi:</th>
    <td><?= $data['prodi']; ?></td>
  </tr>
  <tr>
    <th>Angkatan:</th>
    <td><?= $data['angkatan']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
            
