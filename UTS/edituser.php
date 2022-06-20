<?php
session_start();

require_once("koneksi.php");
$kode_user=$_GET['kode_user']; 

$sql="select * from barang where kode_user='$kode_user'";
$hasil=$conn->query($sql); 

while ($row = $hasil->fetch()){
    $kode_user=$row['kode_user'];
	$username=$row['username']; 
	$email=$row['email']; 
	$telp=$row['telp']; 
	$peran=$row['peran']; 
 
}
?>

<html>
<head>
	<title>Edit User</title> 
</head>
<body>
	kembali ke <a href='halamanUser.php'>Halaman User</a><br />
		
	<h1>Edit Data User</h1>
	<form action='updBrg.php' method='post' enctype="multipart/form-data">
	kode_user = <input type='text' name='tid' value="<?= $kode_user;?>" readonly> <br/>
	nama  = <input type='text' name='tnama' value="<?= $nama;?>"> <br/>
	email = <input type='email' name='temail' value="<?= $email;?>"> <br/>
	telp = <input type='text' name='ttelp' value="<?= $telp;?>"> <br/>
	password = <input type='password' name='tpassword' value="<?= $password;?>"> <br/>
	peran = <input type='text' name='tperan' value="<?= $peran;?>"> <br/>

	<input type='submit' value='Update'>
	</form>
</body>
</html>