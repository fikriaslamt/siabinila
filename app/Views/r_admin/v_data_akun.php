<div class="container-top" style="min-height: 10px!important; text-align: right; box-shadow:none">
    <button style="background-color: #eb211a"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>">Logout &rarr;</a></button><br/>
</div>



<H2><a >DATA AKUN YANG TERDAFTAR</H2>

<a href="<?= base_url('Admin/form_Add_akun_dosen')?>"><button>TAMBAH AKUN DOSEN</button></a>
<div class="clas mx-auto">
<table>
        <thead class="thead-light">
            <tr>
                <th scope="col">nama</th>
                <th scope="col">user</th>
                <th scope="col">role</th>
                <th scope="col">AKSI</th>
                
            </tr>
        </thead>
            
            <?php foreach ($data as $data) : ?>
        <tbody>
            <tr>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["user"]; ?></td>
                <td><?= $data["role"]; ?></td>
               
                
               
                <td>
                    <a href="<?= base_url('Admin/delete_akun/'.$data["user"])?>">
                    <button>DELETE</button>
                </a></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>