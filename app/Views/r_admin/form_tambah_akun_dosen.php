<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Akun Dosen</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">

        
        <form action="<?= base_url('Admin/add_akun_dosen')?>" method="POST">
            
            <?php if (session()->getFlashdata('error')) { ?>
            <div class="alert alert-primary">
            <?php echo session()->getFlashdata('error') ?>
            </div>
            <?php } ?>
            
            <div class="form-group">
            <label for="inputUsername">
                Username</label>
            <input type="text" name="user" class="form-control" value="" id="inputUsername" placeholder="Buat username"/>
            </div>
            <div class="form-group">
            <label for="Nama">
                Nama</label>
            <input type="text" name="nama" class="form-control" value="" id="Nama" placeholder="Masukan Nama Dosen"/>
            </div>
            <div class="form-group">
            <label for="NIP">
                NIP</label>
            <input type="number" name="nip" class="form-control" value="" id="NIP" placeholder="Masukan Nama Dosen"/>
            </div>

            <div class="form-group">
            <label for="grup">
                Peer Grup</label>
            <select name="grup" class="form-control" id="grup" required>
                <option value="">- Pilih -</option>
                <option value="Pemasaran dan Perilaku Konsumen">Pemasaran dan Perilaku Konsumen</option>
                <option value="Keuangan Bisnis dan Pasar Modal">Keuangan Bisnis dan Pasar Modal</option>
                <option value="SDM dan Organisasi">SDM dan Organisasi</option>
                <option value="Stratejik, Etika, dan Kewirausahaan">Stratejik, Etika, dan Kewirausahaan</option>
            </select>
            </div>

            <label for="inputPassword">Password</label>
            <div class="input-group">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Buat Password">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-eye" id="togglePassword"></i></span>
                </div>
            </div>
            <br/>
            
            <a class="btn btn-dark" href="<?=base_url('Admin/data_dosen')?>">&larr; Kembali</a> <input type="submit" name="register" class="btn btn-primary" value="Tambahkan" />

        
        </form>
                

        </div>
    </div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#inputPassword');
 
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>