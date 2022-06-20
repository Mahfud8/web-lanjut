<?php
session_start();

//pemeriksaan session
if (isset($_SESSION['login'])) {

	include "koneksi.php";  
	    
	$sql= "SELECT * from barang ORDER BY id";									
	$hasil=$conn->query($sql);  

	?>
	<html>
		<head>
			<title>Manage Produk</title> 
		</head>

		<body>
		<a href='addBrg.php'>Tambah Data</a> | kembali ke <a href='list-product.php'>List Product</a><br />
		<?php

		if ($hasil->num_rows>0) {
		  echo "<table>
			       <tr>
				    <th>ID</th><th>nama</th><th>hrg</th><th>jml</th><th>ket</th><th>foto</th><th>Edit</th><th>Hapus</th>
				   </tr>";

			while ($row=$hasil->fetch_assoc()){
				$teks="<tr>";
				$teks.="<td>".$row["id"]."</td>";
				$teks.="<td>".$row["nama"]."</td>";			
				$teks.="<td>".$row["hrg"]."</td>";
				$teks.="<td>".$row["jml"]."</td>";
				$teks.="<td>".$row["keterangan"]."</td>";
				$teks.="<td><img src='img/".$row["foto"]."' style='width:100px;height:100px;'></img></td>";
				$teks.="<td><a href='editBrg.php?id=".$row["id"]."'>Edit</a></td>";
				$teks.="<td><a href='delBrg.php?id=".$row["id"]."'>Hapus</a></td>";
				$teks.="</tr>";	
				echo $teks;
			}		

			echo "</table>";
		}else{
			echo "jml rec: 0 " ;
		}

		$conn->close();
		?>
		</body>
	</html>
	<?php
}else{
	//session belum ada artinya belum login
	header("location:loginsession.php"); 
}
?>	 
