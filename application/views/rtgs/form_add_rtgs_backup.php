<html>

<head>
<meta http-equiv="Content-Type" content="time/html; charset=windows-1252">
<title>Backup RTGS</title>
</head>

<body>
		<u><b>
<a>Proses Backup RTGS</a
></b></u>
<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/rtgs/add_data_rtgs_backup"; ?>" class="form-horizontal">
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
		<td height="24" width="19" align="center">2.</td>
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
		<td width="355">Running  EXPORT_DEPO.bat</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="export_depo_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="export_depo_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">5.</td>
		<td width="355">Running  EXPORT_RTGS.bat</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="export_rtgs_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="export_rtgs_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">6.</td>
		<td width="355">Checking backup result</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="cek_result_backup_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="cek_result_backup_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">7.</td>
		<td width="355">Copy file EXPORT_DEPO.bat and EXPORT_RTGS.bat</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="copy_file_backup_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="copy_file_backup_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">11.</td>
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