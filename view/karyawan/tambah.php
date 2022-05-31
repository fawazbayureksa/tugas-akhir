
<div class="row justify-content-center">
	<div class="col-md-10">
	<div class="card">
			<div class="card-header bg-gradient-primary text-center">
				<h4 style="color:white;">Form Tambah Karyawan</h4>
				<h4 class="text-right"><a href="?Page=karyawan" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Kembali</a></h4>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
								<label>Nip</label>
								<input type="text" class="form-control" value="" name="nip">
								
								</div>
							</div>
						<div class="col-md-6">	
							<div class="form-group">
								<label>Nama Karyawan</label>
								<input type="text" class="form-control" value="" name="nama">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
								<label>Jabatan</label>
								<select class="form-control" name="jabatan">
									<option >--Pilih--</option>
									<?php 

										$query = mysqli_query($db ,"SELECT * FROM jabatan");
										while ($data = mysqli_fetch_assoc($query)) {

									 ?>
									 <option value="<?=$data['id_jabatan']?>"><?=$data['nama_jabatan']?></option>
									 <?php 
									}
									  ?>

								</select>
								
								</div>
							</div>
						<div class="col-md-6">	
								<label>Jenis Kelamin</label>
								<select class="form-control" name="jk">
									<option >--Pilih--</option>
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								</select>
						</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" value="" name="user">
								
								</div>
							</div>
						<div class="col-md-6">	
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" value="" name="pass">
							</div>
						</div>
					</div>
								<button class="btn btn-primary btn-sm" name="simpan"><i class="fa fa-paper-plane"></i> Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
	
	if (isset($_POST['simpan'])) {
		
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$jabatan = $_POST['jabatan'];
		$jk = $_POST['jk'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		mysqli_query($db,"INSERT INTO karyawan (nip,nama,id_jabatan_k,jenis_kelamin,username,password) VALUES ('$nip','$nama','$jabatan','$jk','$user','$pass')");

		echo "<script>alert('Berhasil di tambahkan')</script>";
		echo "<script>location='?Page=karyawan'</script>";
	}
 ?>