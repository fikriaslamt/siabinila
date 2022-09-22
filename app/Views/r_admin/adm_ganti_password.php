<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12">
        <div class="card shadow">
            <!-- Card Body -->
            <div class="card-body table-responsive">

                <form action="<?= base_url('LoginAdmin/ubah_password')?>" method="POST">

                    <?php if (session()->getFlashdata('notif')) { ?>
                    <div class="alert alert-primary">
                        <?php echo session()->getFlashdata('notif') ?>
                    </div>
                    <?php } ?>
                    
                    <label for="pass_lama">Password Saat Ini</label>
                    <div class="input-group form-group">
                        <input type="password" name="pass_lama" class="form-control" id="pass_lama" required />
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-eye" id="pass_lama_toggle"></i></span>
                        </div>
                    </div>
                    <label for="pass_baru">Password Baru</label>
                    <div class="input-group form-group">
                        <input type="password" name="pass_baru" class="form-control" id="pass_baru" required />
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-eye" id="pass_baru_toggle"></i></span>
                        </div>
                    </div>
                    <label for="pass_konfir">
                        Konfirmasi Password Baru</label>
                    <div class="input-group">
                        <input type="password" name="pass_konfir" class="form-control" id="pass_konfir" required />
                    </div>
                    <br />

                    <input type="submit" name="register" class="btn btn-primary" value="Ubah Password" />
                </form>

            </div>
        </div>
    </div>
</div>

<script>
const pass_lama_toggle = document.querySelector('#pass_lama_toggle');
const pass_lama = document.querySelector('#pass_lama');

const pass_baru_toggle = document.querySelector('#pass_baru_toggle');
const pass_baru = document.querySelector('#pass_baru');

pass_lama_toggle.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = pass_lama.getAttribute('type') === 'password' ? 'text' : 'password';
    pass_lama.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
pass_baru_toggle.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = pass_baru.getAttribute('type') === 'password' ? 'text' : 'password';
    pass_baru.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>