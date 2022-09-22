<div class="container">
    <br />
    <br />

    <center>
        <h3>Ubah Password</h3>
    </center>
    
    <div class="kotak-form">
        <form action="<?=base_url('Login/edit_password')?>" method="post">
            
            <?php if (session()->getFlashdata('notif')) { ?>
                <div class="pesan_error">
                <?php echo session()->getFlashdata('notif') ?>
                </div>
                <?php if (session()->getFlashdata('sukses')) { ?>
                <script>
                    setTimeout(function(){
                        window.history.back();       
                    }, 4000);
                 </script>
                 <?php } ?>
            <?php } ?>
                
            <label for="pass_lama">Password Saat Ini</label>
            <div class="row">  
                <input type="password" class="form-password" name="pass_lama" id="pass_lama" required>
                <div class="form-tag"><i class="far fa-eye" id="pass_lama_toggle"></i></div>
            </div>
            <label for="pass_baru">Password Baru</label>
            <div class="row">  
                <input type="password" class="form-password" name="pass_baru" id="pass_baru" required>
                <div class="form-tag"><i class="far fa-eye" id="pass_baru_toggle"></i></div>
            </div>
            <label for="pass_konfir">Konfirmasi Password Baru</label>
            <input type="password" class="form_text" name="pass_konfir" id="pass_konfir" required><br><br>
            
            <div class="row">
                <a href="#" onclick="history.back()" class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="submit">
                    <i class="fa fa-file-import"></i> Ganti
                </button>
            </div>
        </form>
    </div>
    <br />
</div>

<script>
    const pass_lama_toggle = document.querySelector('#pass_lama_toggle');
    const pass_lama = document.querySelector('#pass_lama');
    const pass_baru_toggle = document.querySelector('#pass_baru_toggle');
    const pass_baru = document.querySelector('#pass_baru');
 
    pass_lama_toggle.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = pass_lama.getAttribute('type') === 'password' ? 'text' : 'password';
        pass_lama.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
    pass_baru_toggle.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = pass_baru.getAttribute('type') === 'password' ? 'text' : 'password';
        pass_baru.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>