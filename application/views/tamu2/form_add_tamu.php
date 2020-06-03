<table border="0" width="44%" height="456" align="center">
	<tr>
		<td>
		<form class="form-horizontal" method="POST" action="<?php echo base_url()."tamu2/add_tamu2"; ?>" >
		<table border="1" width="100%" height="480" style="border-width: 0px">
			<input type="hidden" class="form-control" id="code" name="code" value="<?php echo random_string('alnum',16); ?>">
			<input type="hidden" class="form-control" id="status" name="status" value="<?php echo "VENDOR"; ?>">
			<input type="hidden" id="jam" name="jam" size="20" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d H:i:s"); ?>" required>
			<tr>
				<td colspan="3" height="24" style="border-style: none; border-width: medium">
				<p align="center" style="color:blue;font-size:23px;"><u><b>MOHON ISI FORM DI BAWAH INI</b></u></td>
			</tr><br>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><b>No. Visitor / NIK</b></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="id" name="id"  size="20" class="form-control" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><b>Nama</b></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="nama" name="nama" size="20" class="form-control" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><b>PT / Dept / Institusi</b></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>

			
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="departemen" name="departemen" size="20" class="form-control" required></td> 
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1"><b>Keperluan</b></label></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1"></label></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b></b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<select class="form-control" id="keperluan" name="keperluan" required>
				<option value="replace">Replace</option>
				<option value="maintenance">Maintenance</option>
				<option value="audit">Audit</option>
				<option value="Barang Masuk">Barang Masuk</option>
				<option value="Barang Keluar">Barang Keluar</option>
				</select>
				</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><b>Remaks</b></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="71%" style="border-style: none; border-width: medium">
				<textarea  id="remaks" name="remaks" cols="120" rows="8" ></textarea></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1"><b>Tanggal</b></label></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1"></label></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="tanggal" name="tanggal" size="20" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d"); ?>"  readonly=""></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1"><b>Jam</b></label></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1"></label></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="jam1" name="jam1" size="20" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("H:i:s"); ?>"  readonly=""></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="50%" style="border-style: none; border-width: medium"><b>Term &amp; Kondition</b></td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="71%" style="border-style: none; border-width: medium">
				<textarea rows="8" name="S1" cols="120" readonly="">

   1. Silahkan membawa tanda pengenal yang sudah ter-validasi 
      (KTP, SIM, Passport atau ID Card kantor)
   2. Melapor ke security Data Center untuk mendapatkan akses pintu masuk.
   3. Mengisi ceklis tanda tangan di tim security Data Center untuk keperluan reporting.
   4. Login melalui Intranet dengan Login User yang sudah ada.
 </textarea></td>
			</tr>
			<tr>
				<td width="50%" style="border-style: none; border-width: medium"><label for="exampleFormControlInput1"></label></td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b></b></td>
				<td width="80%" style="border-style: none; border-width: medium">
				<input type="hidden" id="check_list" name="check_list" value="Yes">
			</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			</table>
			

<!-- <script>
function myFunction() {
  alert("Data Berhasil Di input, Tekan Ok Untuk Capture Foto");
  setTimeout(function(){ window.location="view_foto";});
}
onclick="myFunction()" 
</script> -->

			<p><button type="submit" class="btn btn-primary"  name="add" ></i><b>Simpan</b></button>
			 <a class="btn btn-primary btn-xs" href="<?php echo base_url()."tamu2/kembali"; ?>"  title="Kembali">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Kembali
    </a></p>

			<p>&nbsp;</p>
		</form>
		</td>
	</tr>
</table>
		

<!-- Code to signature and displaying it locally -->
		


