<!-- Area Chart -->
<div class="col-xl-12">
    <div class="card shadow">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA JURUSAN</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body table-responsive">

        <form action="<?= base_url('Admin/add_akun_dosen')?>" method="POST">
            
            <?php if (session()->getFlashdata('error')) { ?>
            <div class="alert alert-primary">
            <?php echo session()->getFlashdata('error') ?>
            </div>
            <?php } ?>
            
            <div class="form-group">
            <label for="inputUsername">
                Jurusan</label>
            <input type="text" name="user" class="form-control" value="<?=$jurusan[0]["jurusan"]?>" id="inputUsername" placeholder="Buat username"/>
            </div>
            <div class="form-group">
            <label for="Nama">
                Kepala Jurusan</label>
            <input type="text" name="nama" class="form-control" value="<?=$jurusan[0]["kajur"]?>" id="Nama" placeholder="Masukan Kepala Jurusan"/>
            </div>
            <div class="form-group">
            <label for="NIP">
                NIP Kepala Jurusan</label>
            <input type="number" name="nip" class="form-control" value="<?=$jurusan[0]["kajur_nip"]?>" id="NIP" placeholder="Masukan Nama Dosen"/>
            </div>
            <br/>
            
            <input type="submit" name="register" class="btn btn-primary" value="Ubah"/>

        
        </form>

        </div>
    </div>
</div>