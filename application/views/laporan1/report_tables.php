<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Laporan Pengunjung</h1>
         

          <!-- DataTales Example -->
          <!-- <div class="card shadow mb-4"> -->
           <!--  <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->
            <!-- <div class="card-body"> -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>No Visistor</th>
                      <th>Nama</th>
                      <th>Depertemen</th>
                      <th>Keperluan</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>No Visistor</th>
                      <th>Nama</th>
                      <th>Depertemen</th>
                      <th>Keperluan</th>
                      <th>Foto</th>
                    </tr>
                  </tfoot>
                  <?php 

            $no = 1;

           foreach($dc_access_log as $d) { ?>

            <tbody>
            <tr>
                <td><?php echo $no++ ;?></td>
                <td><?php echo $d->tanggal ?></td>
                <!-- <td><?php echo $tm->code ?></td> -->
                <td><?php echo $d->id ?></td>
                <td><?php echo $d->nama ?></td>
                <td><?php echo $d->departemen ?></td>
                <td><?php echo $d->keperluan ?></td>
                <td>
                    <img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $d->image; ?>" width="150" height="110" >
                </td>
               
                
               
            </tr>
            </tbody>

<?php } ?>
                  <!--  -->
                </table>
              </div>
            <!-- </div> -->
          <!-- </div> -->

        </div>