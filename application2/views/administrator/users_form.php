<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-user"> FORM TAMBAH USER </i> 
	</div>

	<form method="post" action="<?php echo base_url('administrator/users/tambah_users_aksi')  ?>">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Masukan Username" class="form-control">
			<?php echo form_error('username', '<div class="text-danger small" ml-3></div>') ?>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" placeholder="Masukan Password" class="form-control">
			<?php echo form_error('password', '<div class="text-danger small" ml-3></div>') ?>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Masukan Email" class="form-control">
			<?php echo form_error('email', '<div class="text-danger small" ml-3></div>') ?>
		</div>

		<div class="form-group">
			<label>LEVEL</label>
			<select name="level" class="form-control">
				
				<?php 
				if($level == 'admin') {
				 ?>
					<option value="admin">Admin</option>
					<option value="user">user</option>

					<?php 
					} elseif ($level == 'user') {
					?>
					<option value="admin">Admin</option>
					<option value="user">user</option>
				<?php 
				} else {
				 ?>
				 <option value="admin">Admin</option>
				<option value="user">user</option>

			<?php } ?>	

				
			</select>
			<?php echo form_error('level', '<div class="text-danger small" ml-3></div>') ?>

		</div>

		<div class="form-group">
			<label>BLOKIR</label>
			<select name="blokir" class="form-control">
				
				<?php 
				if($blokir == 'Y') {
				 ?>
					<option value="Y" selected="">Ya</option>
					<option value="N">Tidak</option>

					<?php 
					} elseif ($blokir == 'N') {
					?>
					<option value="Y">Ya</option>
					<option value="N" selected>Tidak</option>
				<?php 
				} else {
				 ?>
				 <option value="Y">Ya</option>
				<option value="N">Tidak</option>

			<?php } ?>	

				
			</select>
			<?php echo form_error('blokir', '<div class="text-danger small" ml-3></div>') ?>

		</div>


		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>
