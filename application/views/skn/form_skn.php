          <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">PROSES SOD & EOD SKN</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
         <td align="center">
      <table border="1" bordercolor="red">
      <tr>
        <td colspan="6">
        <p class="text-center">START OFF DAY SKN</p></td>
      </tr>
       <tr>
        <th class="text-center">Tanggal</th>
        <th class="text-center">NIK</th>
        <th class="text-center">Nama</th>
        <th class="text-center">(Awal hari) Start</th>
        <th class="text-center">(Awal hari) End</th>
      </tr>
    <?php foreach($tabel1 as $d){ ?>
      <tr>
        <td class="text-center"><?php echo $d['tanggal']; ?></td>
        <td class="text-center"><?php echo $d['nik']; ?></td>
        <td class="text-center"><?php echo $d['nama']; ?></td>
        <td class="text-center"><?php echo $d['sod_start']; ?></td>
        <td class="text-center"><?php echo $d['sod_end']; ?></td>
         <?php } ?>
      </tr>
    
    </table>
  </td>
  <td align="center">
    <table border="1" bordercolor="blue">
       <tr>
        <td colspan="6">
         <p class="text-center">END OFF DAY</p></td>
      </tr>
      <tr>
        <th class="text-center">Tanggal</th>
       <th class="text-center">NIK</th>
        <th class="text-center">Nama</th>
        <th class="text-center">(Akhir Hari) Start</th>
        <th class="text-center">(Akhir Hari) End</th>
        <th class="text-center">Action</th>
      </tr>
    <?php foreach($tabel2 as $c){ ?>
      <tr>
        <td class="text-center"><?php echo $d['tanggal']; ?></td>
        <td class="text-center"><?php echo $c['nik']; ?></td>
        <td class="text-center"><?php echo $c['nama']; ?></td>
        <td class="text-center"><?php echo $c['tutup_kredit_start']; ?></td>
        <td class="text-center"><?php echo $c['offline_end']; ?></td>
        <td class="text-center"><a href="#" title="Detail">Detail</a></td>
         <?php } ?>
      </tr>
      </table>
    </td>
</tr>
    <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/skn/view_skn_sod"; ?>"  title="Tambah">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Skn SOD
    </a>|||<a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/skn/view_skn_eod"; ?>"  title="Tambah">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Skn EOD
    </a><u><br></br></u>
                </table>
            </div>
        </div>
         </div>
          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->