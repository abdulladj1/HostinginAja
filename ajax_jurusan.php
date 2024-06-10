<?php 
include("koneksisignup.php");
$provinsi = $_POST['provinsi_id'];
$tampil=mysqli_query($koneksi,"SELECT * FROM tbl_kota WHERE kota_provinsi='$provinsi'");
$jml=mysqli_num_rows($tampil);
 
if($jml > 0){    
    while($r=mysqli_fetch_array($tampil)){
        ?>
        <option value="<?php echo $r['kota_id'] ?>"><?php echo $r['kota_nama'] ?></option>
        <?php        
    }
}else{
    echo "<option selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option>";
}
 
?>