
<div class="row justify-content-center">
	<div class="col-md-10">
	<div class="card">
			<div class="card-header bg-gradient-primary text-center">
				<h4 style="color:white;">Form Tambah User</h4>
				<h4 class="text-right"><a href="?Page=daftar-user" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Kembali</a></h4>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="row justify-content-center">
						<div class="col-md-6">	
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" value="" name="nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" value="" name="user">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
							
						<div class="col-md-6">	
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" value="" name="pass">
							</div>
						</div>
						<div class="col-md-6 mt-4">	
							<div class="form-group">
							<button class="btn btn-primary btn-sm" name="simpan"><i class="fa fa-paper-plane"></i> Simpan</button>
						</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
	
	if (isset($_POST['simpan'])) {
		
		$nama = $_POST['nama'];
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		mysqli_query($db,"INSERT INTO admin (username,password,nama) VALUES ('$user','$pass','$nama')");

		echo "<script>alert('Berhasil di tambahkan')</script>";
		echo "<script>location='?Page=daftar-user'</script>";
	}
 ?>