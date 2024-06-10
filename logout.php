<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css" />
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
</head>
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

            </ul>
        </header>
    </div>
    <div id="formFooter">
    <p><a class="btn btn-primary btn-lg px-4 gap-3" href="index.php?target=login">Log In</a></p>
    </div>
    <?php 
        session_start();
        session_destroy();
        header("Location: loginnew.php");
    ?>
</body>
</html>
