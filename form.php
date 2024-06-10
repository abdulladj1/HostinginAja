<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostinginAja!</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style/form.css" rel="stylesheet" />
</head>
<body>
    <!-- <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="home.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">HostinginAja!</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="home.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="domain.html" class="nav-link">Domain</a></li>
                <li class="nav-item"><a href="hosting.html" class="nav-link">Hosting</a></li>
                <li class="nav-item"><a href="vps.html" class="nav-link">VPS</a></li>
            </ul>
        </header>
    </div> -->
    <section>
        <div class="container">
              <div class="py-5 text-center">
                <h2>Formulir berlangganan HostinginAja!</h2>
                <p class="lead">Silahkan mengisi form berikut untuk berlangganan layanan dari HostinginAja!</p>
              </div>
        </div>
        <!-- <div class="container">
        <form enctype="multipart/form-data" action="terima.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                <table align="center">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td> : <input type="text" name="nama"</></td>
                    </tr>
                    <tr>
                    <?php include 'koneksisignup.php' ?>
            <div>

		<form action="">
			
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td> : <input type="text" name="nohp" value="+62"</></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : <input type="email" name="email" value="@gmail.com"</></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> : <input type="password" name="password"</></td>
                    </tr>
                    <tr>
                        <td>Promo</td>
                        <td> : <input type="radio" name="promo" value="Ya"/>Ya
                                <input type="radio" name="promo" value="Tidak" checked />Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>Kode Promo</td>
                        <td> : <input type="text" name="kpromo"</></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pesan</td>
                        <td> : <input type="date" name="tanggal"</></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : <textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="3">Domain</td>
                        <td> : <input type="checkbox" name="domain1" value=".com"</> .com</></td>
                    </tr>
                    <tr>
                        <td> : <input type="checkbox" name="domain2" value=".id"</> .id</></td>
                    </tr>
                    <tr>
                        <td> : <input type="checkbox" name="domain3" value=".co.id"</> .co.id</></td>
                    </tr>
                    <tr>
                        <td>Paket Hosting</td>
                        <td> :
                            <select name="paketH">
                                <option value="Basic">Basic</option>
                                <option value="Standard">Standard</option>
                                <option value="Premium">Premium</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Paket VPS</td>
                        <td> :
                            <select name="paketV">
                                <option value="Mikro">Mikro</option>
                                <option value="Starter">Starter</option>
                                <option value="Bisnis">Bisnis</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Platinum">Platinum</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td> :
                            <select name="bayar">
                                <option value="Transfer">Transfer Bank</option>
                                <option value="Dana">Dana</option>
                                <option value="Ovo">Ovo</option>
                                <option value="Gopay">Gopay</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Upload Bukti Pembayaran</td>
                        <td> : <input type="file" name="foto"></></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> :
                            <input type="submit" name="input" value="INPUT"</>
                            <input type="reset" name="clear" value="CLEAR"</>
                    </tr>
                </table>
            </form>
        </div> -->
    </section>
    <section>
    <form enctype="multipart/form-data" action="terima.php" method="post" class="container">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <div class="form-group">
            <label for="inputAddress">Nama Lengkap</label>
            <input name="nama" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputAddress">Nomor Telepon</label>
            <input name="nohp" type="text" class="form-control" id="inputAddress" value="+62">
        </div>
        <div class="form-group">
				<label>Provinsi</label>
				<select class="form-control" name="provinsi" id="provinsi" required>
					<option value=""></option>
					<?php
					$provinsi = mysqli_query($koneksi,"select * from tbl_provinsi");
					while($f = mysqli_fetch_array($provinsi)){
						?>
						<option value="<?php echo $f['provinsi_id'] ?>"><?php echo $f['provinsi_nama']; ?></option>
						<?php
					}
					?>
				</select>
			</div>
		<div class="form-group">
				<label>Kota/Kabupaten</label>
				<select class="form-control" name="kota" id="kota" required>						
				</select>
			</div>			
			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('#provinsi').change(function() { 
			var provinsi = $(this).val(); 
			$.ajax({
				type: 'POST', 
				url: 'ajax_jurusan.php', 
				data: 'provinsi_id=' + provinsi, 
				success: function(response) { 
					$('#kota').html(response); 
				}
			});
		});
 
	</script>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" value="@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
<div class="form-group">
Menggunakan Promo?
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="promo" id="inlineRadio1" value="Ya">
    <label class="form-check-label" for="inlineRadio1">Ya</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="promo" id="inlineRadio2" value="Tidak">
    <label class="form-check-label" for="inlineRadio2">Tidak</label>
</div>
  <div class="form-group">
    <label for="inputAddress">Kode Promo</label>
    <input type="text" class="form-control" name="kpromo">
  </div>
  <div class="form-group">
    <label for="inputDate">Tanggal Pesan</label>
    <input type="date" class="form-control" name="tanggal">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" rows="3"></textarea>
  </div>
  <div class="form-group">Domain
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="domain1" value=".com">
            <label class="form-check-label" for="defaultCheck1">
            .com
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="domain2" value=".id">
            <label class="form-check-label" for="defaultCheck1">
            .id
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="domain3" value=".co.id">
            <label class="form-check-label" for="defaultCheck1">
            .co.id
            </label>
        </div>
  </div>

    <div class="form-group col-md-4">
      <label for="inputState">Paket Hosting</label>
      <select name="paketH" id="inputState" class="form-control">
            <option value="Basic">Basic</option>
            <option value="Standard">Standard</option>
            <option value="Premium">Premium</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Paket VPS</label>
      <select name="paketV" id="inputState" class="form-control">
            <option value="Mikro">Mikro</option>
            <option value="Starter">Starter</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Silver">Silver</option>
            <option value="Gold">Gold</option>
            <option value="Platinum">Platinum</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Metode Pembayaran</label>
        <select name="bayar" class="form-control">
            <option value="Transfer">Transfer Bank</option>
            <option value="Dana">Dana</option>
            <option value="Ovo">Ovo</option>
            <option value="Gopay">Gopay</option>
        </select>
    </div>
    <div class="form-group">
            <label for="inputAddress">Upload Bukti Pembayaran</label>
            <input name="foto" type="file" class="form-control">
    </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button type="reset" name="clear" class="btn btn-danger">Clear</button>
</form>
    </section>
    <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2023 HostinginAja!</p>
            <?php
            $today = date("l, d F Y - h:i:s a");
            ?> 
            <?=$today?></p>
    </footer>
</body>
</html>