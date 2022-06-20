<?php
session_start();

if (isset ($_POST['Login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	//periksa login
	if (($user == "april" && $pass == "12345") OR ($user == "admin" && $pass == "12345")) {
		//menciptakan session
		$_SESSION['login'] = $user;
		$_SESSION['role'] = "guest";

		if($user == "admin"){
			$_SESSION['role'] = "admin";
		}
		
		//menuju ke halaman product
		header("location:list-product.php");
	}else{
		header("location:loginsession.php"); 
	}
} else {
	?>
	<html>
	<head>
		<title>Form Log In</title>
	</head>
	<body>
	<form action="" method="post">
	<h2>Login Here...</h2>
	Username : <input type="text" name="user"><br>
	Password : <input type="password" name="pass"><br>
	<input type="submit" name="Login" value="Log In">
	</form>
	</body>
	</html>
	<?php 
} 
?>