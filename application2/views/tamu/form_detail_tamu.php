   <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Detail Log Akses DC</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="40%" cellspacing="0">
        <tr>
        <td width="10%" style="border-style: none; border-width: medium">ID</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <?php echo $id; ?></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">NAMA</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <?php echo $nama; ?></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">DEPARTEMEN</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <?php echo $departemen; ?></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">KEPERLUAN</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <?php echo $keperluan; ?></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">REMAKS</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <?php echo $remaks; ?></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">TANGGAL</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <?php echo $tanggal; ?></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">JAM</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <?php echo $jam1; ?></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">FOTO</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $code; ?>.png" width="480" height="320"></td>
       </tr>
       <tr>
        <td width="10%" style="border-style: none; border-width: medium">TANDA TANGAN</td>
        <td width="2%" align="center" style="border-style: none; border-width: medium"><b>:</b></td>
        <td width="40" style="border-style: none; border-width: medium">
         <img src="<?php echo base_url(); ?>ttd_image/<?php echo $img; ?>" width="480" height="320"></td>
       </tr>
  </table>
  </div>
        </div>
         </div>
          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->