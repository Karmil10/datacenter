<table border="0" width="44%" height="456" align="center">
	<tr>
		<td>
		<table border="1" width="100%" height="480" style="border-width: 0px">
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $code; ?>">
			<tr>
				<td colspan="3" height="24" style="border-style: none; border-width: medium">
				<p align="center" style="color:blue;font-size:23px;"><u><b>MOHON FOTO DIRI DAN KTP/SIM</b></u></td>
			</tr><br>
			<tr>
				<td colspan="3" height="131" style="border-style: none; border-width: medium" align="center">
				<img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $code; ?>.png" width="720" height="420"></td>
			</tr>
			</table>
			<br><br/>
			<p><a class="btn btn-primary btn-xs" href="<?php echo base_url()."tamu2/view_tt/".$code; ?>"></i><b>Simpan</b></button><a></a>&nbsp;<a class="btn btn-primary btn-xs" href="<?php echo base_url()."tamu2/delete_foto/".$code; ?>"></i><b>Delete</b></button></p></a>
			<p>&nbsp;</p>
		</td>
	</tr>
</table>


<!-- Code to signature and displaying it locally -->
		


