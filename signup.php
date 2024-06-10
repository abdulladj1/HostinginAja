<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up Hostingin Aja!</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
	<style>
        h1{
            text-align: center;
            padding: 20px;
        }
        #tengah{
            text-align: center;
            padding: 20px;
        }
        #center_tulisan{
            text-align: center;
            padding: 0px;
        }
		body{
			background: white;
			font-size: 16px;
		}
		.container{
            border-radius: 20px;
			max-width: 540px;
			background: #DEF482;
			padding: 20px;
			margin: 140px auto;
		}
		label{
			display: inline-block;
			width: 100px;
		}
	</style>

	<script src="jquery.js"></script>
	<script>
	$(document).ready(function(){
		$('#username').blur(function(){
			$('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
			var username = $(this).val();

			$.ajax({
				type	: 'POST',
				url 	: 'prosessignup.php',
				data 	: 'username='+username,
				success	: function(data){
					$('#pesan').html(data);
				}
			})

		});
	});
	</script>

</head>
<body>
    <form action="" method="">
        <div class="container">
		<div class="jwForm registrasi">
			<h1>Sign Up Hostingin Aja!</h1>
            <p id="center_tulisan"><b>Personal Data</b></p>
			<p>
				<label for="username">Username</label> 
				<input type="text" id="username">
				<span id="pesan"></span>
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<label for="password">Full Name</label>
				<input type="text" id="fullname">
			</p>
			<p>
				<label for="phone">Phone</label>
				<input type="phone" id="phone">
			</p>
            <p id="center_tulisan"><b>Domicile</b></p>
            <?php include 'koneksisignup.php' ?>
            <div>

		<form action="">
			<div class="form-group">
				<label>Provinsi</label>
				<select class="form-control" name="fakultas" id="fakultas" required>
					<option value=""></option>
					<?php
					$fakultas = mysqli_query($koneksi,"select * from tbl_fakultas");
					while($f = mysqli_fetch_array($fakultas)){
						?>
						<option value="<?php echo $f['fakultas_id'] ?>"><?php echo $f['fakultas_nama']; ?></option>
						<?php
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Kota/Kabupaten</label>
				<select class="form-control" name="jurusan" id="jurusan" required>						
				</select>
			</div>			
			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
		</form>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('#fakultas').change(function() { 
			var fakultas = $(this).val(); 
			$.ajax({
				type: 'POST', 
				url: 'ajax_jurusan.php', 
				data: 'fakultas_id=' + fakultas, 
				success: function(response) { 
					$('#jurusan').html(response); 
				}
			});
		});
 
	</script>
			<p id="tengah">
				<input type="submit" value="Sign Up">
			</p>
		</div>
	</div>
    </form>
	<div id="tengah">
    <p><a class="btn btn-primary btn-lg px-4 gap-3" href="index.php?target=home">Home</a></p>
    </div>
</body>
</html>