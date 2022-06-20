<div class="container mt-3">
 <form action="<?= BASEURL; ?>/produk/insProduk" method="POST" enctype="multipart/form-data">
		<div class="mb-3">
		  <label for="l2" class="form-label">Nama barang</label>
		  <input type="text" class="form-control" id="nama" name="tnama" placeholder="Nama barang">
		</div>	
		<div class="mb-3">
		  <label for="l3" class="form-label">Harga</label>
		  <input type="text" class="form-control" id="hrg" name="thrg"  placeholder="harga" required> 
		</div>
		<div class="mb-3">
		  <label for="l4" class="form-label">Jml Stok</label>
		  <input type="text" class="form-control" id="jml" name="tjml"  placeholder="stok" required> 
		</div>
		<div class="mb-3">
		  <label for="l5" class="form-label">keterangan</label>
		  <input type="text" class="form-control" id="ket" name="tket"  placeholder="keterangan"> 
		</div>
		<div class="mb-3">
		  <label for="l6" class="form-label">Gambar</label>
		  <input type="file" class="form-control" id="ket" name="foto" > 		  		 		
		</div>
	    <div class="mb-3">
		   <button class="btn btn-primary" type="submit">Simpan</button>		   
		   <a href="<?= BASEURL; ?>/produk" class="btn btn-primary mt-2">Kembali</a>
	    </div>		
		
 </form>

</div>