<?php 
$id = $_GET['id'];

mysqli_query($db,"DELETE FROM admin WHERE id_admin = '$id'");
			echo "<script>alert('Data berhasil dihapus')</script>";
			echo "<script>location='?Page=daftar-user'</script>";
 ?>