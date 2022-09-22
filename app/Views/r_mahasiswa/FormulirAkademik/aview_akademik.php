<div class="container-top">
    <div class="row">
        <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<div class="container dosen profil h-scroll-l">
    <table id="dataTable">
    <thead>
        <tr>
            <th scope="col">Formulir Akademik Mahasiswa</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_masih_aktif_kuliah')?>"><i class="fas fa-file"></i> 
            Form Keterangan Masih Aktif Kuliah PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_keterangan_beasiswa')?>"><i class="fas fa-file"></i> 
            Form Keterangan Beasiswa PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_permohonan_cuti_kuliah')?>"><i class="fas fa-file"></i> 
            Form Permohonan Cuti Kuliah PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_studi_terbimbing')?>"><i class="fas fa-file"></i> 
            Form Permohonan Studi Terbimbing PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_pindah_kuliah')?>"><i class="fas fa-file"></i> 
            Form Permohonan Pindah Kuliah PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_perpanjangan_masa_studi')?>"><i class="fas fa-file"></i> 
            Form Permohonan Perpanjangan Masa Studi PS ABI Fisip</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_pengisian_krs_terlambat')?>"><i class="fas fa-file"></i> 
            Form Permohonan Pengisian KRS Terlambat PS ABI Fisip</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_penghapusan_mk')?>"><i class="fas fa-file"></i> 
            Form Permohonan Penghapusan Mata Kuliah PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_pembetulan_nilai')?>"><i class="fas fa-file"></i> 
            Form Permohonan Pembetulan Nilai PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_mengundurkan_diri')?>"><i class="fas fa-file"></i> 
            Form Permohonan Mengundurkan Diri PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_studi_lapangan')?>"><i class="fas fa-file"></i> 
            Form Permohonan Izin Studi Lapangan PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_riset_data_skripsi')?>"><i class="fas fa-file"></i> 
            Form Permohonan Izin Riset & Pengambilan Data Skripsi PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_studi_lanjut_sarjana')?>"><i class="fas fa-file"></i> 
            Form Permohonan Studi Lanjut Dari Diploma ke Sarjana PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_pindah_studi')?>"><i class="fas fa-file"></i> 
            Form Permohonan Pindah Studi ke Unila PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="<?= base_url('Mahasiswa/form_pindah_studi_internal')?>"><i class="fas fa-file"></i> 
            Form Permohonan Pindah Program Studi Internal Unila PS ABI Fisip Unila</a></td>
        </tr>
         <tr>
            <td><a href="<?= base_url('Mahasiswa/form_tidak_sanksi')?>"><i class="fas fa-file"></i> 
            Form Keterangan Tidak Pernah Menerima Sanksi Akademik PS ABI Fisip Unila</a></td>
        </tr>
    </tbody>
    </table>
</div>

<script src="<?= base_url('sbadmin/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/fancytable/dist/fancyTable.min.js')?>"></script>
<script>
$("#dataTable").fancyTable({
  sortColumn: 1, // column number for initial sorting
  sortOrder: 1, // 'desc', 'descending', 'asc', 'ascending', -1 (descending) and 1 (ascending)
  sortable: false,
  pagination: false, // default: false
  searchable: true,
  globalSearch: true,
  inputStyle: "padding: 12px 28px;",
  inputPlaceholder: 'Search Form...',
  //globalSearchExcludeColumns: [2,5] // exclude column 2 & 5
});
</script>