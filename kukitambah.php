<?php
// require('cek.php');
$sepuluhdetik = time() + 300;
setcookie("KunjunganTerakhir", date("G:i:s - m/d/Y"),
$sepuluhdetik);
?>