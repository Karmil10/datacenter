<html>

<head>
<meta http-equiv="Content-Type" content="time/html; charset=windows-1252">
<title>Start Day RTGS</title>
</head>

<body>
		<u><b>
<a>Start Day RTGS</a
></b></u>
<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/rtgs/add_data_rtgs_startday"; ?>" class="form-horizontal">
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
		<td width="355">Checking Service BI DEPO_WEB</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="cek_depo_web_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="cek_depo_web_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">5.</td>
		<td width="355">Checking Service BI DEPO_RTSX</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="cek_depo_rtsx_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="cek_depo_rtsx_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">6.</td>
		<td width="355">Checking Service BI DEPO_TRADX</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="cek_depo_tradx_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="cek_depo_tradx_end" size="20" class="form-control" required></td>
	</tr>
	<tr>
		<td width="19" align="center">7.</td>
		<td width="355">Test Login to Website RTGS Gen2</td>
		<td width="28" align="center"><b>:</b></td>
		<td width="233"><input type="time" name="tes_login_rtgs_start" size="20" class="form-control" required></td>
		<td width="189"><input type="time" name="tes_login_rtgs_end" size="20" class="form-control" required></td>
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

 <div class="row">
          <!-- left column -->
          <div class="col-md-6">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text"  name="nik" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA</label>
                    <input type="text"  name="nama" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TANGGAL</label>
                    <input type="date"  name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text"  name="nik" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                 
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  	<div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
            <!-- /.card -->