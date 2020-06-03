		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			 <tr>
				<th class="text-center">id</th>
				<th class="text-center">Nama</th>
				<th class="text-center">departemen</th>
				<th class="text-center">PIC</th>
				<th class="text-center">JOB</th>
				<th class="text-center">T</th>
				<th class="text-center">Jam Masuk</th>
				<th class="text-center">Jam keluar</th>
				<th class="text-center">Foto User</th>
				<th class="text-center">Foto PIC</th>
				<th class="text-center">Action</th>
			</tr>
			</thead>
		<?php foreach($data as $d){ ?>
			<tr>
				<td class="text-center"><?php echo $d['id']; ?></td>
				<td class="text-center"><?php echo $d['nama']; ?></td>
				<td class="text-center"><?php echo $d['departemen']; ?></td>
				<td class="text-center"><?php echo $d['pic']; ?></td>
				<td class="text-center"><?php echo $d['job']; ?></td>
				<td class="text-center"><?php echo $d['tanggal']; ?></td>
				<td class="text-center"><?php echo $d['jam_masuk']; ?></td>
				<td class="text-center"><?php echo $d['jam_keluar']; ?></td>
				<td class="text-center"><img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $d['foto_user'] ?>" width="90" height="110"></td>
				<td class="text-center"><img src="<?php echo base_url(); ?>foto_karyawan/<?php echo $d['foto_pic'] ?>" width="90" height="110"></td>
				<td class="text-center">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/edit_data_dc/".$d["id"]; ?>" title="Edit">
						<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
					</a> ||
					<a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/do_delete_dc/".$d['id']; ?>" title="Delete">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Delete
					</a> || <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/add_data_dco/".$d["id"]; ?>" title="add">
						<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> add
					</a> 
				</td>
			</tr>
		<?php } ?>
		<a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web/vendor"; ?>"  title="vendor">
		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Vendor
		</a> || <a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/web"; ?>"  title="ICBC">
		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>ICBC
		</a>
		</table>
		