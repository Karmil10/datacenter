<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
	<body>
		<div class="row">
		<div class="col-lg-4">
		<?php echo form_open_multipart('web/do_update_vendor'); ?>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="ktp" name="ktp" value="<?php echo $ktp; ?>" >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="<?php echo $perusahaan; ?>">
				</div>
			</div>
			<div class="form-group">
					<div class="col-sm-10">
					<label class="control-label col-sm-2" for="pwd">Foto</label>
					  <input type="file" id="foto "name="foto" class="form-control" value="<?php echo $foto; ?>">
					</div>
			</div>
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					 <button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
			<?php echo form_close(); ?>
			</div>
		</form>
	</body>
</html>
		