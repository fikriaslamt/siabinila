
<?php
date_default_timezone_set("Etc/GMT-7");
$jam = ((int)date("H"));
$waktu = "";
if ($jam > 3 and $jam <=9){
	$waktu = "Pagi";
} else if($jam>9 and $jam <=14){
	$waktu = "Siang";
} else if($jam>14 and $jam <=17){
	$waktu = "Sore";
} else { $waktu = "Malam"; }
?>

<div class="container-top" style="min-height: 10px!important; text-align: right; box-shadow:none">
    <button style="background-color: #eb211a"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>">Logout &rarr;</a></button><br/>
</div>

<div class="container">
    <br/>
    
    <h2><?php echo "Selamat ".$waktu.", ".session()->get('nama') ?></h2>
    <br/>
    

    <div class="row">

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">85%</span>
        <span class="count-name">Progress</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
       <i style="" class="fa fa-book-open"></i>
        <span class="count-numbers">2</span>
        <span class="count-name">Jadwal</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-users"></i>
        <span class="count-numbers">1</span>
        <span class="count-name">Bimbingan</span>
      </div>
    </div>
    </div>


</div>