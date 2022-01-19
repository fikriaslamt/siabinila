<br/><br/>
<style>
.container, .container-top {
  position: relative;
  min-height:50vmin !important;
  margin: 0 auto;
  margin-top: 20px; margin-bottom: 20px;
  text-align: left;
  box-shadow: none;
  border-radius: 0px;
  overflow: hidden;
  background-color: rgba(0,0,0,0)
}

</style>

<div class="container">
<h1 class="tulisan_form">
        Sistem Informasi Admin Bisnis
</h1>


<div class="login_form">
    <h2 class="tulisan_form">
        LOGIN
    </h2><br/>
    <div class="card-body">
        <form action="" method="POST">
            
            <?php if (session()->getFlashdata('error')) { ?>
            <div class="pesan_error">
            <?php echo session()->getFlashdata('error') ?>
            </div>
            <?php } ?>
            
            
            <label for="inputUsername">
            <i class="fa fa-user">&nbsp;</i>Username
            </label>
            <input type="text" name="user" class="form_text" value="<?php echo session()->getFlashdata('admin_username') ?>" id="inputUsername" placeholder="Masukan Username"/>
            
            <label for="inputPassword">
            <i class="fa fa-key">&nbsp;</i>Password
            </label>
            <input type="password" name="password" class="form_text" id="inputPassword" placeholder="Masukan Password">
            
            
            <input type="submit" name="login" class="tombol_submit" value="LOGIN" />

           
        </form><br/>
        Belum punya akun? <a href="<?= base_url('Login/register')?>">Register</a>
    </div>
</div>
</div>