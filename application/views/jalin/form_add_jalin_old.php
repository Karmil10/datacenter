<html>
	<head>
		<title>Data GAML</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWsjIDZnLEWnxCjesWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>
	<body>
		
		<div class="row">
		<div class="col-lg-4">
		<h4>Input Data Link switching</h4>
		<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/jalin/add_data_jalin"; ?>" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-10">
			    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo random_string('alnum',16); ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Nik</label>
			    <input type="text" class="form-control" id="nik" name="nik" required >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama" required >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Tanggal</label>
			    <input type="date" class="form-control" id="tanggal" name="tanggal" required >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Download File "H-MP-CBC YYMMDD.zip" from https://13.131.7.40/ICBC/</label>
				<?php echo "start" ?>
			    <input type="Time" class="form-control" id="download_jalin_start" name="download_jalin_start" required  >
			    <?php echo "end" ?>
			    <input type="Time" class="form-control" id="download_jalin_end" name="download_jalin_end" required  >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Extract "H-MP-CBC YYMMDD.zip" and Upload the “CBC-Transaction-Data-MP-YYMMDD.txt” create new folder to sftp:/123.64.1.211/home/gcfbatch/jalin/linkfile/yyyymmdd/</label>
				<?php echo "start" ?>
			    <input type="Time" class="form-control" id="upload_jalin_start" name="upload_jalin_start" required  >
			    <?php echo "end" ?>
			    <input type="Time" class="form-control" id="upload_jalin_end" name="upload_jalin_end" required  >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Process Batch "Affirm yesterday settlement files were sended by GTP"</label>
				<?php echo "start" ?>
			    <input type="Time" class="form-control" id="batch_1_start" name="batch_1_start" required  >
			    <?php echo "end" ?>
			    <input type="Time" class="form-control" id="batch_1_end" name="batch_1_end" required  >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Process Batch "Settlement files process"</label><br>
				<?php echo "start" ?>
			    <input type="Time" class="form-control" id="batch_2_start" name="batch_2_start"  required  >
			    <?php echo "end" ?>
			    <input type="Time" class="form-control" id="batch_2_end" name="batch_2_end" required  >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">	Process Batch "Data clear after batch processing"</label><br>
				<?php echo "start" ?>
			    <input type="Time" class="form-control" id="batch_3_start" name="batch_3_start" required  >
			    <?php echo "end" ?>
			    <input type="Time" class="form-control" id="batch_3_end" name="batch_3_end" required  >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Process Batch "Database backup after batch processing"</label><br>
				<?php echo "start" ?>
			    <input type="Time" class="form-control" id="batch_4_start" name="batch_4_start" required  >
			    <?php echo "end" ?>
			    <input type="Time" class="form-control" id="batch_4_end" name="batch_4_end" required  >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">Process Batch "Affirm today settlement files were sended by GTP"</label><br>
				<?php echo "start" ?>
			    <input type="Time" class="form-control" id="batch_5_start" name="batch_5_start" required  >
			    <?php echo "end" ?>
			    <input type="Time" class="form-control" id="batch_5_end" name="batch_5_end" required  >
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
					<title>Data GAML</title>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>