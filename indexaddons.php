<!DOCTYPE html>
<html>
<head>
	<title>AddonsHostinginAja</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="index.php?target=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">HostinginAja!</span>
            </a>

            <ul class="nav nav-pills">
				<li class="nav-item"><a href="index.php?target=home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="index.php?target=domain" class="nav-link">Domain</a></li>
                <li class="nav-item"><a href="index.php?target=hosting" class="nav-link">Hosting</a></li>
                <li class="nav-item"><a href="index.php?target=vps" class="nav-link">VPS</a></li>
                <li class="nav-item"><a href="index.php?target=addons" class="nav-link">Addons</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
				<!-- <li class="nav-item"><a href="#" class="nav-link"><?php require('submitlogin.php'); ?></a></li> -->
            </ul>
        </header>
    </div>
	<div class="container col-md-6 mt-4">
		<center><h1>Addons Layanan HostinginAja!</h1></center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data Addons <a href="tambah.php" class="btn btn-sm btn-primary float-right">ADD</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Addons</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));
							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama'];?></td>
						<td>Rp <?= $row['harga']; ?></td>
						<td><?= $row['deskripsi']; ?></td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
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
	<?php
	?>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>