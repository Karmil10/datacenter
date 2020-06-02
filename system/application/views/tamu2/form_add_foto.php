<table border="0" width="44%" height="456" align="center">
	<tr>
		<td>
		<form id="register" class="form-horizontal">
		<table border="1" width="100%" height="480" style="border-width: 0px">
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $code; ?>">
			<tr>
				<td colspan="3" height="24" style="border-style: none; border-width: medium">
				<p align="center" style="color:blue;font-size:23px;"><u><b>MOHON FOTO DIRI DAN KTP/SIM</b></u></td>
			</tr><br>
			<tr>
				<td colspan="3" height="131" style="border-style: none; border-width: medium" align="center">
				<div id="my_camera">
			</div></td>
			</tr>
			</table>
			

<script>
function myFunction() {
  setTimeout(function(){ window.location="view_foto2";});
}
</script>

			<p><button type="submit" class="btn btn-primary" onclick="myFunction()"></i><b>Capture</b></button></p>

			<p>&nbsp;</p>
		</form>
		</td>
	</tr>
</table>
		<script src="<?php echo base_url('bootstrap/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/popper.min.js') ?>" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('bootstrap/js/webcam.js') ?>"></script>
	<script language="JavaScript">
		Webcam.set({
			width: 1020,
			height: 720,
			image_format: 'png',
			jpeg_quality: 100,
		});
		Webcam.attach( '#my_camera' );
	</script>
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script type="text/javascript">
		$('#register').on('submit', function (event) {
			event.preventDefault();
			var image = '';
			var id = $('#id').val();
			Webcam.snap( function(data_uri) {
				image = data_uri;
			});
			$.ajax({
				url: '<?php echo base_url("tamu2/save");?>',
				type: 'POST',
				dataType: 'json',
				data: {id: id, image:image},
			})
			.done(function(data) {
				if (data >= 0) {
					alert('Data Tamu Berhasil Diinput');
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

<!-- Code to signature and displaying it locally -->
		


