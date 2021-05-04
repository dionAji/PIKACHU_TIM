<?php 
require 'koneksi.php';
$pembeli = query("SELECT * FROM pembeli");

 ?>
 <!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Data Pemesan</title>
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
      <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="info.php">INFO WISATA</a>
         <a class="nav-link active" href="info.php">DATA PEMESAN</a>
   
      <a class="nav-link" href="#">HUBUNGI KAMI</a>
      <a class="nav-link" href="#">LOG OUT</a>

    </div>
  </div>
  </div>
</nav>
<!-- Akhir Tampilan -->

 <!-- awal tabel data  -->
<div class="container">
    <!-- awal pendaftaran -->
    <div><h1>Data Pemesan</h1></div>
    <div class="card">
      <div class="card-header bg-dark text-white">
        Data Pemesan Tiket
      </div>
      <table class="table table-bordered table-striped" >
           <tr>
 	
 	<th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tanggal Pemesanan</th>
    <th>Jumlah Pemesanan</th>
    <th>Action</th>
 </tr>
 <?php  $i=1; ?>
 <?php foreach ($pembeli as $row) : ?>
<tr>
	<td><?= $i; ?></td>
	<td><?=$row ["nama"];  ?></td>
	<td><?=$row ["alamat"];  ?></td>
	<td><?=$row ["tanggal_pemesanan"];  ?></td>
	<td><?=$row ["jumlah_pemesanan"];  ?></td>
	<td>	
		<a href="">Hapus</a>
	</td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
      </table>
  </div>
    </div>

 <!-- akhir tabel data  -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>