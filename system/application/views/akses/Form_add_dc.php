<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<div class="row">
		<div class="col-lg-4">
		<?php echo form_open_multipart('web/add_data_dc'); ?>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="id" name="id" placeholder="id">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Perusahaan">
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
							<option value="Lip Heri Kurniawan">IIP HERY KURNIAWAN</option>
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
					<label class="control-label col-sm-2" for="pwd">KTP   SIM</label>
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