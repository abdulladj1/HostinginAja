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
        <img class="d-block mx-auto mb-4" src="img/Domain.png" alt="" width="272" height="257">
        <h1 class="display-5 fw-bold">Cek Domain Anda di HostinginAja!</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Cek Domain yang Anda inginkan, dan temukan Domain impian di HostinginAja!</p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary btn-lg px-4 gap-3" type="button">Search</button>
            </div>
          </div>
    </div>
    <!-- <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold">Domain</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                HostinginAja! menyediakan beberapa domain untuk kebutuhan website
                anda!
            </p>
        </div>
    </div> -->
    <div class="px-4 py-5 my-5 text-center">
        <?php
            require('tabel_domain.php');
        ?>
    </div>
</body>
</html>