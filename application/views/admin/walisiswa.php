<h1>Wali Siswa</h1>

<table id="tabelwalisiswa" class="table table-bordered table-striped">
	<tr>
		<td>No</td>
		<td>Nama Wali</td>
		<td>Wali Dari</td>
		<td>Alamat</td>
	</tr>
	<?php  
	$no = 1;
		foreach($data as $row){
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['nama_wali'] ?></td>
		<td><?php echo $row['nama_siswa'] ?></td>
		<td><?php echo $row['no_hp_wali'] ?></td>
	</tr>
	<?php } ?>
</table>