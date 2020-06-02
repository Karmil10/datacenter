<table border="0" width="44%" height="456" align="center">
	<tr>
		<td>
		<form id="register" class="form-horizontal">
		<table border="1" width="100%" height="480" style="border-width: 0px">
			<input type="hidden" class="form-control" id="code" name="code" value="<?php echo random_string('alnum',16); ?>">
			<tr>
				<td colspan="3" height="24" style="border-style: none; border-width: medium">
				<p align="center"><u>MOHON ISI FORM DI BAWAH INI</u></td>
			</tr><br>
			<tr>
				<td colspan="3" height="131" style="border-style: none; border-width: medium" align="center">
				<div id="my_camera">
			</div></td>
			</tr>
	
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">NO KTP / SIM / NIK</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="id" name="id"  size="20" class="form-control" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">NAMA</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="nama" name="nama" size="20" class="form-control" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium"> PT / Dept / Institusi</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="departemen" name="departemen" size="20" class="form-control" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1">keperluan</label></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<select class="form-control" id="keperluan" name="keperluan" required>
				<option value="replace">replace</option>
				<option value="maintenance">maintenance</option>
				<option value="audit">Audit</option>
				<option value="Barang Masuk">Barang Masuk</option>
				<option value="Barang Keluar">Barang Keluar</option>
				</select>
				</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1">tanggal</label></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<!-- <input type="date" id="tanggal" name="tanggal" size="20" class="form-control" required></td> -->
				<input type="text" id="tanggal" name="tanggal" size="20" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d G:i:s"); ?>" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">Term &amp; Kondition</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="71%" style="border-style: none; border-width: medium">
				<textarea rows="12" name="S1" cols="78" readonly="">A. PENDAFTARAN

1. Silahkan membawa tanda pengenal yang sudah ter-validasi 
      (KTP, SIM, Passport atau ID Card kantor)
   2. Melapor ke security Data Center untuk mendapatkan akses pintu masuk.
   3. Mengisi ceklis tanda tangan di tim security Data Center untuk keperluan reporting.
   4. Login melalui Intranet dengan Login User yang sudah ada. </textarea></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1">Persetujuan</label></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<select class="form-control" id="check_list" name="check_list" required>
				<option value="YES">YES</option>
				<option value="NO">NO</option>
				</select>
				</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			</table>
			

<script>
function myFunction() {
  alert("Data Berhasil Di input, Tekan Ok Untuk Capture Foto");
  setTimeout(function(){ window.location="view_tamu";});
}
</script>

			<p><button type="submit" class="btn btn-primary" onclick="myFunction()"></i>Simpan</button></p>
			<p>&nbsp;</p>
		</form>
		</td>
	</tr>
</table>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('bootstrap/js/webcam.js') ?>"></script>
	<script language="JavaScript">
		Webcam.set({
			width: 720,
			height: 420,
			image_format: 'png',
			jpeg_quality: 100
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
			var keperluan = $('#keperluan').val();
			var tanggal = $('#tanggal').val();
			var check_list = $('#check_list').val();
			Webcam.snap( function(data_uri) {
				image = data_uri;
			});
			$.ajax({
				url: '<?php echo base_url("tamu/save");?>',
				type: 'POST',
				dataType: 'json',
				data: {code: code, id: id, nama: nama, departemen: departemen, keperluan: keperluan, tanggal: tanggal, check_list:check_list, image:image},
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

