<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<div class="row">
		<div class="col-lg-4">
		<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/web/do_add_dco";?>" class="form-horizontal">
		<div class="form-group">
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="hidden"  class="form-control" id="no" name="no" placeholder="no" value="<?php echo random_string('alnum',16); ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="id" name="id" placeholder="ID" value="<?php echo $id; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $nama; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="departemen" name="departemen" placeholder="departemen" value="<?php echo $departemen; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="job" name="job" placeholder="job">
				</div>
			</div>
			<div class="form-group">
			<a>Tanggal</a>
				<div class="col-sm-10">
			   <input type="date"  class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" >
				</div>
			</div>
			<div class="form-group">
			<a>Jam masuk</a>
				<div class="col-sm-10">
			   <input type="time"  class="form-control" id="jam_masuk" name="jam_masuk" placeholder="jam_masuk" >
				</div>
			</div>
			<div class="form-group">
			<a>Jam keluar</a>
				<div class="col-sm-10">
			   <input type="time"  class="form-control" id="jam_keluar" name="jam_keluar" placeholder="jam_keluar" >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="hidden" class="form-control" id="jam_keluar" name="image" placeholder="foto_user" value="<?php echo $image; ?>">
			    <img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $image ?>" width="90" height="110">
				</div>
			</div>
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					 <button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
			</div>
			 <?php echo form_close(); ?>
			</form>
	</body>
</html>