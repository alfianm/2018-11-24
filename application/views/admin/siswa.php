

<div class="box">
	<div class="box-header">
		<h1>DATA SISWA</h1>
	</div>
	<div class="box-body">
		<table id="tabelsiswa" class="table table-bordered table-striped">
			<tr>
				<td>No</td>
				<td>NISN</td>
				<td>Nama</td>
				<td>Asal Sekolah</td>
				<td>Alamat</td>
				<td>Action</td>
			</tr>
			<?php  
			$no = 1;
			foreach($data as $row){
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $row['nisn'] ?></td>
					<td><?php echo $row['nama_siswa'] ?></td>
					<td><?php echo $row['asal_sekolah'] ?></td>
					<td><?php echo $row['alamat'] ?></td>
					<td>
						<a href="<?php echo base_url('') ?>" class="glyphicon glyphicon-eye-open btn btn-primary"></a>
						<a href="" class="glyphicon glyphicon-pencil btn btn-primary"></a>
						<a href="" class="glyphicon glyphicon-erase btn btn-primary"></a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>