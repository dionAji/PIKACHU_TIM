<?php 
error_reporting(0);
require 'koneksi2.php';

if (isset($_POST['simpan'])) {

	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$namaTiket= $_POST['namaTiket'];
	$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
	$jumlah_pemesanan= $_POST['jumlah_pemesanan'];
	

	if (move_uploaded_file($tmp, $path)) {
		$query = "INSERT INTO pembeli VALUES ('$nama','$alamat','namaTiket','$tanggal_pemesanan','$jumlah_pemesanan')";
		$result = mysqli_query($koneksi, $query);
		if (!$result) {
			die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));		
		}
		else {
			echo "<script>alert('Data Berhasil Diubah'); window.location.href='index.php' </script>";
		}
		
	}
}

 ?>
