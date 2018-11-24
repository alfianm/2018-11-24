<h1>PESAN</h1>

<table id="tabelpesan" class="table table-bordered table-striped">
	<tr>
		<td>No</td>
		<td>Nama Pengirim</td>
		<td>Kontak Pengirim</td>
		<td>Subject Pesan</td>
		<td>Isi Pesan</td>
		<td>Tanggal Kirim</td>
		<td>Action</td>
	</tr>
	<?php  
	$no = 1;
		foreach($data as $row){
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['nama_pengirimim'] ?></td>
		<td><?php echo $row['kontak_pengirim'] ?></td>
		<td><?php echo $row['subject_pesan'] ?></td>
		<td><?php echo $row['isi_pesan'] ?></td>
		<td><?php echo $row['tgl_kirim'] ?></td>
		<td>
			<a href="" class="glyphicon glyphicon-pencil btn btn-primary"></a>
			<a href="" class="glyphicon glyphicon-erase btn btn-primary"></a>
		</td>
	</tr>
	<?php } ?>
</table>