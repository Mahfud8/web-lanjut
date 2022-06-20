<?php
session_start();

//pemeriksaan session
if (isset($_SESSION['login'])) {
	//jika sudah login
	if (empty($_SESSION['cart']["arrCart"]))
		$_SESSION['cart']["arrCart"]=array();

	include "koneksi.php";
	
	?> 
	<html>
		<head>
			<title>Daftar Produk</title> 
		</head>

		<body>
			Selamat Datang, <?php echo $_SESSION['login'] ?> | <?php echo $_SESSION['role'] ?> 
			<?php 
				if($_SESSION['role']=="admin"){
					?>
					(<a href='manage.php'>Manajemen Product</a>)
					<?php
				}
			?>
			(<a href='cart-disp.php'>Cek Cart</a>) (<a href='logout.php'>Log Out</a>)

			<h2>Tanaman Hias Aglonema</h2>  
			<table align="center">
				<tr>
				<?php
				$sql = "SELECT * FROM barang";
				
				$hasil = $conn->query($sql);
				
				if($hasil->num_rows > 0){
					while($row = $hasil->fetch_assoc()){
						?>
						<td style="text-align:center">
							<img src='img/<?php echo $row['foto']?>' style='width:100px;height:100px' /><br />
							<a href="addCart.php?brg=<?php echo $row['nama']?>&hrg=<?php echo $row['hrg']?>&jml=1"><?php echo $row['nama']?></a><br />
							<?php echo $row['hrg']?>
						</td> 
						<?php
					}
				}else{
					echo "Tidak Ada Data";
				}
				?> 
				</tr>
			</table>  
		</body>
	</html>
	<?php
}else{
	//session belum ada artinya belum login
	header("location:loginsession.php"); 
}
 					
?> 
