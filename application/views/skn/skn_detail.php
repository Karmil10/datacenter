<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title></title>
		</head>
		<body>
	
			<b>
				<u>START OF DAY - DAILY BACKUP - END OF DAY BI-RTGS RUNSHEET</u> 
			
			</b>
			<hr>
			<?php foreach($data as $d){ 
		if($d['remaks'] = "succes"){
		 $c = "OK";
		}else{
		 $c = "NOT OK";
		}
		?>
				<table class="" cellspacing=0 border=0.5>
				<u> tanggal Proses : <?php echo $d['tanggal']; ?></u>
					<tbody>
						<tr style="height:30.666666666667px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>NO</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>TASK</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>START</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>USER</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" colspan=2>
								<nobr>DURATION</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>RESULT</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>REMARK</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px" rowspan=2>
								<nobr>PIC</nobr>
							</td>
						</tr>
						<tr style="height:32px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>START</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>FINISH</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#C0C0C0;color:#000000;font-weight:bold;border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-left-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>OK</nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>1</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Checking Service BI DEPO_WEB</nobr>
							</td>
							<td style="min-width:50px" rowspan=4>
								<nobr>06:00 AM</nobr>
							</td>
							<td style="min-width:50px" rowspan=4>
								<nobr></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-bottom:1px solid;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['export_depo_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['export_depo_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;border-left-color:#000000;border-right-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-right-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-left:1px solid;border-right:1px solid;border-left-color:#000000;border-right-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>2</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Checking Service BI DEPO_RTSX</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['cek_depo_rtsx_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['cek_depo_rtsx_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>3</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Checking Service BI DEPO_TRADX</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['cek_depo_tradx_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['cek_depo_tradx_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:30px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>4</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Test Login User ICBKIDJA001 to Website RTGS Gen2
									
									<br />
(Open browser to IP http://123.64.34.11:4441)
								
								</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['tes_login_rtgs_start']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['tes_login_rtgs_end']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $c; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['remaks']; ?></nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr><?php echo $d['nama']; ?></nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>5</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Running  EXPORT_DEPO.bat</nobr>
							</td>
							<td style="min-width:50px" rowspan=4>
								<nobr>20:15 PM</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;border-left:1px solid;border-right:1px solid;border-left-color:#000000;border-right-color:#000000;min-width:50px" rowspan=4>
								<nobr>orcl</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
						</tr>
						<tr style="height:21px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>6</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Running  EXPORT_RTGS.bat</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
						</tr>
						<tr style="height:30px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>7</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Checking backup result to 
									
									<br />
C:\App\Administrator\admin\orcl\dpdump
								
								</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
						</tr>
						<tr style="height:30px;">
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>8</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>Copy file EXPORT_DEPO.bat and EXPORT_RTGS.bat to 
									
									<br />
E:\backup\BACKUP_DATABASE
								
								</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;font-size:8px;background-color:#FFFFFF;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
							<td style="font-family:Calibri;text-align:center;font-size:8px;background-color:#FFFFFF;color:#000000;border:1px solid;border-left-color:#000000;border-right-color:#000000;border-top-color:#000000;border-bottom-color:#000000;min-width:50px">
								<nobr>&nbsp;</nobr>
							</td>
						</tr>
					</tbody>
				</table>
				<hr>
				</body>
			</html>