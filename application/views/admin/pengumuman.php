<h1>PENGUMUMAN</h1>

<table id="tabelpengumuman" class="table table-bordered table-striped">
	<tr>
		<td>No</td>
		<td>Kode Pengumuman</td>
		<td>Subject</td>
		<td>Pengumuman</td>
		<td>Tanggal</td>
		<td>Action</td>
	</tr>
	<?php  
	$no = 1;
		foreach($data as $row){
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['idpengumuman'] ?></td>
		<td><?php echo $row['subject_pengumuman'] ?></td>
		<td><?php echo $row['isi_pengumuman'] ?></td>
		<td><?php echo $row['tgl_pengumuman'] ?></td>
		<td>
			<a href="" class="glyphicon glyphicon-pencil btn btn-primary"></a>
			<a href="" class="glyphicon glyphicon-erase btn btn-primary"></a>
		</td>
	</tr>
	<?php } ?>
</table>