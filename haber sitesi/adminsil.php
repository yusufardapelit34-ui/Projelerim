<?php

	session_start();
	if($_SESSION['kullanici'])
	{
		try {
			$vt=new pdo("mysql:host=localhost;dbname=haber","root","");
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

		$id=$_GET['id'];

		$donen=$vt->prepare("delete from haber where haberid=?");
		$donen->execute(array($id));
		swal("Hello world!");
		echo "<script> alert(' $id numaralı haber silindi. ') </script>";
		echo "<script> window.location.href='adminoz.php' </script>";

	}
	else
	{
		echo "<script> alert('Bu Sayfayı Görmeye Yetkiniz yok') </script>";
		echo "<script> window.location.href='anasayfam.php' </script>";
	}
	?>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
