<div class="row justify-content-center">
	<div class="col-md-12">
	<div class="card">
			<div class="card-header bg-primary text-center">
				<h4 style="color:white;">Rekap Asensi Karyawan</h4>
			</div>
			<div class="card-body">
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>TW</th>
							<th>TTW</th>
							<th>TELAT</th>
							<th>TAP</th>
							<th>TAD</th>
							<th>HARI KERJA</th>
						</tr>
					</thead>
					<tbody >
							<?php 
									
									$no = 1;
									$query = mysqli_query($db ,"SELECT * FROM absensi JOIN karyawan ON absensi.nip = karyawan.nip ");
									while ($data = mysqli_fetch_assoc($query)) {
							 ?>
						<tr>
							<td width="25px"><?=$no++?></td>
							<td>
								<?=$data['nama']?>
							</td>
							<td>
												
							</td>
							<td>

							</td>						
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

