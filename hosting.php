<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostinginAja!</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/home.css" />
</head>
<body>
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/Hosting.png" alt="" width="272" height="257">
        <h1 class="display-5 fw-bold">Pilih Paket Hosting Murah Sesuai Kebutuhan Anda!</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">HostinginAja! menyediakan beberapa pilihan paket. Nikmati sumber daya besar, akses super cepat, dan website selalu online. Setiap paketnya turut dilengkapi fitur pengelolaan terintegrasi untuk optimasi website lebih baik.</p>
        </div>
    </div>
    <div class="px-4 py-5 my-5 text-center">
        <?php
            require('tabel_hosting.php');
        ?>
    </div>
</body>
</html>