<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<div class="row">
		<div class="col-lg-4">
		<?php echo form_open_multipart('web/do_add_dco2'); ?>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?php echo $nik; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $nama; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="divisi" name="divisi" placeholder="divisi" value="<?php echo $divisi; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <select class="form-control" id="pic" name="pic">
			    			<option value="">PIC</option>
							<option value="Amri Rohmat">AMRI ROHMAT</option>
						    <option value="Ade Karmil">ADE KARMIL</option>
							<option value="Heri Baroway">HERI BAROWAY</option>
							<option value="Hans E Situmorang">HANS E SIUMORANG</option>
							<option value="Lip Heri Kurniawan">LIP HERI KURNIAWAN</option>
							<option value="Kristian Reiner">KRISTIAN REINER</option>
							<option value="Rully">RULLY</option>
				</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="job" name="job" placeholder="job">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="masuk_dc" name="masuk_dc" placeholder="masuk_dc">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="keluar_dc" name="keluar_dc" placeholder="keluar_dc">
				</div>
			</div>
			<div class="form-group">
					<div class="col-sm-10">
					<label class="control-label col-sm-2" for="pwd">Foto USER</label>
					  <input type="file" name="foto" class="form-control">
					</div>
			</div>
			<div class="form-group">
					<div class="col-sm-10">
					<label class="control-label col-sm-2" for="pwd">Foto PIC</label>
					  <input type="file" name="foto2" class="form-control">
					</div>
			</div>
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					 <button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
			</div>
			 <?php echo form_close(); ?>
	</body>
</html>