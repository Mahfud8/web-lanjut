<?php
session_start();

require_once 'Database.php';
include "uploadFoto.php";

$db = new Database();
  
$id=$_POST['tid'];
$nama=$_POST['tnama'];
$hrg=$_POST['thrg'];
$ket=$_POST['tket'];
$jml=$_POST['tjml'];
$foto_lama=$_POST['foto_lama'];
$foto = "";

if(isset($_POST['ubah_foto'])){ 	
  if (upload_foto($_FILES["foto"])){
		$foto=$_FILES["foto"]["name"];
		$hasil = $db->updProduct($id, $nama, $hrg, $jml, $ket, $foto);
		if ($hasil){
			if(is_file("img/".$foto_lama))
				unlink("img/".$foto_lama);
		}
	}else{
		$qry=false;
		echo "foto gagal diupload";
	}			
}else{
	$hasil = $db->updProduct($id, $nama, $hrg, $jml, $ket, $foto);
}

header("location:manage.php"); 
?>  