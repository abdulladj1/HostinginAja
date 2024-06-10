<!DOCTYPE html>
<html>
<head>
	<title>HostinginAja!</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<body>
	<div class="container">
    <div>
    <h1 class="display-4 fw-bold">Paket Hosting</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                HostinginAja! menyediakan beberapa paket hosting untuk kebutuhan anda!
            </p>
    	</div>
		<?php
require "koneksi.php";
//include_once __DIR__.'/core-php-admin/database/dbconfig.php';
$query = "SELECT * FROM hosting";
$query_run = mysqli_query($koneksi, $query);

if (mysqli_num_rows($query_run) >0){ ?>
<div class="container py-5">
	<div class="row">
	<?php foreach ($query_run as $row){ ?>

        <div class="col-4">
			<!-- Card -->
			<div class="card">
				<!-- Card image -->
				<a href="foto/<?= $row['gambar_hosting']; ?>" target="_blank">
					<img class = "card-img-top" src="foto/<?= $row['gambar_hosting']; ?>";>
				</a>
				<!-- Card content -->
				<div class="card-body">
				<!-- Title -->
  				<h2 class="card-title"><?= $row['nama_hosting'];?></h2>
  				<!-- Text -->
  				<p class="card-text"><?= $row['desc_hosting']; ?></p>
				<div class="card-footer">
					<h4 class="card-title">Rp<?= $row['harga_hosting'];?></h4>
					<a href="form.php"><button type="button" class="btn btn-primary">Beli</button></a>
				</div>
				
				<!-- Button -->

			</div>
		</div>
		<!-- Card -->
 	</div><!-- /col-4 -->
	<?php } ?>     
	</div><!-- /row -->
</div><!-- /container -->
<?php } else {
	echo "No record found";
}
?>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>