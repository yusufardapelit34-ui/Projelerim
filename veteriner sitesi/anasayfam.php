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
				      <li><a href="#">Anasayfa</a></li>
				      <li><a href="#">Hakkımda</a></li>
				  </ul>
				       <ul class="nav navbar-nav navbar-right">
				    <li><a href="kayit.php"><span class="glyphicon glyphicon-user" style="margin:4px;"></span>Kayit Ol</a></li>
      				<li><a href="giris.php"><span class="glyphicon glyphicon-log-in" style="margin:px;"></span>  Giriş Yap</a></li>
				 </ul>
				  </div>
			</nav>
					
<?php
			try {
				$vt=new pdo("mysql:host=localhost;dbname=haber","root","");

			} catch (PDOException $e) {
				echo $e->getMessage();
			}



			$sorgu=$vt->query("select * from haber")->fetchALL();
			foreach ($sorgu as $kayit) {
				
			


		 ?>


	<div class="panel panel-danger">
		<div class="panel-heading">
			<h2><?php echo $kayit["baslik"] ?></h2>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo $kayit['fotourl']  ?>" style="width:500px;">
				</div>
				<div class="col-md-8 text-justify" style="text-indent: 40px;">
					<h3>	<?php echo $kayit["icerik"] ?></h3>
				</div>
					
			
			</div>
		</div>
		
				
			</div>
		</div>

		
	</div>


	
<?php } ?>
					
</body>
</html>