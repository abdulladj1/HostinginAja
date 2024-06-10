<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//mengaktifkan sesi
session_start();
$username = $_POST["username"];
//inisialisasi sesi
$_SESSION['namauser'] = $username;
$_SESSION['namalengkap'] = $username." ".$username;
echo "$username<br>";
//panggil
// echo "Name: " .$_SESSION['namauser'] ."<br>";
//mengaktifkan cookie
$sepuluhdetik = time() + 300;
setcookie("KunjunganTerakhir", date("G:i:s - m/d/Y"), $sepuluhdetik);
//require('cek.php');
?>
</body>
</html>