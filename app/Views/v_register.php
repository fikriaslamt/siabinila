<style>
body{
    background-color: #f2f2f2;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 40' width='80' height='40'%3E%3Cpath fill='%23d5d5d5' fill-opacity='0.4' d='M0 40a19.96 19.96 0 0 1 5.9-14.11 20.17 20.17 0 0 1 19.44-5.2A20 20 0 0 1 20.2 40H0zM65.32.75A20.02 20.02 0 0 1 40.8 25.26 20.02 20.02 0 0 1 65.32.76zM.07 0h20.1l-.08.07A20.02 20.02 0 0 1 .75 5.25 20.08 20.08 0 0 1 .07 0zm1.94 40h2.53l4.26-4.24v-9.78A17.96 17.96 0 0 0 2 40zm5.38 0h9.8a17.98 17.98 0 0 0 6.67-16.42L7.4 40zm3.43-15.42v9.17l11.62-11.59c-3.97-.5-8.08.3-11.62 2.42zm32.86-.78A18 18 0 0 0 63.85 3.63L43.68 23.8zm7.2-19.17v9.15L62.43 2.22c-3.96-.5-8.05.3-11.57 2.4zm-3.49 2.72c-4.1 4.1-5.81 9.69-5.13 15.03l6.61-6.6V6.02c-.51.41-1 .85-1.48 1.33zM17.18 0H7.42L3.64 3.78A18 18 0 0 0 17.18 0zM2.08 0c-.01.8.04 1.58.14 2.37L4.59 0H2.07z'%3E%3C/path%3E%3C/svg%3E");    
}
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

<br/><br/>
<div class="container">
    <h1 class="tulisan_form">SISTEM INFORMASI ADMIN BISNIS</h1>

    <div class="login_form">
        <h2 class="tulisan_form">
            REGISTER
        </h2>
        <div class="card-body">
            <form action="<?= base_url('Login/add_register')?>" method="POST">
                
                <?php if (session()->getFlashdata('error')) { ?>
                <div class="pesan_error">
                <?php echo session()->getFlashdata('error') ?>
                </div>
                <?php } ?>
                
                
                <label for="inputUsername">
                    <i class="fa fa-user"></i> Username (NPM)</label>
                <input type="text" maxlength="10" minlength="10" pattern="\d*"name="user" class="form_text" id="inputUsername" placeholder="Masukkan NPM Anda" required/>
                <small class="text-muted"> *Pastikan username sudah sesuai NPM anda</small><br>
                <label for="inputPassword">
                    <i class="fa fa-key"></i> Buat Password</label>
                <input type="password" minlength="6" name="password" class="form_text"  style="margin-bottom: 2px;" id="inputPassword" placeholder="Masukkan Password" required>
                
                <input type="password" minlength="6" name="konfir-password"class="form_text" id="Konfir" placeholder="Konfirmasi Password" required>
                <small class="text-muted"> *Password minimal 6 digit</small><br>
                <label for="Jenis_kelamin">
                    <i class="fa fa-user-circle"></i> Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form_text" id="Jenis_kelamin" required>
                    <option value="">- Pilih -</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <label for="nama">
                    <i class="fas fa-file-signature"></i> Nama Lengkap</label>
                <input type="text" name="nama" class="form_text" value="<?php echo session()->getFlashdata('admin_username') ?>" id="nama" placeholder="Masukkan Nama Lengkap" required/>
               
                <input type="checkbox" id="check1" required>
                <label class="form-check-label" for="check1">Data yang saya masukkan sudah benar</label>
                <br/><br/>

                <div class="row">
                <a href="<?=base_url('home')?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="submit">
                <i class="fa fa-sign-in-alt"></i> REGISTER
                </button>
                </div>
            
            </form>
            
        </div>
    </div>
</div>