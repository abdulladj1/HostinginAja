<?php  
require 'cek.php';
if (!isset($_SESSION['username'])) {
    header("Location: tambah_hosting.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>HostinginAja!</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<body>
	<div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="index.php?target=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">Admin HostinginAja!</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="login_out.php" class="nav-link">Log Out</a></li>
				<li class="nav-item"><a href="#" class="nav-link"><?php echo "". $_SESSION['username']; ?></a></li>
            </ul>
        </header>
    </div>
	<div class="container col-md-6 mt-4">
		<h1 align = "center">Paket Hosting HostinginAja!</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Hosting
			</div>
			<div class="card-body">
				<form enctype="multipart/form-data" action="" method="post" role="form">
					<div class="form-group">
						<label>Paket Hosting</label>
						<input type="text" name="nama_hosting" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga_hosting" class="form-control">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="desc_hosting"></textarea>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar_hosting" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">SAVE</button>
				</form>

				<?php
				include('koneksi.php');		
				if (isset($_POST['submit'])) {
					
					$nama = $_POST['nama_hosting'];
					$harga = $_POST['harga_hosting'];
					$deskripsi = $_POST['desc_hosting'];
					$nama_foto1   = $_FILES['gambar_hosting']['name'];
			        $file_tmp1    = $_FILES['gambar_hosting']['tmp_name'];   
			        //untuk acak nama file jadi sebagai angka unik, agar nama file tidak sama
			        $acak1      = rand(1,99999);


			          if($nama_foto1 != "") {
			          	//memberi nama baru pada foto yang diupload
			            $nama_unik1     = $acak1.$nama_foto1;
			            //upload ke folder foto
			            move_uploaded_file($file_tmp1,'foto/'.$nama_unik1);
			          } else {
			            $nama_unik1 = NULL;
			          }
			          
			        $foto = $nama_unik1;	
					$datas = mysqli_query($koneksi, "insert into hosting (nama_hosting,harga_hosting,desc_hosting,gambar_hosting)values('$nama', '$harga', '$deskripsi','$foto')") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil disimpan.');window.location='index_hosting.php';</script>";
				}
				?>
			</div>
		</div>
	</div>
	<footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2023 HostinginAja!</p>
        <!-- Fungsi Date -->
        <?php
        $today = date("l, d F Y - h:i:s a");
        ?> 
        <?=$today?></p>
    </footer>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>