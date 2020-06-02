<html>
	<head>
		<title>Data Mahasiswa</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
		<div class="col-lg-4">
		<form id="register" >
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">code</label>
			    <input type="text" class="form-control" id="code" name="code" >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">id</label>
			    <input type="text" class="form-control" id="id" name="id" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">nama</label>
			    <input type="text" class="form-control" id="nama" name="nama"  required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
				<label for="">departemen</label>
			    <input type="text" class="form-control" id="departemen" name="departemen" required>
				</div>
			</div>
			<div id="my_camera">
			</div>
			<br>
			<hr>
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					 <button type="submit"class="btn btn-success btn-flat" name="add"><i class="fa fa-paper-plane"></i> Simpan</button>
					<button type="reset"class="btn btn-flat btn-warning"><i class="fa fa-genderless"></i> Reset</button>
					</div>
				</div>
			</div>
		</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
	<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script type="text/javascript">
		$('#register').on('submit', function (event) {
			event.preventDefault();
			var image = '';
			var code = $('#code').val();
			var id = $('#id').val();
			var nama = $('#nama').val();
			var departemen = $('#departemen').val();
			Webcam.snap( function(data_uri) {
				image = data_uri;
			});
			$.ajax({
				url: '<?php echo base_url("tamu/save");?>',
				type: 'POST',
				dataType: 'json',
				data: {id: id, nama: nama, departemen: departemen, image:image},
			})
			.done(function(data) {
				if (data > 0) {
					alert('insert data sukses');
					$('#register')[0].reset();
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
			
		});
	</script>
	</body>
</html>