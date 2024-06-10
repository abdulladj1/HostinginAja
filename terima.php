<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostinginAja!</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/terima.css" />
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="home.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">HostinginAja!</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php?target=home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="index.php?target=domain" class="nav-link">Domain</a></li>
                <li class="nav-item"><a href="index.php?target=hosting" class="nav-link">Hosting</a></li>
                <li class="nav-item"><a href="index.php?target=vps" class="nav-link">VPS</a></li>
            </ul>
        </header>
    </div>
    <!-- PHP -->
    <?php
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $promo = $_POST['promo'];
    $cpromo = $_POST['kpromo'];
    $date = $_POST['tanggal'];
    $address = $_POST['alamat'];
    $i = 0;

    // Fungsi String
    $hash = password_hash($pwd, PASSWORD_DEFAULT);
    if (password_verify($pwd, $hash))
    {echo "<center>Password True </br></center>";}else{echo "<center>Password False </br></center>";}

    if(isset($_POST['domain1']))
    {
        $domain[$i] = $_POST['domain1'];
        $i++;
    }
    if(isset($_POST['domain2']))
    {
        $domain[$i] = $_POST['domain2'];
        $i++;
    }
    if(isset($_POST['domain3']))
    {
        $domain[$i] = $_POST['domain3'];
        $i++;
    }
    $domainlist = implode(", ",$domain);
    $pckhst = $_POST['paketH'];
    $pckv = $_POST['paketV'];
    $bayar = $_POST['bayar'];
    ?>
    <?php
    $uploaddir = 'uploads/';
    $uploadfile = $uploaddir . $_FILES['foto']['name'];
    if($_FILES['foto']['type']=="image/png" || 
      $_FILES['foto']['type']=="image/jpeg")
    {
      if (move_uploaded_file($_FILES['foto']['tmp_name'],
      $uploadfile)) {
      echo "";
      } else {
        echo "";
      }
    }
    ?>
    <section class="">
        <h2 align="center">Data Pelanggan</h2>
        <table align="center">
            <tr>
                <td>Nama Lengkap</td>
                <td> : <?=$nama?> </td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td> : <?=$nohp?></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td> : <?=$provinsi?> </td>
            </tr>
            <tr>
                <td>Kota</td>
                <td> : <?=$kota?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : <?=$email?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td> : <?=$hash?></td>
            </tr>
            <tr>
                <td>Menggunakan Promo</td>
                <td> : <?=$promo?></td>
            </tr>
            <tr>
                <td>Kode Promo</td>
                <td> : <?=$cpromo?></td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td> : <?=$date?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : <?=$address?></td>
            </tr>
            <tr>
                <td>Domain Dipilih</td>
                <td> : <?=$domainlist?></td>
            </tr>
            <tr>
                <td>Paket Hosting</td>
                <td> : <?=$pckhst?></td>
            </tr>
            <tr>
                <td>Paket VPS</td>
                <td> : <?=$pckv?></td>
            </tr>
            <tr>
                <td>Metode Pembayaran</td>
                <td> : <?=$bayar?></td>
            </tr>  
        </table>
    </section>
    <section>
    <p class="button"><a class="btn btn-primary btn-lg px-4 gap-3" href="simulasi.php">Lanjutkan</a></p>
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