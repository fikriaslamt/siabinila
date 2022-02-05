<div class="container"><br/>
    
    <center><h2><?=$title?></h2></center>
    <div class="content row">
        <a href="<?=base_url('home')?>"class="back"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <?php if (!empty($pengajuan)): ?>
    <div class="content alert">
    Pengajuan Judul Skripsi Anda Sedang Dalam Peninjauan
    </div>
    <?php endif ?>

    <?php if (empty($pengajuan) && empty($skripsi)): ?>
    <div class="content alert">
    Anda Belum Mengajukan Skripsi
    </div>
    <?php endif ?>

</div>
