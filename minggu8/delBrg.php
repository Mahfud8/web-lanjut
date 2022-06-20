<?php
session_start();

require_once "Database.php"

if(isset($_GET['id']));{
  $id = $_GET['id'];
  $db = new Database();
  $foto = $db->getFoto($id);
  $hasil = $db->delProduct($id);
  if ($hasil){
    if($foto!=""){
      unlink("img/".$foto);
    }
    header("location:manage.php");
  } else {
    echo "Hapus data gagal...";
  }
}


/* $sql = "select foto from barang where id='$id'";
$hasil=$conn->query($sql);  

while ($row=$hasil->fetch_assoc()){
 $foto=$row['foto'];   
}

if ($foto!=""){
	unlink("img/".$foto);	  
}	 

$sql = "delete from barang where id='$id'";

if ($conn->query($sql) === TRUE) {
  $conn->close(); 
  header("location:manage.php");  
}else{
  $conn->close();  
  echo "New records failed";
}  */
?>