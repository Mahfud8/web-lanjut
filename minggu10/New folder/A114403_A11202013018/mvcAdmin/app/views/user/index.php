<div class="container mt-3">
 <div class="row">
  <div class="col-12">
   <h1>Data User</h1>
   <ul class="list-group">
     <table class="table table-stripped">
      <thead>
       <tr>
        <th scope="col">Nama</th>
        <th scope="col" width="200px">Action</th>
       </tr>
      </thead>
      <tbody>
       <?php foreach ($data['usr'] as $usr) :?>
       <tr>
        <td><?= $usr['username'];?></td>
        <td>
         <a href="<?= BASEURL; ?>/User/detail/<?= $usr['iduser'] ?>" class="badge badge-primary badge-pill">Detail</a>
         <a href="<?= BASEURL; ?>/User/edit/<?= $usr['iduser'] ?>" class="badge badge-primary badge-pill">Edit</a>
         <a href="<?= BASEURL; ?>/User/hapus/<?= $usr['iduser'] ?>" class="badge badge-primary badge-pill">Hapus</a>
        </td>
       </tr>
       <?php endforeach; ?>
      </tbody>
     </table>    
   </ul>
   <a href="<?= BASEURL; ?>/User/tambah" class="btn btn-success mt-2">Tambah User</a>
  </div>
 </div>
</div>