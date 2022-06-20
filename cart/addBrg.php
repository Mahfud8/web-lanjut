<?php 
session_start(); 
?>
<html>
	<head>
		<title>Tambah Produk</title> 
	</head>
	<body>
		kembali ke <a href='manage.php'>Manajemen Product</a><br />

		<h1>Input Data barang</h1>
		<form action='insBrg.php' method='post' enctype="multipart/form-data"> 
		nama barang = <input type='text' name='tnama'> <br/>
		Harga = <input type='text' name='thrg'> <br/>
		Jml Stok = <input type='text' name='tjml'> <br/>
		Keterangan = <input type='text' name='tket'> <br/>
		Foto = <input type='file' name='foto'> <br/>
		<input type='submit' value='Simpan'>
		</form>
	</body>
</html>