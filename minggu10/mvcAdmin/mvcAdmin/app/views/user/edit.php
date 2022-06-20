<div class="container mt-3">
 <form action="<?= BASEURL; ?>/user/updateuser" method="POST" >
	<div class="form-group">
		<label>id User</label>
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="iduser" placeholder="Id user" 
		     value="<?= $data['usr']['iduser']; ?>">
	</div>

	<div class="form-group">
		<label>User Name</label>
		<input name="username" type="text" class="form-control" placeholder="User Name .." value="<?= $data['usr']['username']; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input name="password" type="text" class="form-control" placeholder="password .." value="<?= $data['usr']['password']; ?>">
	</div>
  <input type="submit" value="simpan" class="btn btn-success mt-2">  
  <a href="<?= BASEURL; ?>/user" class="btn btn-primary mt-2">Kembali</a>
 </form>
</div>