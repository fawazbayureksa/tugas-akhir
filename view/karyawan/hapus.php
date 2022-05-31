<?php 
$id = $_GET['id'];

mysqli_query($db,"DELETE FROM karyawan WHERE id = '$id'");
			echo "<script>alert('Data berhasil dihapus')</script>";
			echo "<script>location='?Page=karyawan'</script>";
 ?>