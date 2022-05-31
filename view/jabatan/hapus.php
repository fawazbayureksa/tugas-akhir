<?php 

$id = $_GET['id'];

mysqli_query($db,"DELETE FROM jabatan WHERE id_jabatan = '$id'");
			echo "<script>alert('Data berhasil dihapus')</script>";
			echo "<script>location='?Page=jabatan'</script>";
 ?>