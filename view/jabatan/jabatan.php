<div class="row justify-content-center">
	<div class="col-md-8">
	<div class="card">
			<div class="card-header bg-primary text-center">
				<h4 style="color:white;">Data Jabatan</h4>
			</div>
			<div class="card-body">
				<div class="row justify-content-end">
					<div class="col-md-5">
						<form method="post">
							<div class="form-group">
							<label>Nama Jabatan</label>
							<input type="text" class="form-control" name="jabatan">
							<br>
							<button class="btn btn-primary btn-sm" name="simpan"><i class="fa fa-plus"></i> Tambah</button>
							</div>
						</form>
					</div>
				</div>
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Jabatan</th>
							<th><i class="fa fa-cog"></i></th>
						</tr>
					</thead>
					<tbody >
							<?php 
									$no = 1;
									$query = mysqli_query($db ,"SELECT * FROM jabatan");
									while ($data = mysqli_fetch_assoc($query)) {
									
									
							 ?>
						<tr>
							<td width="25px"><?=$no++?></td>
							<td><?=$data['nama_jabatan']?></td>
							
							<td width="250">
							
								<a href="?Page=ubah-jabatan&id=<?=$data['id_jabatan']?>" class="btn btn-warning btn-sm" id="edit"><i class="fa fa-pen"></i> edit</a>
								<a href="?Page=hapus-jabatan&id=<?=$data['id_jabatan']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>

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