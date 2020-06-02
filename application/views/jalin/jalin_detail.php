<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title></title>
		</head>
		<body>
			
			<b>
				<u>PROCESS BATCH JALIN</u> 
			
			</b>
			<hr>
		<?php foreach($data as $d){ 
		if($d['remaks'] = "succes"){
		 $c = "OK";
		}else{
		 $c = "NOT OK";
		}
		?>
				<table class="" cellspacing=0 border=1>
		<u> tanggal Proses : <?php echo $d['tanggal']; ?></u>
					<tbody>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>NO</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>TASK</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>START</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>USER</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" colspan=2>
								<nobr>DURATION
									
									<br />
								
								</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border-left:1px solid;border-top:1px solid;border-left-color:#000000;border-top-color:#000000;min-width:50px" rowspan=2>
								<nobr>RESULT</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>REMARK</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>PIC</nobr>
							</td>
						</tr>
						<tr style="height:22px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border-left:1px solid;border-right:1px solid;border-top:1px solid;border-bottom:double;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>START</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#C0C0C0;color:#000000;font-weight:bold;border-left:1px solid;border-right:1px solid;border-top:1px solid;border-bottom:double;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>FINISH</nobr>
							</td>
						</tr>
						<tr style="height:41px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-top:double;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;min-width:50px" rowspan=2>
								<nobr>0</nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-bottom:1px solid;border-left-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Download File &quot;H-MP-CBC YYMMDD.zip&quot; from https://13.131.7.40/ICBC/</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>04:00PM</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-bottom:1px solid;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>ICBuser</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['download_jalin_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['download_jalin_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:68px;">
							<td style="font-family:Calibri;font-size:10px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-bottom:1px solid;border-left-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Extract  &quot;H-MP-CBC YYMMDD.zip&quot;  and Upload the &ldquo;CBC-Transaction-Data-MP-YYMMDD.txt&rdquo; create new folder to sftp:/123.64.1.211/home/gcfbatch/jalin/linkfile/yyyymmdd/</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-bottom:1px solid;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>gcfbatch</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['upload_jalin_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['upload_jalin_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:40px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>1</nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Process Batch &quot;Affirm yesterday settlement files were sended by GTP&quot;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=4>
								<nobr>04:00PM</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-right-color:#000000;border-top-color:#000000;min-width:50px" rowspan=5>
								<nobr>gcfbatch</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_1_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_1_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>2</nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Process Batch &quot;Settlement files process&quot;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_2_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_2_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>3</nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Process Batch &quot;Data clear after batch processing&quot;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_3_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_3_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>4</nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Process Batch &quot;Database backup after batch processing&quot;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_4_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_4_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:40px;">
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>5</nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Process Batch &quot;Affirm today settlement files were sended by GTP&quot;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>04:05PM</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_5_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['batch_5_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:11px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
				<hr>
				</body>
			</html>