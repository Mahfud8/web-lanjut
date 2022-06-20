<?php
session_start();
$id = $_GET['id'];

if (isset($_SESSION['keranjang'][$id])){
		$_SESSION['keranjang'][$id]+=1;
}else{
		$_SESSION['keranjang'][$id] = 1;
}

header("location:cart-disp.php");	
echo "<script>location='cart-disp.php'</script>"
/* session_start();
 if ($_SERVER["REQUEST_METHOD"] == "GET") {	
	$brg=$_GET['brg'];
	$jml=$_GET['jml'];

	if (!empty($_SESSION['cart']['arrCart'])){
		$max=sizeof($_SESSION['cart']['arrCart']);
		$find=false;
		for ($i=1;$i<$max;$i++){
			$cari=array_search($brg, $_SESSION['cart']['arrCart'][$i]);
			if ($cari) {
				$_SESSION['cart']['arrCart'][$i]['jml']+=1;
				$find=true;
				break;
			}			
		}			
	}
	if (!$find){
		$item = array('Nama'=>$brg, 'jml'=>$jml, 'hrg'=>$hrg);
		array_push($_SESSION["cart"]["arrCart"],$item);									
	}
} 
header("location:cart-disp.php"); */	
?>

