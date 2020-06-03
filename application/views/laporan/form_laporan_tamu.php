<div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="40%" cellspacing="0">
      <form>
        <td>    id         : <?php echo $id; ?></td>
      <tr>
        <td>    Nama      : <?php echo $nama; ?></td>
      </tr>
      <tr>
        <td>    departemen      : <?php echo $departemen; ?></td>
       </tr>
       <tr>
        <td>    Keperluan      : <?php echo $keperluan; ?></td>
       </tr>
      <tr>
        <td><img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $image; ?>" width="480" height="320"></td>
      </tr>
      <tr>
        <td><img src="<?php echo base_url(); ?>ttd_image/<?php echo $img; ?>" width="480" height="320"></td>
      </tr>
    </form>
  </table>
  </div>
        </div>
         </div>
          </div>
        <!-- /.container-fluid -->

      </div>