<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<script type="text/javascript" src="bs/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>
<?php

	session_start();
	if(@$_SESSION['kullanici']!=null)
	{
		echo "hoşgeldin ".$_SESSION['kullanici'];
		?>
			<a href="cikis.php" class="btn btn-danger">Çıkış Yap</a>
<?php
	}
	else
	{
		echo "<script> alert('bu sayfayı göremeye yetikiniz yok')</script>";
		echo "<script> window.location.href='admingiris.php' </script>";

	}

?>