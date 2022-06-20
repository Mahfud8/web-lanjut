<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-4">
			<div class="card text-center">
			  <div class="card-header">
				Silakan Log In
			  </div>
			  <div class="card-body">
				<form action="<?= BASEURL; ?>/user/prosesLogin" method="post" > 
				<div class="mb-3">
				  <label for="luser" class="form-label">User Name</label>
				  <input type="text" class="form-control" id="iduser" name="tuser"  required>
				</div>				
				<div class="mb-3">
				  <label for="lpass" class="form-label">Password</label>
				  <input type="password" class="form-control" id="password" name="tpass"  required>
				</div>				
				<div class="mb-3">
				   <button class="btn btn-primary" type="submit">Login</button>
				</div>		
			</form>	
			  </div>
			  <div class="card-footer text-muted">
				<p class="card-text">Sistem Administrasi Toko </p>
			  </div>	

			</div>
		</div>
	</div>
</div>