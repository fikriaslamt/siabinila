<div class="container-top">
    <div class="row">
        <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<div class="container dosen profil h-scroll-l">
    <table id="dataTable">
    <thead>
        <tr>
            <th scope="col">Formulir Jurusan Ilmu Administrasi Bisnis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="https://docs.google.com/forms/d/1odwwc_KohkKvAXTb9kFLLJUqG9ER8YkPhAqpTc2XOcA/viewform?edit_requested=true"><i class="fas fa-file"></i> 
            Form Permohonan SK Pembimbing Jurusan PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="https://docs.google.com/forms/d/1GzRkyrMOhTIy1yRD184xW5JmINtPuQeBA_oZaRS-l_I/viewform?edit_requested=true"><i class="fas fa-file"></i> 
            Form Permohonan SK Ujian Kompre Jurusan PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="https://docs.google.com/forms/d/1eUWR4UZkqXUlt79DPTPgz_n_dDgEeoJ-8vuVWruQstY/viewform?edit_requested=true"><i class="fas fa-file"></i> 
            Form Masa Studi Mahasiswa Jurusan PS ABI Fisip Unila</a></td>
        </tr>
        <tr>
            <td><a href="https://docs.google.com/forms/d/15dUwLtHHOHG03ZoVUNcXh6KrJuuKzwZmB9t6w84sSFM/viewform?edit_requested=true"><i class="fas fa-file"></i> 
            Form Pendaftaran Seminar</a></td>
        </tr>
        <tr>
            <td><a href="https://docs.google.com/forms/d/1xTSV6RFgUG8bJfQv7qBP_7agHr2LWjLmpIVg3QXUiMY/viewform?edit_requested=true"><i class="fas fa-file"></i> 
            Form Pendaftaran Ujian Kompre</a></td>
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