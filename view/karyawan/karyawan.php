<div class="row justify-content-center">
	<div class="col-md-12">
	<div class="card">
			<div class="card-header bg-primary text-center">
				<h4 style="color:white;">Data Karyawan</h4>
			</div>
			<div class="card-body">
				<div class="row justify-content-end">
					
						<a href="?Page=form-karyawan" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
					
				</div>
				<br>
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>No</th>
							<th>NIP</th>
							<th>Nama Karyawan</th>
							<th>Jabatan</th>
							<th>Jenis Kelamin</th>
							<th>Username</th>
							<th><i class="fa fa-cog"></i></th>
						</tr>
					</thead>
					<tbody >
							<?php 
									$no = 1;
									$query = mysqli_query($db ,"SELECT * FROM karyawan");
									while ($data = mysqli_fetch_assoc($query)) {
									
									
							 ?>
						<tr>
							<td width="25px"><?=$no++?></td>
							<td><?=$data['nip']?></td>
							<td><?=$data['nama']?></td>
							<td>
								<?php 
									$id = $data['id_jabatan_k'];
									$jbt = mysqli_query($db ,"SELECT * FROM jabatan WHERE id_jabatan='$id'");
									$datajbt = mysqli_fetch_assoc($jbt);

									echo $datajbt['nama_jabatan'];
								 ?>
							</td>
							<td><?=$data['jenis_kelamin']?></td>
							<td><?=$data['username']?></td>
						
							
							<td width="250">
							
								<a href="?Page=detail-karyawan&id=<?=$data['id']?>" class="btn btn-success btn-sm" id="edit"><i class="fa fa-eye"></i> Detail</a>
								<a href="?Page=hapus-karyawan&id=<?=$data['id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>

							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- <script type="text/javascript">
	
	$(document).ready(function(){
		$(document).on('click','#edit',function(){

		})
	})

	
</script> -->
<?php 
	
	if (isset($_POST['simpan'])) {
		
		$jb = $_POST['jabatan'];

		mysqli_query($db,"INSERT INTO jabatan (nama_jabatan) VALUES ('$jb')");

		echo "<script>alert('Berhasil di tambahkan')</script>";
		echo "<script>location='?Page=jabatan'</script>";
	}

 ?>