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
      <li><a href="uyekayit.php"><span class="glyphicon glyphicon-user"></span> Üyeol</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
		<?php
			try {
				$vt=new pdo("mysql:host=localhost;dbname=haberler","root","");

			} catch (PDOException $e) {
				echo $e->getMessage();
			}



			


		 ?>
		 <div class="container">
		 	<h2 class="text-center "><i class="glyphicon glyphicon-user"></i> Üye sayfasına hoş geldiniz</h2>
		 		<form method="post" class="form-horizontal">
		 			<div class="form-group">
		 				<label class="col-md-4 control-label" for="kull">Kulllanıcı adı:</label>
		 				<div class="col-md-6">
		 					<input type="text" id="kull" name="kullanici" placeholder="kullanıcı ismi" class="form-control">
		 					
		 				</div>
		 				
		 			</div>
		 			<div class="form-group">
		 				<label class="col-md-4 control-label" for="sfr">Şifre:</label>
		 				<div class="col-md-6">
		 					<input type="password" id="sfr" name="sifre" placeholder="şifreniz" class="form-control">
		 					
		 				</div>
		 				
		 			</div>
		 			<div class="form-group">
		 				<label class="col-md-4 control-label" for="pt">E-posta:</label>
		 				<div class="col-md-6">
		 					<input type="email" id="pt" name="eposta" placeholder="ornek@mail.com" class="form-control">
		 					
		 				</div>
		 				
		 			</div>
		 			<div class="form-group">
		 				<label class="col-md-4 control-label" for="tl">Telefon:</label>
		 				<div class="col-md-6">
		 					<input type="text" id="tl" name="telefon" placeholder="0212 274 69 78" class="form-control">
		 					
		 				</div>
		 				
		 			</div>
		 			<div class="form-group">
		 				<label class="col-md-4 control-label" for="ads">Adres:</label>
		 				<div class="col-md-6">
		 					<textarea name="adres" id="ads" class="form-control" style="height:180px;resize: none;"></textarea>
		 					
		 				</div>
		 				
		 			</div>
		 			<div class="form-group text-center">
		 				<input type="submit" value="Tamamla" class="btn btn-success">
		 				
		 			</div>
		 			
		 		</form>
		 	
		 </div>

		 <?php 
		 	if(isset($_POST['kullanici']))
		 	{
		 		$kullanici=$_POST['kullanici'];
		 		$sifre=$_POST['sifre'];
		 		$eposta=$_POST['eposta'];
		 		$telefon=$_POST['telefon'];
		 		$adres=$_POST['adres'];
		 		$uyekayit=$vt->prepare("insert into uyeler(kullaniciadi,sifre,eposta,tel,adres) values(?,?,?,?,?)");
		 		$uyekayit->execute(array($kullanici,$sifre,$eposta,$telefon,$adres));
		 		echo "<script> alert('kayıt başarılı')</script>";
		 		echo "<script> window.location='index.php' </script>";


		 	}
		 	else
		 	{

		 	}
		 ?>

		




	

</div>
</body>
</html>