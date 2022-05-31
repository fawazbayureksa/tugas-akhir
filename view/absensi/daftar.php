<?php 
if (isset($_SESSION['user'])) {
	$nip = $_SESSION['user']['nip'];
}else{
	$nip = $_GET['id'];
}
 ?>

<div class="row justify-content-center">
	<div class="col-md-12">
	<div class="card">
			<div class="card-header bg-primary text-center">
				<h4 style="color:white;">Daftar Absensi</h4>
			</div>
			<div class="card-body">
				 <?php
				 $nama = mysqli_query($db ,"SELECT * FROM karyawan JOIN jabatan ON karyawan.id_jabatan_k = jabatan.id_jabatan  WHERE nip ='$nip'");
				$datas = mysqli_fetch_assoc($nama);
				  if ($_SESSION['admin']) {?>
				 	<label>Nama : </label>
					<label style="font-weight:bold;"><?=$datas['nama']?></label>
					<br>
					<label>Jabatan : </label>
					<label style="font-weight:bold;"><?=$datas['nama_jabatan']?></label>
				 <?php } ?>
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal Absen</th>
							<th>Jam Masuk</th>
							<th>Jam Keluar</th>
						</tr>
					</thead>
					<tbody >
							<?php 
									// $nip = $_SESSION['user']['nip'];
									// $nipp = $_GET['id'];
							$no = 1;
							$query = mysqli_query($db ,"SELECT * FROM absensi WHERE nip ='$nip'  ORDER BY tgl_absen");
							while ($data = mysqli_fetch_array($query)) {	
							 ?>
						<tr>
							<td width="25px"><?=$no++?></td>
							<td>
								<?=$data['tgl_absen']?>
							</td>
							<td>
								<?php 
									if ($data['keterangan'] == 'Hadir'){
										echo $data['jam_masuk'];					
									}
									elseif ($data['keterangan'] == 'Cuti') {
										echo "Cuti";
									}elseif ($data['keterangan'] == 'Sakit') {
										echo "Sakit";
									}
								 ?>
							</td>
							<td>
								<?php 

								if ($data['keterangan'] == 'Hadir'){
										
										if ($data['jam_keluar'] == '00:00:00') {
												echo "Belum Absen";
											}else{
												echo $data['jam_keluar'];
											}					
									}
									elseif ($data['keterangan'] == 'Cuti') {
										echo "Cuti";
									}elseif ($data['keterangan'] == 'Sakit') {
										echo "Sakit";
									}			
								 ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
