<div class="container"> 
	<?php
	echo $data['title']."<br><br>";
	
	echo "<table class='table table-striped'>
		          <thead>
					<tr>					
					<th scope='col'>ID</th>
					<th scope='col'>ID Member</th>
					<th scope='col'>Tgl</th>
					<th scope='col'>Total Barang</th>
					<th scope='col'>Total Bayar</th>
					<th scope='col'>Action</th>
					</tr>
				</thead>
				<tbody>";
	?>
     <?php foreach ($data['order'] as $odr) :?>	 
		<?php 
		echo "<tr>";
		echo "<td>".$odr['id']."</td>";
		echo "<td>".$odr['idmember']."</td>";
		echo "<td>".$odr['tgl']."</td>";
		echo "<td>".$odr['pembelian']."</td>";
		echo "<td>".$odr['totalByr']."</td>";
        echo "<td><a href=".BASEURL."/order/delOrder/".$odr['id']."' style='color:red;'><i class='btn btn-danger'</i>Hapus</a></td>";
		echo "</tr>";
		?> 
     <?php endforeach; ?> 
	</div>	