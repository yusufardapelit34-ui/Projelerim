<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<script type="text/javascript" src="bs/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>
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
      <li><a href="uyekayit.php"><span class="glyphicon glyphicon-user"></span> Üye ol</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

					<h1 class="page-header text-primary"><i class="glyphicon glyphicon-user"></i> Admin Giriş sayfası</h1>
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-4" for="kl">Kullanıcı adı:</label>
							<div class="col-md-4">
								<input type="text" name="kull" placeholder="kullanıcı adınız..." id="kl" class="form-control">
								
							</div>
							
						</div>
							<div class="form-group">
							<label class="control-label col-md-4" for="sf">Şifre:</label>
							<div class="col-md-4">
								<input type="password" name="sifre" id="sf" placeholder="şifreniz" class="form-control">
								
							</div>
							
						</div>
						<div class="form-group text-center">
							<button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Gönder</button>
							
						</div>
						
					</form>		




					<?php
							if($_POST)
							{
								try {
									$vt=new pdo("mysql:host=localhost;dbname=haberler","root","");
									
								} catch (PDOException $e) {
									echo $e->getMessage();
									
								}

								$kull=$_POST['kull'];	
								$sifre=$_POST['sifre'];	

								$donen=$vt->query("select * from admin where kullanici='$kull' and sifre='$sifre'")->fetch();
								if($donen)
								{
									session_start();
									$_SESSION['kullanici']=$kull;
									echo "<script> window.location.href='adminana2.php' </script>";
								}
								else
								{
									echo "Kullanıcı adı veya şifre hatalıdır";
								}

							}
					 ?>
		


</div>
</body>
</html>