<?php 
		$id = $_GET['id'];
		$query = mysqli_query($db ,"SELECT * FROM admin WHERE id_admin='$id'");
		$data = mysqli_fetch_assoc($query);

?>
<div class="row justify-content-center">
	<div class="col-md-10">
	<div class="card">
			<div class="card-header bg-gradient-primary text-center">
				<h4 style="color:white;">Form Ubah User</h4>
				<h4 class="text-right"><a href="?Page=daftar-user" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Kembali</a></h4>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="row justify-content-center">
						<div class="col-md-6">	
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" value="<?=$data['nama']?>" name="nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" value="<?=$data['username']?>" name="user">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-6">	
							<div class="form-group">
								<label>New Password</label>
								<input type="password" class="form-control" value="" name="pass">
								<small><i style="color:red;">*Masukkan Password Baru Jika Ingin Diubah</i></small>
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


		if (isset($pass)) {
			
				mysqli_query($db,"UPDATE admin SET username = '$user', password = '$pass', nama = '$nama' WHERE id_admin = '$id'");
				echo "<script>alert('Berhasil di ubah')</script>";
				echo "<script>location='?Page=daftar-user'</script>";

			}
			else
			{
				mysqli_query($db,"UPDATE admin SET username = '$user', nama = '$nama' WHERE id_admin = '$id'");
				echo "<script>alert('Berhasil di ubah')</script>";
				echo "<script>location='?Page=daftar-user'</script>";
			}

	}
 ?>