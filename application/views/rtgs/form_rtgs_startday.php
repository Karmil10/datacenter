    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Proses Start day RTGS</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

          <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Proses Start day RTGS</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="70%" cellspacing="0">
       <tr>
        <th class="text-center">NIK</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Tanggal</th>
        <th class="text-center">(Awal hari RTGS) start</th>
        <th class="text-center">(Awal hari RTGS) end</th>
         <th class="text-center">Action</th>
      </tr>
    <?php foreach($data as $d){ ?>
      <tr>
        <td class="text-center"><?php echo $d['nik']; ?></td>
        <td class="text-center"><?php echo $d['nama']; ?></td>
        <td class="text-center"><?php echo $d['tanggal']; ?></td>
        <td class="text-center"><?php echo $d['cek_depo_web_start']; ?></td>
        <td class="text-center"><?php echo $d['tes_login_rtgs_end']; ?></td>
        <td class="text-center">
          <script>
          function ConfirmDelete()
          {
          confirm("Apakah Kamu Yakin Akan Menghapus");
          }
          </script>
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/rtgs/edit_data_rtgs_startday/".$d["id"]; ?>" title="Edit">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
          </a> ||
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/rtgs/do_delete_rtgs_startday/".$d['id']; ?>" title="Delete" Onclick="ConfirmDelete()" >
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Delete
          </a>
        </td>
      </tr>
      <?php } ?>
    <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/rtgs/insert_rtgs_startday"; ?>"  title="Tambah">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>add data
    </a>
                </table>
            </div>
        </div>
         </div>
          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->