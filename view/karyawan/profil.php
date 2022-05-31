<?php 

	$id = $_SESSION['user']['id'];
		$query = mysqli_query($db ,"SELECT * FROM karyawan WHERE id='$id'");
		$data = mysqli_fetch_assoc($query);
 ?>

<div class="row justify-content-center">
	<div class="col-md-10">
	<div class="card">
			<div class="card-header bg-primary text-center">
				<h4 style="color:white;">Profil Karyawan</h4>
				<h4 class="text-right"><a href="?Page=karyawan" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Kembali</a></h4>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
								<label>Nip</label>
								<input type="text" class="form-control" value="<?=$data['nip']?>" name="nip">
								
								</div>
							</div>
						<div class="col-md-6">	
							<div class="form-group">
								<label>Nama Karyawan</label>
								<input type="text" class="form-control" value="<?=$data['nama']?>" name="nama">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
								<label>Jabatan</label>
								<select class="form-control" name="jabatan">
									<option value="<?=$data['id_jabatan_k']?>" >
										<?php 
									$idk = $data['id_jabatan_k'];
									$jbt = mysqli_query($db ,"SELECT * FROM jabatan WHERE id_jabatan='$idk'");
									$datajbt = mysqli_fetch_assoc($jbt);

									echo $datajbt['nama_jabatan'];
								 ?>
									</option>
									<?php 

										$queryq = mysqli_query($db ,"SELECT * FROM jabatan");
										while ($dataq = mysqli_fetch_assoc($queryq)) {

									 ?>
									 <option value="<?=$dataq['id_jabatan']?>"><?=$dataq['nama_jabatan']?></option>
									 <?php 
									}
									  ?>

								</select>
								
								</div>
							</div>
						<div class="col-md-6">	
								<label>Jenis Kelamin</label>
								<select class="form-control" name="jk">
									<option value="<?=$data['jenis_kelamin']?>" ><?=$data['jenis_kelamin']?></option>
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								</select>
						</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" value="<?=$data['username']?>" name="user">
								
								</div>
							</div>
						<div class="col-md-6">	
							<div class="form-group">
								<label>New Password</label>
								<input type="password" class="form-control" value="" name="pass">
								<small><i style="color:red;">*Masukkan Password Baru Jika Ingin Diubah</i></small>
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

		if (isset($pass)) {
			
			mysqli_query($db,"UPDATE karyawan SET nip='$nip',
												  nama='$nama',
												  id_jabatan_k ='$jabatan',
												  jenis_kelamin ='$jk',
												  username='$user',
												  password='$pass'
												  WHERE id='$id'");

				echo "<script>alert('Berhasil di Ubah')</script>";
				echo "<script>location='?Page=profil'</script>";

			}
			else
			{
				mysqli_query($db,"UPDATE karyawan SET nip='$nip',
												  nama='$nama',
												  id_jabatan_k ='$jabatan',
												  jenis_kelamin ='$jk',
												  username='$user'
												  WHERE id='$id'");
				echo "<script>alert('Berhasil di Ubah')</script>";
				echo "<script>location='?Page=profil'</script>";
			}
		}

 ?>