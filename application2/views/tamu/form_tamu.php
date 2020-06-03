            <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Log Akses Data Center</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
       <tr>
        <th class="text-center">Tanggal</th>
        <th class="text-center">Jam</th>
        <th class="text-center">id</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Departemen</th>
        <th class="text-center">keperluan</th>
        <th class="text-center">Term & Condision</th>
        <th class="text-center">Action</th>
      </tr>
     </thead>
    <tbody >
    <?php foreach($data as $d){ ?>
      <tr>
        <td class="text-center"><?php echo $d['tanggal']; ?></td>
        <td class="text-center"><?php echo $d['jam1']; ?></td>
        <td class="text-center"><?php echo $d['id']; ?></td>
        <td class="text-center"><?php echo $d['nama']; ?></td>
        <td class="text-center"><?php echo $d['departemen']; ?></td>
        <td class="text-center"><?php echo $d['keperluan']; ?></td>
        <td class="text-center"><?php echo $d['check_list']; ?></td>
        <td class="text-center">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."tamu/edit_tamu/".$d["code"]; ?>" title="Edit">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
          </a> ||
          <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#logoutModal" title="Delete"> 
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Delete
          </a> ||
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."tamu/detail_tamu/".$d["code"]; ?>" title="Detail">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Detail
          </a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apa Anda yakin Untuk Menghapus data?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url()."tamu/delete_tamu/".$d["code"]; ?>">Delete</a>
        </div>
      </div>
    </div>
  </div>