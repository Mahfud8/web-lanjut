<?php
	session_start();
	unset($_SESSION['keranjang']);
	header("location:cart-disp.php");
?>
