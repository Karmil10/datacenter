<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
	<body>
		<div class="row">
		<div class="col-lg-4">
		<?php echo form_open_multipart('web/do_update_karyawan'); ?>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="departemen" name="departemen" value="<?php echo $departemen; ?>">
				</div>
			</div>
			<div class="form-group">
					<div class="col-sm-10">
					<label class="control-label col-sm-2" for="pwd">image</label>
					  <input type="file" id="image "name="image" class="form-control" value="<?php echo $image; ?>">
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
		