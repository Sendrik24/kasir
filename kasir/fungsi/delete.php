<?php 

// Konfigurasi koneksi
$host     = "localhost";
$user     = "root";
$password = "";
$database = "kasir_zibran";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

$id = $_GET['id'];
$delete =  mysqli_query($koneksi, "DELETE FROM transaksi_temp WHERE id='$id'");

if ($delete) {
	echo '<script>window.history.back()</script>';
}


 ?>