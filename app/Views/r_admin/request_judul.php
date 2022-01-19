
<div class="container-top" style="min-height: 10px!important; text-align: right; box-shadow:none">
    <button style="background-color: #eb211a"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>">Logout &rarr;</a></button><br/>
</div>
<H2 style="margin-left:95px"><a href="#">DATA MAHASISWA YANG MENGAJUKAN JUDUL</H2>
<div class="clas mx-auto">
<table>
        <thead class="thead-light">
            <tr>
                <th scope="col">npm</th>
                <th scope="col">judul 1</th>
                <th scope="col">judul 2</th>
                <th scope="col">dosen pembimbing 1</th>
                <th scope="col">dosen pembimbing 2</th>
                <th scope="col">AKSI</th>
                
            </tr>
        </thead>
            
            <?php foreach ($data as $data) : ?>
        <tbody>
            <tr>
                
                <td><?= $data['npm']; ?></td>
                <td><?= $data['judul1']; ?></td>
                <td><?= $data['judul2']; ?></td>
                <td><?= $data['dospem1']; ?></td>
                <td><?= $data['dospem2']; ?></td>
                <td><a href="<?= base_url('Admin/terima_judul/'.$data["npm"])?>"><button>TERIMA</button></a></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>