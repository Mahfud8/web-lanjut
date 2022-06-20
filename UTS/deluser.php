<?php
session_start();

require_once("koneksi.php");

$kode_user=$_GET['kode_user']; 

$sql = "select foto from user where kode_user='$kode_user'";
$hasil=$db->query($sql);  

$sql = "delete from user where kode_user='$kode_user'";

if ($db->query($sql) === TRUE) {
    $db -> null;
  header("location:halamanutama.php");  
}else{
    $db -> null;  
  echo "New records failed";
} 
?>