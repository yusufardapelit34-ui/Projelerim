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
		<?php
			try {
				$vt=new pdo("mysql:host=localhost;dbname=haberler","root","");

			} catch (PDOException $e) {
				echo $e->getMessage();
			}



			$sorgu=$vt->query("select * from haber")->fetchALL();
			foreach ($sorgu as $kayit) {
				
			


		 ?>


	<div class="panel panel-info">
		<div class="panel-heading">
			<h2><?php echo $kayit["baslik"] ?></h2>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo $kayit['fotourl'] ?>" class="img-responsive img-thumbnail">
				</div>
				<div class="col-md-8 text-justify" style="text-indent: 40px;">
					<?php echo $kayit["icerik"] ?>
				</div>
				
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-md-6">
					<h3><?php echo $kayit["yazar"] ?></h3>
				</div>
				<div class="col-md-6 text-right">
					<h3><i class="glyphicon glyphicon-time"></i> <?php echo $kayit["tarih"] ?></h3>
				</div>
				
			</div>
		</div>

		
	</div>


	
<?php } ?>

</div>
</body>
</html>