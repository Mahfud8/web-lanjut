<div class="container mt-3">
 <div class="row">
  <div class="col-12">
   <h1>Daftar Produk</h1>   
    <table class="table table-stripped">
      <thead>
       <tr>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
       </tr>
      </thead>
      <tbody>
       <?php foreach ($data['produk'] as $p) : ?>
       <tr>
        <td><?= $p['nama'];?></td>
        <td>
		 <a href="<?= BASEURL; ?>/produk/detail/<?= $p['id'];?>" class="btn btn-primary">Detail</a>
	     <a href="<?= BASEURL; ?>/produk/edit/<?= $p['id'];?>" class="btn btn-success">Edit</a>
		  <a href="<?= BASEURL; ?>/produk/delProduk/<?= $p['id'];?>" class="btn btn-danger">Delete</a>
        </td>
       </tr>
       <?php endforeach; ?>
      </tbody>
    </table>    
    <a href="<?= BASEURL; ?>/produk/tambah" class="btn btn-success mt-2">Tambah Data</a>
  </div>
 </div>
</div>