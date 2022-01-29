<?php
$koneksi = mysqli_connect("localhost", "root", "", "202055202043_inda_tuasela");

if (mysqli_connect_errno()) {
	echo "koneksi Database Gagal:".mysqli_connect_errno();
}

?>