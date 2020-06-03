          <table class="table table-bordered" id="dataTable" width="70%" cellspacing="0">
		  <?php echo $this->session->flashdata('message'); ?>
      <thead>
       <tr>
        <th class="text-center">id</th>
        <th class="text-center">Nama</th>
        <th class="text-center">departemen</th>
        <th class="text-center">Action</th>
      </tr>
      </thead>
    <?php foreach($data as $d){ ?>
      <tr>
        <td class="text-center"><?php echo $d['id']; ?></td>
        <td class="text-center"><?php echo $d['nama']; ?></td>
        <td class="text-center"><?php echo $d['departemen']; ?></td>
        <td class="text-center">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/edit_data_karyawan/".$d["id"]; ?>" title="Edit">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
          </a> ||
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/do_delete_karyawan/".$d['id']; ?>" title="Delete">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Delete
          </a> || <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/detail_karyawan/".$d["id"]; ?>" title="detail">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> detail
		  </a> || <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/add_data_dco/".$d["id"]; ?>" title="masukdc">
			<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> masuk DC
			</a> 
        </td>
      </tr>
    <?php } ?>
    <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/insert_karyawan"; ?>"  title="Tambah">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Tambah Data
    </a>
  </table>