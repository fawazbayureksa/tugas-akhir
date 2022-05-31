<?php 
		$id = $_GET['id'];
		$query = mysqli_query($db ,"SELECT * FROM jabatan WHERE id_jabatan='$id'");
		$data = mysqli_fetch_assoc($query);
		
		
 ?>

<div class="row justify-content-center">
	<div class="col-md-8">
	<div class="card">
			<div class="card-header bg-primary text-center">
				<h4 style="color:white;">Ubah Data Jabatan</h4>
				<h4 class="text-right"><a href="?Page=jabatan" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Kembali</a></h4>
			</div>
			<div class="card-body">
				<div class="row justify-content-center">
					<div class="col-md-5">
						<form method="post">
							<div class="form-group">
							<label>Nama Jabatan</label>
							<input type="text" class="form-control" value="<?=$data['nama_jabatan']?>" name="jabatan">
							<br>
							<button class="btn btn-primary btn-sm" name="simpan"><i class="fa fa-pen"></i> Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	
	if (isset($_POST['simpan'])) {
		
		$jb = $_POST['jabatan'];

		mysqli_query($db,"UPDATE jabatan set nama_jabatan='$jb' WHERE id_jabatan='$id'");

		echo "<script>alert('Berhasil di Ubah')</script>";
		echo "<script>location='?Page=jabatan'</script>";
	}

 ?>