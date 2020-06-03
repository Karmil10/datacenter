<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<?php echo "<h2>".$this->session->flashdata('pesan','tambah data sukses')."</h2>" ?>
		<table border="1" style="border-collapse:collapse; ">
			<tr style="background:gray;">
				<th>No Induk</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
		<?php foreach($data as $d){ ?>
			<tr>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td align="center">
					<a href="<?php echo base_url()."index.php/web/edit_data/".$d["nim"]; ?>">Edit</a> ||
					<a href="<?php echo base_url()."index.php/web/do_delete/".$d['nim']; ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</table>
		<a href="<?php echo base_url()."index.php/web/insert"; ?>">Tambah Data</a>
	</body>
</html>
