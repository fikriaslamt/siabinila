<br/><br/>
<div class="container">
<h1 class="tulisan_form">
        Sistem Skripsi
</h1>
<br/><br/>

<div class="kotak_form">
    <h2 class="tulisan_form">
        LOGIN ADMIN
    </h2>
    <div class="card-body">
        <form action="" method="POST">
            
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
            
            
            <input type="submit" name="loginadmin" class="tombol_submit" value="LOGIN" />

           
        </form>
        
    </div>
</div>
</div>