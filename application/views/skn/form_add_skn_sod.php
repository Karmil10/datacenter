<html>

<head>
<meta http-equiv="Content-Type" content="time/html; charset=windows-1252">
<title></title>
</head>

<body>
		<u><b>
<a>START OFF DAY SKN</a
></b></u>
<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/skn/add_data_skn_sod"; ?>" class="form-horizontal">
<table border="0" width="51%">
	<input type="hidden" class="form-control" id="id" name="id" value="<?php echo random_string('alnum',16); ?>">
	<tr>
		<td width="19" align="center">1.</td>
		<td width="355">NIK</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="427" colspan="2"><input type="text" name="nik" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td height="24" width="19" align="center">2.</td>
		<td height="24" width="355">Nama</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="427" height="24" colspan="2"><input type="text" name="nama" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td height="24" width="19" align="center">3.</td>
		<td height="24" width="355">Tanggal</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="427" height="24" colspan="2"><input type="date" name="tanggal" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center"></td>
		<td width="355"></td>
		<td width="28" align="center"><b></b></td>
		<td width="233">Start Time</td>
		<td width="189">End Time</td>
	</tr>
	<tr>
		<td width="19" align="center">4.</td>
		<td width="355">Proses Online Ke SSK</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="sod_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="sod_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">5.</td>
		<td width="355">Proses Awal Hari (Kliring Kredit)</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="kredit_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="kredit_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">6.</td>
		<td width="355">Buka Layanan Kliring Kredit Individual</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="buka_kredit_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="buka_kredit_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">7.</td>
		<td width="355">Proses Awal Hari (Kliring Debet)</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="debet_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="debet_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">8.</td>
		<td width="355">Buka Layanan Kliring Penyerahan Individual</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="serah_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="serah_end" size="20" class="form-control"  required></td>
	</tr>
	<tr>
		<td width="19" align="center">9.</td>
		<td width="355">Buka Layanan Kliring Pengembelian Individual</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="beli_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="beli_end" size="20" class="form-control" required></td>
	</tr>
		<tr>
		<td width="19" align="center">10.</td>
		<td width="355">Remaks</td>
		<td width="28" align="center"><b>:</b></td>
		<td>
		<select class="form-control" id="remaks" name="remaks">
		<option value="Succes">Succes</option>
		<option value="Failed">Failed</option>
		</select>
		</td>
		</td>
	</tr>
<tr>
		<td width="19" align="center">&nbsp;</td>
		<td width="355">&nbsp;</td>
		<td width="28" align="center"><b>&nbsp;</b></td>
		<td width="233">&nbsp;</td>
		<td width="189">&nbsp;</td>
	</tr>
</table>
<button type="submit"class="btn btn-success btn-flat" name="add"><i class="fa fa-paper-plane"></i> simpan</button>
<button type="reset"class="btn btn-flat btn-warning"><i class="fa fa-genderless"></i> Reset</button>
</form>
</body>

</html>