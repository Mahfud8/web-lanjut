<div class="container mt-3">
 <form action="<?= BASEURL; ?>/user/simpanUser" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label>UserName</label>
		<input name="username" type="text" class="form-control" placeholder="username .." required>
	</div>
	<div class="form-group">
		<label>password</label>
		<input name="password" type="text" class="form-control" placeholder="password .." required>
	</div>

  <input type="submit" value="simpan" class="btn btn-success mt-2">
  <a href="<?= BASEURL; ?>/user" class="btn btn-primary mt-2">Kembali</a>
 </form>

</div>