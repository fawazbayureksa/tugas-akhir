<div class="row justify-content-center">
	<div class="col-md-8">
	<div class="card">
			<div class="card-header bg-primary text-center">
				<h4 style="color:white;">Data User</h4>
			</div>
			<div class="card-body">
				<div class="row justify-content-end">
					
						<a href="?Page=form-user" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Tambah Data</a>
					
				</div>
				<br>
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th><i class="fa fa-cog"></i></th>
						</tr>
					</thead>
					<tbody >
							<?php 
									$no = 1;
									$query = mysqli_query($db ,"SELECT * FROM admin");
									while ($data = mysqli_fetch_assoc($query)) {
							 ?>
						<tr>
							<td width="25px"><?=$no++?></td>
							<td><?=$data['nama']?></td>
							<td><?=$data['username']?></td>

							<td width="250">
								<a href="?Page=ubah-user&id=<?=$data['id_admin']?>" class="btn btn-warning btn-sm" id="edit"><i class="fa fa-pen"></i> edit</a>
								<a href="?Page=hapus-user&id=<?=$data['id_admin']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>

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