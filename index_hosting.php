<?php
require 'cek.php';
if (!isset($_SESSION['username'])) 
{
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HostinginAja!</title>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<style>
	/* CSS untuk navbar */
	.navbar {
      overflow: hidden;
      background-color: #333;
    }

    .navbar a {
      float: left;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .navbar a:hover {
      background-color: #555;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown:hover .dropdown-content {
      display: block;
      opacity: 1;
    }
	</style>
</head>
<body>
	<div class="container">
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
		<a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
			<span class="fs-4">Admin HostinginAja!</span>
		</a>

		<ul class="nav nav-pills">
			<li class="nav-item"><a href="index_domain.php" class="nav-link">Domain</a></li>
			<li class="nav-item"><a href="index_hosting.php" class="nav-link">Hosting</a></li>
			<li class="nav-item"><a href="index_vps.php" class="nav-link">VPS</a></li>
			<li class="nav-item"><a href="submit_login.php" class="nav-link">Addons</a></li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown">
				<?php echo $_SESSION['username']; ?>
			</a>
			<div class="dropdown-content">
				<form action="login_out.php" method="POST">
				<button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
				</form>
			</div>
			</li>
		</ul>
		</header>
	</div>
	<div class="container col-md-6 mt-4">
		<center><h1>Paket Hosting HostinginAja!</h1></center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data Paket Hosting <a href="tambah_hosting.php" class="btn btn-sm btn-primary float-right">ADD</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Paket Hosting</th>
							<th>Harga</th>
							<th>Deskripsi</th>
                            <th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "select * from hosting") or die(mysqli_error($koneksi));
							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama_hosting'];?></td>
						<td>Rp <?= $row['harga_hosting']; ?></td>
						<td><?= $row['desc_hosting']; ?></td>
                        <td>
							<a href="foto/<?= $row['gambar_hosting']; ?>" target="_blank">
							<img src="foto/<?= $row['gambar_hosting']; ?>" style="width: 100px;">
							</a>
						</td>
						<td>
								<a href="edit_hosting.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus_hosting.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
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