<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<script type="text/javascript" src="bs/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
" rel="stylesheet">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Anasayfa</a></li>
      <li><a href="#">Hakkımızda</a></li>
      <li><a href="mesaj.php">Mesaj Yaz</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
		<form method="post" class="form-horizontal" style="margin-top:20px">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h1><i class="glyphicon glyphicon-user"></i> Giriş</h1>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-md-5 control-label" for="kl"> Kullanıcı adı</label>
				<div class="col-md-7">
					<input type="text" name="kull" id="kl" class="form-control">
				</div>
				
			</div>
			<div class="form-group">
				<label class="col-md-5 control-label" for="sf"> şifre</label>
				<div class="col-md-7">
					<input type="text" name="sifre" id="sf" class="form-control">
				</div>
				
			</div>

			
		</div>
		<div class="panel-footer">
			<div class="form-group text-right">
				<button class="btn btn-success"> Giriş</button>
				
			</div>
		</div>
		
	</div>
	</form>


	<?php 
		if($_POST)
		{
			$kull=$_POST['kull'];
			$sfr=$_POST['sifre'];

			try {
				$vt=new pdo("mysql:host=localhost;dbname=haberler","root","");
			} catch (PDOException $e) {
				echo $e->getMessage();
			}

			$donen=$vt->query("select * from admin where kullanici='$kull' and sifre='$sfr'")->fetch();
			

			if($donen)
			{
				/* oturum oluşturcaz */
				/* yönlendirme */
				session_start();
				$_SESSION['kullanici']=$kull;

				echo "<script> Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Giriş Başarılı ağam',
  showConfirmButton: false,
  timer: 1500
}) </script>";

echo "<meta http-equiv='refresh' content='1;adminana.php'>";
				
			}
			else
			{
				echo "<script> Swal.fire({
  icon: 'error',
  title: 'Hay Aksi',
  text: 'Birşeyler yanlış gitmiş olmalı',
  
})</script>";
			}

		}
	?>


		
	


	


</div>
</body>
</html>