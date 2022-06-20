	<div class="container"> 
	<?php
	echo $data['title']."<br><br>";
	
	echo "<table class='table table-striped'>
		          <thead>
					<tr>					
					<th scope='col'>ID</th>
					<th scope='col'>Nama</th>
					<th scope='col'>Email</th>
					<th scope='col'>Telp</th>
					<th scope='col'>Alamat</th>
					<th scope='col'>Kota</th>
					</tr>
				</thead>
				<tbody>";
	?>
     <?php foreach ($data['member'] as $mbr) :?>	 
		<?php 
		echo "<tr>";
		echo "<td>".$mbr['id']."</td>";
		echo "<td>".$mbr['nama_member']."</td>";
		echo "<td>".$mbr['email']."</td>";
		echo "<td>".$mbr['telp']."</td>";
		echo "<td>".$mbr['alamat']."</td>";
		echo "<td>".$mbr['kota']."</td>";
		echo "</tr>";
		?> 
     <?php endforeach; ?> 
	</div>	