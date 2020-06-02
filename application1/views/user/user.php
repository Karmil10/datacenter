<h1>Ini Halaman Dashboard User</h1>


<?php echo $this->session->flashdata('pesan'); ?>


<!-- Small boxes (Stat box) -->
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <br>

        <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA </th>
                  <th>TANGGAL</th>
                  <th>PURPOSE</th>
                  <th>lOKASI</th>
                  <th>IN </th>
                  <th>OUT</th>
                  <th>BELONGINGS</th>
                  <th>REMARK</th>
                  <th>STATUS</th>
                  <!-- <th>AKSI</th> -->
                  <!-- <th>JURUSAN</th> -->
                <!-- <th colspan="2">AKSI</th> -->
            </tr>
                </thead>
                <tbody>
                <?php 

                  $no = 1;
                  foreach ($tbl_ijin as $ij) : ?>
                  <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $ij->nama_tamu ?></td>
                        <td><?php echo $ij->lokasi ?></td>
                        <td><?php echo $ij->purpose ?></td>
                        <td><?php echo $ij->lokasi ?></td>
                        <td><?php echo $ij->in ?></td>

                        <td><?php echo $ij->out ?></td>
                        <td><?php echo $ij->belongings ?></td>
                        <td><?php echo $ij->remark ?></td>
                        <?php 
                        if ($ij->status == 1 ) {  ?>
                          <!-- <td><?php echo anchor ('user/detail/'.$ij->id_ijin,'<div class="btn btn-danger btn-sm">Belum Di Approved</div>'); ?></td> -->

                          <td><a href="<?= base_url('user/user/approved/'.$ij->id_ijin,) ?>" class="btn btn-sm btn-danger btn-lg active" role="button" aria-pressed="true">Belum Di Approved</a></td>

                               <?php } else { ?>
                               


                         <td><a href="#" class="btn btn-sm btn-success btn-lg disabled" role="button" aria-disabled="true">Sudah Di Approved</a></td>
                        

                         

                    
                       <?php } ?>
                      
                       

                   
                    
                     
                      
                      <!-- <td><?php echo anchor('USER/warga/detail/'.$ij->id_warga,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td> -->
                      <!-- <td onclick="javascript: return confirm('Anda Yakin?')"><?php echo anchor('administrator/warga/hapus/'.$ij->id_ijin, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> -->
                      <!-- <td><?php echo anchor('administrator/ijin/edit/'.$ij->id_ijin,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->

                  </tr>
                  <?php endforeach ; ?>
                <tfoot>
                <tr>
                  <th>NO</th>
                  <th>NAMA </th>
                  <th>TANGGAL</th>
                  <th>PURPOSE</th>
                  <th>lOKASI</th>
                  <th>IN </th>
                  <th>OUT</th>
                  <th>BELONGINGS</th>
                  <th>REMARK</th>
                   <th>STATUS</th>
                   <!-- <th>AKSI</th> -->
                  <!-- <th>JURUSAN</th> -->
                <!-- <th colspan="2">AKSI</th> -->
            </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

          
