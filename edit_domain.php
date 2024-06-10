<?php  
require 'cek.php';
if (!isset($_SESSION['username'])) {
    header("Location: edit_domain.php");
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
		<h1 align = "center">Domain HostinginAja!</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Domain
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');
				$id = $_GET['id']; 
				$data = mysqli_query($koneksi, "select * from domain where id = '$id'");
				$row = mysqli_fetch_assoc($data);
				?>
				<form enctype="multipart/form-data" action="" method="post" role="form">
					<div class="form-group">
						<label>Domain</label>
						<input type="text" name="nama_domain" required="" class="form-control" value="<?= $row['nama_domain']; ?>">
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga_domain" class="form-control" value="<?= $row['harga_domain']; ?>">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="desc_domain"><?= $row['desc_domain']; ?></textarea>
					</div>
					<div class = "form-group"> 
						<label>Foto Sebelumnya</label>
						<br>
						<img src="foto/<?= $row['gambar_domain']; ?>" class="col-3">
						 <input type="hidden" name="gambar_sebelumnya" value="<?= $row['gambar_domain']; ?>" />
					</div>
					<div class = "form-group"> 
						<label>Foto Baru (abaikan jika tidak ingin ganti foto)</label>
						 <input type="file" name="gambar_domain" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">UPDATE</button>
				</form>

				<?php
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama_domain'];
					$harga = $_POST['harga_domain'];
					$deskripsi = $_POST['desc_domain'];
					$nama_foto1   = $_FILES['gambar_domain']['name'];
			        $file_tmp1    = $_FILES['gambar_domain']['tmp_name'];   
			        $acak1      = rand(1,99999);

			        	//cek jika foto baru tidak ada
			          if($nama_foto1 != "") {
			            $nama_unik1     = $acak1.$nama_foto1;
			            move_uploaded_file($file_tmp1,'foto/'.$nama_unik1);
			          } else {
			          	//maka tetap pakai foto lama
			            $nama_unik1 = $_POST['gambar_sebelumnya'];
			          }
			      
			        $foto = $nama_unik1;
					mysqli_query($koneksi, "update domain set nama_domain='$nama', harga_domain='$harga', desc_domain='$deskripsi', gambar_domain='$foto' where id ='$id'") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil diupdate.');window.location='index_domain.php';</script>";
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
		<!-- <?php
			require('cek.php');
			include('kukitambah.php');
		?> -->
    </footer>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>