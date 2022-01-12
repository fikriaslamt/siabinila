<br/><br/>
<div class="container">
<h1 class="tulisan_form">
        TAMBAH AKUN DOSEN
</h1>
<br/><br/>

<div class="kotak_form">
    <h2 class="tulisan_form">
        REGISTER
    </h2>
    <div class="card-body">
        <form action="<?= base_url('Admin/add_akun_dosen')?>" method="POST">
            
            <?php if (session()->getFlashdata('error')) { ?>
            <div class="pesan_error">
            <?php echo session()->getFlashdata('error') ?>
            </div>
            <?php } ?>
            
            
            <label for="inputUsername">
                    Username
            </label>
            <input type="text" name="user" class="form_text" value="<?php echo session()->getFlashdata('admin_username') ?>" id="inputUsername" placeholder="Masukan Username"/>
            
            <label for="inputPassword">
                    Password
            </label>
            <input type="password" name="password" class="form_text" id="inputPassword" placeholder="Masukan Password">
            
            
            <input type="submit" name="register" class="tombol_submit" value="REGISTER" />

           
        </form>
        
    </div>
</div>
</div>