<?Php
session_start();

//pemeriksaan session
if (isset($_SESSION['login'])) {
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Daftar Isi Cart</title> 
	</head>

	<body>
	<?php
	if (!empty($_SESSION['cart']["arrCart"])){
		echo "Jml data :".sizeof($_SESSION['cart']['arrCart']).
			 "<br /> <a href=cart-remove.php>Kosongkan Cart</a><br />
			 kembali ke <a href='list-product.php'>List Product</a><br />
			 <br />";
			 
		$max=sizeof($_SESSION['cart']['arrCart']);
		 
		for ($i=0;$i<$max;$i++){
			foreach ($_SESSION['cart']['arrCart'][$i] as $key => $val) {
				echo "$key : $val | "; 
			} 
			echo "<br />";	
		}  
	}else
		echo "cart kosong<br>kembali ke <a href='list-product.php'>List Product</a>"; 
	?> 
	</body>
	</html>
<?php
}else{
	//session belum ada artinya belum login
	header("location:loginsession.php"); 
}
?>