<?php 
	if (isset($_SESSION['user'])){
		$nipK = $_SESSION['user']['nip'];
	
	}
	$h = date('Y-m-d');

	$query = mysqli_query($db,"SELECT * FROM absensi WHERE nip = '$nipK' AND tgl_absen='$h'");

	$cek = mysqli_num_rows($query);


 ?>
<div class="row justify-content-center">
	<div class="col-md-12">
	<div class="card">
			<div class="card-header bg-gradient-primary text-center">
				<h4 style="color:white;">Form Absensi</h4>
			</div>
			<div class="card-body">
				<?php if ($cek == 1) {?>
				<div class="alert alert-success" role="alert">
				  Absensi Kedatangan selesai, Silahkan Melakukan Absensi Pulang Jika Sudah Waktunya
				</div>
				<?php } ?>
				
				<label style="font-size:24px;">Tanggal <?=date('l, d-m-Y');?></label>
				<br>
				<label style="font-size:24px;">Jam  <?=date('H:i');?></label>
				<br>
				<form method="post" enctype="multipart/form-data">
					<?php if ($cek == 0) {?>
					<div class="form-group">
						<input type="checkbox" name="absen" class="detail" id="hadir" value="Hadir">
						<label>Hadir</label>
					</div>
					<!-- <div class="form-group">
						<input type="checkbox" name="absen" class="detail" id="tidak" value="Tidak Hadir">
						<label>Tidak Hadir</label>
					</div> -->
					<div class="form-group">
						<input type="checkbox" name="absen" class="detail" id="cuti" value="Cuti">
						<label>Cuti</label>
					</div>	
					<div class="form-group">
						<input type="checkbox" name="absen" class="detail" id="sakit" value="Sakit">
						<label>Sakit</label>
					</div>
					<div class="col-md-6">
						<div class="form-group" >
							<input type="file" class="form-control" id="file" name="surat">
							<small style="color:red;"><i>*Jika sakit atau ingin cuti mohon masukkan surat keterangan pendukung dalam format pdf (ukuran maks 1 mb)</i></small>
						</div>
					</div>
				<?php } ?>
			
					<?php if ($cek == 0) {?>
					<button class="btn btn-success" name="simpan"><i class="fa fa-pen"> Absen</i></button>
					<?php } ?>
					<?php if ($cek == 1) {?>
					<button class="btn btn-warning" name="pulang"><i class="fa fa-pen"> Absen Pulang</i></button>
					<?php } ?>

					<a href="" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Batal</a>
				</form>
				
			</div>
		</div>
	</div>
</div>


<script>
$(document).ready(function(){
	  $("#file").css("display","none");
	  $(".detail").click(function(){
	  if ($('input[name="absen"]:checked').val() == "Cuti" || $('input[name="absen"]:checked').val() == "Sakit"){
	    $("#file").fadeIn();
	    }
	   else {
	    $("#file").fadeOut();
	   }
	  });
	});
</script>
	
<?php 
	date_default_timezone_set('Asia/Makassar');
	if (isset($_POST['simpan'])) {
		
		$nip = $_SESSION['user']['nip'] ;
		$tgl = date('Y-m-d');
		$waktu = date('H:i:s');
		$ket = $_POST['absen'];

		if (isset($_FILES['surat'])) {
			$nama = $_FILES['surat']['name'];		
			$lokasi = $_FILES['surat']['tmp_name'];	
			move_uploaded_file($lokasi, 'view/surat/' . $nama);

			mysqli_query($db,"INSERT INTO absensi (nip,tgl_absen,jam_masuk,suket,keterangan) VALUES ('$nip','$tgl','$waktu','$nama','$ket')");
				echo "<script>alert('Berhasil di Absen')</script>";
				echo "<script>location='?Page=absensi'</script>";
			
		}else{

		mysqli_query($db,"INSERT INTO absensi (nip,tgl_absen,waktu,keterangan) VALUES ('$nip','$tgl','$waktu','$ket')");

		echo "<script>alert('Berhasil di Absensi')</script>";
		echo "<script>location='?Page=absensi'</script>";

		}
	}
	if (isset($_POST['pulang'])) {
		$nipp = $_SESSION['user']['nip'] ;
		$tgll = date('Y-m-d');
		$waktup = date('H:i:s');
		mysqli_query($db,"UPDATE absensi SET jam_keluar='$waktup' WHERE tgl_absen = '$tgll' AND nip ='$nipp'");
		echo "<script>alert('Berhasil di Absensi')</script>";
		echo "<script>location='?Page=absensi'</script>";
	}


 ?>

