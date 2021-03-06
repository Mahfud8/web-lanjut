<?php
session_start();

//pemeriksaan session
if (isset($_SESSION['login'])) {

	include "koneksi.php"; 
	$sql = "SELECT * from barang ORDER BY id";									
	$hasil = $conn->query($sql);  
 
	    
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Dashboard - NiceAdmin Bootstrap Template</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="../NiceAdmin/assets/img/favicon.png" rel="icon">
	<link href="../NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="../NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="../NiceAdmin/assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
	* Template Name: NiceAdmin - v2.2.2
	* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
	</head>

	<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top d-flex align-items-center">

		<div class="d-flex align-items-center justify-content-between">
		<a href="index.html" class="logo d-flex align-items-center">
			<img src="assets/img/logo.png" alt="">
			<span class="d-none d-lg-block">NiceAdmin</span>
		</a>
		<i class="bi bi-list toggle-sidebar-btn"></i>
		</div><!-- End Logo -->

		<div class="search-bar">
		<form class="search-form d-flex align-items-center" method="POST" action="#">
			<input type="text" name="query" placeholder="Search" title="Enter search keyword">
			<button type="submit" title="Search"><i class="bi bi-search"></i></button>
		</form>
		</div><!-- End Search Bar -->

		<nav class="header-nav ms-auto">
		<ul class="d-flex align-items-center">

			<li class="nav-item d-block d-lg-none">
			<a class="nav-link nav-icon search-bar-toggle " href="#">
				<i class="bi bi-search"></i>
			</a>
			</li><!-- End Search Icon-->

			<li class="nav-item dropdown">

			<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
				<i class="bi bi-bell"></i>
				<span class="badge bg-primary badge-number">4</span>
			</a><!-- End Notification Icon -->

			<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
				<li class="dropdown-header">
				You have 4 new notifications
				<a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="notification-item">
				<i class="bi bi-exclamation-circle text-warning"></i>
				<div>
					<h4>Lorem Ipsum</h4>
					<p>Quae dolorem earum veritatis oditseno</p>
					<p>30 min. ago</p>
				</div>
				</li>

				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="notification-item">
				<i class="bi bi-x-circle text-danger"></i>
				<div>
					<h4>Atque rerum nesciunt</h4>
					<p>Quae dolorem earum veritatis oditseno</p>
					<p>1 hr. ago</p>
				</div>
				</li>

				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="notification-item">
				<i class="bi bi-check-circle text-success"></i>
				<div>
					<h4>Sit rerum fuga</h4>
					<p>Quae dolorem earum veritatis oditseno</p>
					<p>2 hrs. ago</p>
				</div>
				</li>

				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="notification-item">
				<i class="bi bi-info-circle text-primary"></i>
				<div>
					<h4>Dicta reprehenderit</h4>
					<p>Quae dolorem earum veritatis oditseno</p>
					<p>4 hrs. ago</p>
				</div>
				</li>

				<li>
				<hr class="dropdown-divider">
				</li>
				<li class="dropdown-footer">
				<a href="#">Show all notifications</a>
				</li>

			</ul><!-- End Notification Dropdown Items -->

			</li><!-- End Notification Nav -->

			<li class="nav-item dropdown">

			<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
				<i class="bi bi-chat-left-text"></i>
				<span class="badge bg-success badge-number">3</span>
			</a><!-- End Messages Icon -->

			<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
				<li class="dropdown-header">
				You have 3 new messages
				<a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="message-item">
				<a href="#">
					<img src="../NiceAdmin/assets/img/messages-1.jpg" alt="" class="rounded-circle">
					<div>
					<h4>Maria Hudson</h4>
					<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
					<p>4 hrs. ago</p>
					</div>
				</a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="message-item">
				<a href="#">
					<img src="../NiceAdmin/assets/img/messages-2.jpg" alt="" class="rounded-circle">
					<div>
					<h4>Anna Nelson</h4>
					<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
					<p>6 hrs. ago</p>
					</div>
				</a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="message-item">
				<a href="#">
					<img src="../NiceAdmin/assets/img/messages-3.jpg" alt="" class="rounded-circle">
					<div>
					<h4>David Muldon</h4>
					<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
					<p>8 hrs. ago</p>
					</div>
				</a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li class="dropdown-footer">
				<a href="#">Show all messages</a>
				</li>

			</ul><!-- End Messages Dropdown Items -->

			</li><!-- End Messages Nav -->

			<li class="nav-item dropdown pe-3">
			
			<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          		<h5 class="d-none d-md-block dropdown-toggle ps-2"><i class="ri-account-circle-fill"></i>&nbsp<?php echo $_SESSION['login'] ?></h5>
			</a><!-- End Profile Iamge Icon -->

			<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
				<li class="dropdown-header">
				<h6><?php echo $_SESSION['login'] ?></h6>
				<span>Web Designer</span>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li>
				<a class="dropdown-item d-flex align-items-center" href="users-profile.html">
					<i class="bi bi-person"></i>
					<span>My Profile</span>
				</a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li>
				<a class="dropdown-item d-flex align-items-center" href="users-profile.html">
					<i class="bi bi-gear"></i>
					<span>Account Settings</span>
				</a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li>
				<a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
					<i class="bi bi-question-circle"></i>
					<span>Need Help?</span>
				</a>
				</li>
				<li>
				<hr class="dropdown-divider">
				</li>

				<li>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<i class="bi bi-box-arrow-right"></i>
					<span>Sign Out</span>
				</a>
				</li>

			</ul><!-- End Profile Dropdown Items -->
			</li><!-- End Profile Nav -->

		</ul>
		</nav><!-- End Icons Navigation -->

	</header><!-- End Header -->

	<!-- ======= Sidebar ======= -->
	<aside id="sidebar" class="sidebar">

		<ul class="sidebar-nav" id="sidebar-nav">

		<li class="nav-item">
			<a class="nav-link " href="list-product.php">
			<i class="bi bi-grid"></i>
			<span>Dashboard</span>
			</a>
		</li><!-- End Dashboard Nav -->

		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
			<i class="bi bi-menu-button-wide"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
			<li>
				<a href="manage.php">
				<i class="bi bi-circle"></i><span>Barang</span>
				</a>
			</li>
			</ul>
		</li><!-- End Components Nav -->

		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
			<i class="bi bi-journal-text"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
			<li>
				<a href="list-product.php">
				<i class="bi bi-circle"></i><span>Daftar Produk</span>
				</a>
			</li>
			<li>
				<a href="cart-disp.php">
				<i class="bi bi-circle"></i><span>Keranjang Belanja</span>
				</a>
			</li>
			</ul>
		</li><!-- End Forms Nav -->

		<li class="nav-heading">Pages</li>

		<li class="nav-item">
			<a class="nav-link collapsed" href="users-profile.html">
			<i class="bi bi-person"></i>
			<span>Profile</span>
			</a>
		</li><!-- End Profile Page Nav -->

		<li class="nav-item">
			<a class="nav-link collapsed" href="pages-faq.html">
			<i class="bi bi-question-circle"></i>
			<span>F.A.Q</span>
			</a>
		</li><!-- End F.A.Q Page Nav -->

		<li class="nav-item">
			<a class="nav-link collapsed" href="pages-contact.html">
			<i class="bi bi-envelope"></i>
			<span>Contact</span>
			</a>
		</li><!-- End Contact Page Nav -->

		</ul>

	</aside><!-- End Sidebar-->

	<main id="main" class="main">

		<div class="pagetitle">
		<h1>Master</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active">Manajemen Barang</li>
			</ol>
		</nav>
		</div><!-- End Page Title -->
		
		<section class="section dashboard">
		<h5><a href='addBrg.php'><span class="badge bg-primary">Tambah Barang</span></a>&nbsp&nbsp&nbsp
		<a href='list-product.php'><span class="badge bg-secondary">List Product</span></a></h5><br />
		
    	
		<div class="row">
		
			<!-- Left side columns -->
			<div class="col-lg-15">
			<div class="row">
					
					<!-- Product -->
					<div class="col-12">
					<div class="card top-selling overflow-auto">
						
						<div class="card-body pb-0">
						<h5 class="card-title">Daftar Barang</h5>
						
						<?php						
						if ($hasil -> num_rows>0) {
						echo "<table class='table table-striped'>
							<thead>
								
							<tr>
								<th scope='col'>ID</th>
								<th scope='col'>Nama</th>
								<th scope='col'>Harga</th>
								<th scope='col'>Jumlah</th>
								<th scope='col'>Keterangan</th>
								<th scope='col'>Foto</th>
								<th scope='col'>Edit</th>
								<th scope='col'>Hapus</th>

							</tr>
							</thead>";

							while ($row = $hasil->fetch_assoc()){
								$teks="<tr>";
								$teks.="<td>".$row['id']."</td>";
								$teks.="<td>".$row['nama']."</td>";	
								$teks.="<td>".$row['hrg']."</td>";
								$teks.="<td class='fw-bold'>".$row['jml']."</td>";
								$teks.="<td>".$row["keterangan"]."</td>";
								$teks.="<td scope='row'><img src='img/".$row['foto']."' style='width:150px;height:150px;' alt=".$row['nama']."></img></td>";
								$teks.="<td><a href='editBrg.php?id=".$row['id']."' style='color:green;'><i class='bx bx-edit'></i>Edit</a></td>";
								$teks.="<td><a href='delBrg.php?id=".$row['id']."' style='color:red;'><i class='bi bi-trash-fill'></i>Hapus</a></td>";
								$teks.="</tr>";

								echo $teks;
							}		
								echo "</table>";
						}else{
								echo "jml rec: 0 " ;
						}
						$conn -> close();
						?>
						</div>
					</div>
					</div>
			</div>
			</div><!-- End Top Selling -->
		</div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="copyright">
		&copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
		<!-- All the links in the footer should remain intact. -->
		<!-- You can delete the links only if you purchased the pro version. -->
		<!-- Licensing information: https://bootstrapmade.com/license/ -->
		<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
		Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="../NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/chart.js/chart.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/quill/quill.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="../NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="../NiceAdmin/assets/js/main.js"></script>

	</body>
	</html>

	<?php
}else{
	//session belum ada artinya belum login
	header("location:loginsession.php"); 
}
?>	 
