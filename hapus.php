<?php 
error_reporting(0);
require 'koneksi2.php';

if (isset($_GET['nama'])) {

	$nama = $_GET['nama'];

	$file = mysqli_query($koneksi, "SELECT foto FROM pembeli where nama = '$nama'");
	

	$query = "DELETE FROM pembeli where nama = $nama";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Data gagal di tambahkan; ". mysqli_errno($koneksi). mysqli_error($koneksi));

	}else {
		echo "<script>alert('Data berhasil dihapus'); window.location.href='data_pemesan.php'</script>";
	}
	
}
 ?>