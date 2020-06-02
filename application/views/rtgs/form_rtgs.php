          

              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0 text-dark">Data Proses Start day RTGS</h1>
                    </div><!-- /.col -->
                    
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>


          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                    <table class="table table-bordered">
                      <tr>
                      <td align="center">
                    <table border="1" bordercolor="red">
                    <tr>
                      <td colspan="6">
                      <p class="text-center">RTGS Start Day</p></td>
                    </tr>
                     <tr>
                      <th class="text-center">Tanggal</th>
                      <th class="text-center">NIK</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">(Awal hari) start</th>
                      <th class="text-center">(Awal hari) end</th>
                    </tr>
                  <?php foreach($tabel1 as $d){ ?>
                    <tr>
                      <td class="text-center"><?php echo $d['tanggal']; ?></td>
                      <td class="text-center"><?php echo $d['nik']; ?></td>
                      <td class="text-center"><?php echo $d['nama']; ?></td>
                      <td class="text-center"><?php echo $d['cek_depo_web_start']; ?></td>
                      <td class="text-center"><?php echo $d['tes_login_rtgs_end']; ?></td>
                       <?php } ?>
                    </tr>
                  
                  </table>
                </td>
                <td align="center">
                  <table border="1" bordercolor="blue">
                     <tr>
                      <td colspan="6">
                       <p class="text-center">RTGS Backup</p></td>
                    </tr>
                    <tr>
                      <th class="text-center">Tanggal</th>
                     <th class="text-center">NIK</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">(Backup) start</th>
                      <th class="text-center">(Backup) end</th>
                      <th class="text-center">Action</th>
                    </tr>
                  <?php foreach($tabel2 as $c){ ?>
                    <tr>
                      <td class="text-center"><?php echo $c['tanggal']; ?></td>
                      <td class="text-center"><?php echo $c['nik']; ?></td>
                      <td class="text-center"><?php echo $c['nama']; ?></td>
                      <td class="text-center"><?php echo $c['export_depo_start']; ?></td>
                      <td class="text-center"><?php echo $c['copy_file_backup_end']; ?></td>
                      <td class="text-center"><a href="#" title="Detail">Detail</a></td>
                       <?php } ?>
                    </tr>
                    </table>
                  </td>
              </tr>
                  <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/rtgs/view_rtgs_startday"; ?>"  title="Tambah">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Rtgs Start day
                  </a>|||<a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/rtgs/view_rtgs_backup"; ?>"  title="Tambah">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Rtgs Backup
                  </a><u><br></br></u>
                              </table>
                          </div>
                      </div>
                       </div>
         
        <!-- /.container-fluid -->

    
      <!-- End of Main Content -->