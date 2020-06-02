          <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Link Switching</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="70%" cellspacing="0">
		  <?php echo $this->session->flashdata('message'); ?>
       <tr>
        <th class="text-center">NIK</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Tanggal</th>
        <th class="text-center">start</th>
        <th class="text-center">End</th>
        <th class="text-center">Action</th>
      </tr>
    <?php foreach($data as $d){ ?>
      <tr>
        <td class="text-center"><?php echo $d['nik']; ?></td>
        <td class="text-center"><?php echo $d['nama']; ?></td>
        <td class="text-center"><?php echo $d['tanggal']; ?></td>
        <td class="text-center"><?php echo $d['download_jalin_start']; ?></td>
        <td class="text-center"><?php echo $d['batch_5_end']; ?></td>
        <td class="text-center">
          <script>
          function ConfirmDelete()
          {
          confirm("Apakah Kamu Yakin Akan Menghapus");
          }
          </script>
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/jalin/edit_data_jalin/".$d["id"]; ?>" title="Edit">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
          </a> ||
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/jalin/do_delete_jalin/".$d['id']; ?>" title="Delete" Onclick="ConfirmDelete()">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Delete
          </a> || <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/jalin/detail_jalin/".$d['id']; ?>" title="Detail">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Detail
          </a>
        </td>
      </tr>
    <?php } ?>
    <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/jalin/insert_jalin"; ?>"  title="Tambah">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Tambah Data
    </a>
                </table>
            </div>
        </div>
         </div>
          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->