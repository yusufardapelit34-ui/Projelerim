<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<script type="text/javascript" src="bs/js/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
</head>
<body>
	
		<div class="menu">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
				    </div>
				    <ul class="nav navbar-nav">
				      <li><a href="anasayfam.php">Anasayfa</a></li>
				      <li><a href="#">Hakkımda</a></li>
				  </ul>
				       <ul class="nav navbar-nav navbar-right">
				    <li><a href="#"><span class="glyphicon glyphicon-user" style="margin:4px;"></span>Kayit Ol</a></li>
      				<li><a href="giris.php"><span class="glyphicon glyphicon-log-in" style="margin:px;"></span>  Giriş Yap</a></li>

				 </ul>
				  </div>
			</nav>

			<h1 class=" text-center"> Admin Giriş sayfası</h1>
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-4" for="kl">Kullanıcı adı:</label>
							<div class="col-md-4">
								<input type="text" name="kull" placeholder="kullanıcı ad" id="kl" class="form-control">
								
							</div>
							
						</div>
							<div class="form-group">
							<label class="control-label col-md-4" for="sf">Şifre:</label>
							<div class="col-md-4">
								<input type="password" name="sifre" id="sf" placeholder="şifre" class="form-control">
								
							</div>
							
						</div>
						<div class="form-group text-center">
							<button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Gönderiniz</button>
							
						</div>
						
					</form>		




					<?php
							if($_POST)
							{
								try {
									$vt=new pdo("mysql:host=localhost;dbname=haber","root","");
									
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
									echo "<script> window.location.href='adminoz.php' </script>";
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