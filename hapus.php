<?php				
			include 'koneksi.php'; 
			$id = $_GET['id']; 
			$datas = mysqli_query($koneksi, "delete from barang where id ='$id'") or die(mysqli_error($koneksi));
			echo "<script>alert('data berhasil dihapus.');window.location='submit_login.php';</script>";
	?>