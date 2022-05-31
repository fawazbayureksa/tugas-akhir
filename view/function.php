<?php 
include '../koneksi.php';

	$nip = $_GET['nip'];

	$query = mysqli_query($db,"SELECT * FROM jabatan WHERE id_jabatan = '$nip'");
	$data = mysqli_fetch_assoc($query);

	$array = array(
			'nama' => $data['nama'],
			'alamat' => $data['alamat'],
			'no_telp'=>$data['notelp'],
			'pil'=>$data['pilihan'],
			'jeniskelamin' => $data['jenis_kelamin'],
			'komentar'=>$data['komentar']);

	echo json_encode($array);
 ?>