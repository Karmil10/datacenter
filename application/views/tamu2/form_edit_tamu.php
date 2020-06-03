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
		<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/tamu2/update_tamu"; ?>" class="form-horizontal">
		<table border="1" width="100%" height="480" style="border-width: 0px">
			<input type="hidden" class="form-control" id="code" name="code" value="<?php echo $code; ?>">
			<tr>
				<td colspan="3" height="24" style="border-style: none; border-width: medium">
				<p align="center">MOHON ISI FORM DI BAWAH INI</td>
			</tr>
			<tr>
				<td colspan="3" height="131" style="border-style: none; border-width: medium" align="center">
				<img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $image; ?> " width="500" height="350">
				<input type="hidden" id="image "name="image" class="form-control" value="<?php echo $image; ?>">
			</div></td>
			</tr>
			<tr>
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
				<input type="text" id="id" name="id"  size="20" class="form-control" value="<?php echo $id; ?>" required></td>
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
				<input type="text" id="nama" name="nama" size="20" class="form-control" value="<?php echo $nama; ?>" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">PT / Dept / Institusi</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<input type="text" id="departemen" name="departemen" size="20" class="form-control" value="<?php echo $departemen; ?>" required></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td width="23%" style="border-style: none; border-width: medium">Keperluan</td>
				<td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
				<td width="71%" style="border-style: none; border-width: medium">
				<select class="form-control" id="keperluan" name="keperluan">
				<option value="replace">replace</option>
				<option value="maintenance">maintenance</option>
				<option value="audit">Audit</option>
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
				<td width="23%" style="border-style: none; border-width: medium">Tanggal</td>
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

1.Masukkan data pribadi anda yang sesuai dengan identitasi diri anda atau perusahaan (KTP/SIM/Kartu Pelajar/Paspor/Domisili Kantor).
 </textarea>
			</td>
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
				<select class="form-control" id="check_list" name="check_list">
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
			<p><button type="submit" class="btn btn-primary" ></i> Simpan</button></p>
			<p>&nbsp;</p>
		</form>
		</td>
	</tr>
</table>
</body>

</html>
