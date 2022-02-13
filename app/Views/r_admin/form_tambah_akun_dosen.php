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
                <option value="grup 1">grup 1</option>
                <option value="grup 2">grup 2</option>
                <option value="grup 3">grup 3</option>
                <option value="grup 4">grup 4</option>
            </select>
            </div>
            
            <div class="form-group">
            <label for="inputPassword">
                Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Buat Password">
            </div>
            
            <a class="btn btn-dark" href="<?=base_url('Admin/data_dosen')?>">&larr; Kembali</a> <input type="submit" name="register" class="btn btn-primary" value="Tambahkan" />

        
        </form>
                

        </div>
    </div>
</div>