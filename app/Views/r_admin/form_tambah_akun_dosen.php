<!-- Area Chart -->
<div class="col-xl-12 col-lg-4">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Akun Dosen</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">

        <div class="kotak_form">
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
                    
                    
                    <input type="submit" name="register" class="btn btn-primary" value="Tambahkan" />

                
                </form>
                
            </div>
        </div>

        </div>
    </div>
</div>