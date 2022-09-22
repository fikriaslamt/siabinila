<div class="container-top">
    <div class="row">
        <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<div class="container dosen profil h-scroll-l">
    <table id="dataTable">
    <thead>
        <tr>
            <th scope="col">Formulir Kelengkapan Wisuda</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a><i class="fas fa-file"></i> 
            Form Kosong</a></td>
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