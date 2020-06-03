          <table class="table table-bordered" id="dataTable" width="70%" cellspacing="0">
      <thead>
       <tr>
        <th class="text-center">ktp</th>
        <th class="text-center">Nama</th>
        <th class="text-center">perusahaan</th>
        <th class="text-center">Action</th>
      </tr>
      </thead>
    <?php foreach($data as $d){ ?>
      <tr>
        <td class="text-center"><?php echo $d['ktp']; ?></td>
        <td class="text-center"><?php echo $d['nama']; ?></td>
        <td class="text-center"><?php echo $d['perusahaan']; ?></td>
        <td class="text-center">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/edit_data_vendor/".$d["ktp"]; ?>" title="Edit">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
          </a> ||
          <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/do_delete_vendor/".$d['ktp']; ?>" title="Delete">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Delete
          </a> || <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/detail_vendor/".$d["ktp"]; ?>" title="detail">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> detail
        </td>
      </tr>
    <?php } ?>
    <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/insert_vendor"; ?>"  title="Tambah">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Tambah Data
    </a>
  </table>