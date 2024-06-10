<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_crud');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$sql = "select * from users where username = '$username'";
$process = mysqli_query($conn, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
	echo " &#10004; Username tersedia";
}else{
	echo " &#10060; Username tidak tersedia";
}
?>