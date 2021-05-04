<?php  
$koneksi = mysqli_connect('localhost', 'root', '','penjualan_tiket');

// terhubung ke database
if (isset($_POST['bsimpan'])) 
{	
	$simpan = mysqli_query($koneksi, "INSERT INTO pembeli (nama,alamat,namaTiket,tanggal_pemesanan,jumlah_pemesanan)
	                             VALUES ('$_POST[tnama]',
	                                    '$_POST[talamat]',
	                                    '$_POST[tnamaTiket]',
	                                    '$_POST[ttanggal_pemesanan]',
	                                    '$_POST[tjumlah_pemesanan]')
	                                     ");

if ($simpan) 
{
	echo"<script>
          alert('simpandata berhasil');
          document.location='input.php';
	      </script>";
}
else
{

echo"<script>
          alert('Simpan data gaagl');
          document.location='input.php';
	      </script>";
}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pengguna</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="desain.css">
</head>
<body>
	<!-- awal tampilan -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link " href="home.php">HOME <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="info.php">INFO WISATA</a>
      <a class="nav-link active" >PEMESANAN TIKET</a>
      <a class="nav-link" href="#">HUBUNGI KAMI</a>
      <a class="nav-link" href="#">LOG OUT</a>
    </div>
  </div>
  </div>
</nav>
<!-- Akhir Tampilan -->
<div class="container">
	<!-- awal pendaftaran -->
	<div><h1>Masukan Data</h1></div>
	<div class="card">
	  <div class="card-header bg-dark text-white">
	    Masukan Data Diri Untuk memesan tiket
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Nama :</label>
	    		<input type="text" name="tnama" class="form-control" placeholder="Masukan nama lengkap" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Alamat :</label>
	    		<textarea class="form-control" name="talamat" placeholder="Masukan Alamat"></textarea>
	    	</div>
	    	<label>Pilih Nama Wisata : :</label>
	    		<select class="form-control" name="tnamaTiket">
	    			<option>Pilih Nama Wisata Tiket yang ingin di kunjungi</option>
	    			<option value="Sumur Ember">Sumur Ember</option>
	    			<option value="Pantai Pangi">Pantai Pangi</option>
	    			<option value="Perkebunan">Perkebunan Sirah Kencong</option>
	    			
	    		</select>	
	    	<div class="form-group">
	    		<label>Tanggal Pemesanan :</label>
	    		<input type="date" name="ttanggal_pemesanan" class="form-control" placeholder="Masukan Tanggal Pemesanan" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Jumlah Pemesanan :</label>
	    		<select class="form-control" name="tjumlah_pemesanan">
	    			<option>Pilih Jumlah Tiket Yang ingin di pesan</option>
	    			<option value="1-Tiket">1 Tiket</option>
	    			<option value="2-Tiket">2 Tiket</option>
	    			<option value="3-Tiket">3 Tiket</option>
	    			<option value="4-Tiket">4 Tiket</option>
	    			<option value="-5Tiket">5 Tiket</option>
	    		</select>	
	    	</div>
	    	<input type="submit" class="btn btn-outline-dark" name="bsimpan" id="simpan" value="simpan" />
	    	<button type="reset" class="btn btn-danger" name="breset">Reset Form</button>
	    </form>
	  </div>
	</div>
	<!-- akhir pendaftaran -->
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>