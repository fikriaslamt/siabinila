
<div class="container-top" style="min-height: 10px!important; text-align: right; box-shadow:none">
    <button style="background-color: #eb211a"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>">Logout &rarr;</a></button><br/>
</div>
<H2><a >DATA REQUEST PEMBUATAN AKUN</H2>
<div class="clas mx-auto">
<table>
        <thead class="thead-light">
            <tr>
                <th scope="col">user</th>
                <th scope="col">password</th>
                <th scope="col">AKSI</th>
                
            </tr>
        </thead>
            
            <?php foreach ($data as $data) : ?>
        <tbody>
            <tr>
                
                <td><?= $data['user']; ?></td>
                <td><?= $data['password']; ?></td>
                <td><a href=""><button>TERIMA</button></a></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>