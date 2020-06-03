<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>MOHON ISI FORM DI BAWAH INI</title>
</head>

<body>

<table border="0" width="44%" height="456" align="center">
	<tr>
		<td>
		<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/tamu/do_update_tamu"; ?>" class="form-horizontal">
		<table border="1" width="100%" height="480" style="border-width: 0px">
			<input type="hidden" class="form-control" id="code" name="code" value="<?php echo $code; ?>">
			<tr>
				<td colspan="3" height="24" style="border-style: none; border-width: medium">
				<p align="center">MOHON ISI FORM DI BAWAH INI</td>
			</tr>
			<tr>
				<td colspan="3" height="131" style="border-style: none; border-width: medium" align="center">
				<img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $image; ?> " width="240" height="220">
				<input type="hidden" id="image "name="image" class="form-control" value="<?php echo $image; ?>">
			</div></td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">NO KTP/SIM</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="id" name="id"  size="25" class="form-control" value="<?php echo $id; ?>" required></td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">NAMA</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="nama" name="nama" size="25" class="form-control" value="<?php echo $nama; ?>" required></td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">PT/Dept/Institusi</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="departemen" name="departemen" size="25" class="form-control" value="<?php echo $departemen; ?>" required></td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">keperluan</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<select class="form-control" id="keperluan" name="keperluan">
				<option value="replace">replace</option>
				<option value="maintenance">maintenance</option>
				<option value="audit">Audit</option>
				<option value="replace">Barang Masuk</option>
				<option value="maintenance">Barang Keluar</option>
				<option value="audit"></option>
				<option value="replace"></option>
				<option value="maintenance">/option>
				<option value="audit"></option>
				</select>
				</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">tanggal</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<!-- <input type="date" id="tanggal" name="tanggal" size="25" class="form-control" required></td> -->
				<input type="text" id="tanggal" name="tanggal" size="20" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d G:i:s"); ?>" required></td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">Term &amp; Kondition</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="71%" style="border-style: none; border-width: medium">
				<textarea rows="12" name="S1" cols="78" ></textarea></td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium">&nbsp;</td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="checkbox" id="check_list[]" name="check_list[]" alt="Checkbox" value="Yes">Yes
				<input type="checkbox" id="check_list[]" name="check_list[]" alt="Checkbox" value="NO">NO</td>
			</tr>
			</table>
			<p><button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-paper-plane"></i> simpan</button>
		<button type="reset"class="btn btn-flat btn-warning"><i class="fa fa-genderless"></i> Reset</button></p>
			<p><a class="btn btn-primary btn-xs" href="<?php echo base_url()."tamu/back" ?>" title="next"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Back </a></p>
		</form>
		</td>
	</tr>
</table>
</body>

</html>
