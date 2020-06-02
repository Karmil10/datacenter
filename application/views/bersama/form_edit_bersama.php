<html>
	<head>
		<title>Data ATM Bersama</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWsjIDZnLEWnxCjesWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>
	<body>
		
		<div class="row">
		<div class="col-lg-4">
		<h4>INPUT DATA ATM BERSAMA</h4>
		<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/bersama/do_update_bersama"; ?>" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Nik</label>
			    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Tanggal</label>
			    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggal; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Download Bersama Start</label>
			    <input type="Time" class="form-control" id="download_bersama_start" name="download_bersama_start"  value="<?php echo $download_bersama_start; ?>" required>
			    <input type="Time" class="form-control" id="download_bersama_end" name="download_bersama_end" value="<?php echo $download_bersama_end; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Upload Bersama</label>
			    <input type="Time" class="form-control" id="upload_bersama_start" name="upload_bersama_start" value="<?php echo $upload_bersama_start; ?>" required>
			    <input type="Time" class="form-control" id="upload_bersama_end" name="upload_bersama_end" value="<?php echo $upload_bersama_end; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Batch_1</label>
			    <input type="Time" class="form-control" id="batch_1_start" name="batch_1_start" value="<?php echo $batch_1_start; ?>" required>
			    <input type="Time" class="form-control" id="batch_1_end" name="batch_1_end" value="<?php echo $batch_1_end; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Batch_2</label>
			    <input type="Time" class="form-control" id="batch_2_start" name="batch_2_start" value="<?php echo $batch_2_start; ?>" required>
			    <input type="Time" class="form-control" id="batch_2_end" name="batch_2_end" value="<?php echo $batch_2_end; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Batch_3</label>
			    <input type="Time" class="form-control" id="batch_3_start" name="batch_3_start" value="<?php echo $batch_3_start; ?>" required>
			    <input type="Time" class="form-control" id="batch_3_end" name="batch_3_end" value="<?php echo $batch_3_end; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Batch_4</label>
			    <input type="Time" class="form-control" id="batch_4_start" name="batch_4_start" value="<?php echo $batch_4_start; ?>" required>
			    <input type="Time" class="form-control" id="batch_4_end" name="batch_4_end" value="<?php echo $batch_4_end; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Batch_5</label>
			    <input type="Time" class="form-control" id="batch_5_start" name="batch_5_start" value="<?php echo $batch_5_start; ?>" required>
			    <input type="Time" class="form-control" id="batch_5_end" name="batch_5_end" value="<?php echo $batch_5_end; ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Remaks</label>
			    <select class="form-control" id="remaks" name="remaks">
			    			<option value="Succes">Succes</option>
							<option value="Failed">Failed</option>
				</select>
				</div>
			</div>
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					 <button type="submit"class="btn btn-success btn-flat" name="add"><i class="fa fa-paper-plane"></i> simpan</button>
					<button type="reset"class="btn btn-flat btn-warning"><i class="fa fa-genderless"></i> Reset</button>
					<title>Data ATM Bersama</title>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>