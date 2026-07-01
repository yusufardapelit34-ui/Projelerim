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
		


			
				
			


		
		 <h1 class="text-center"> HABER İÇERİK EKLEME</h1>
		 <form action="tamamla.php" method="post" class="form-horizontal" enctype="multipart/form-data">
		 	<div class="form-group">	
		 		<label class="col-md-4 control-label" for="hb"> Haber Başlık</label>
		 		<div class="col-md-8">
		 			<input type="text" name="haberbaslik" id="hb" class="form-control">
		 			
		 		</div>
		 		
		 	</div>
		 		<div class="form-group">
		 		<label class="col-md-4 control-label" for="yz"> Yazar</label>
		 		<div class="col-md-8">
		 			<input type="text" name="yazar" id="yz" class="form-control">
		 			
		 		</div>
		 		
		 	</div>
		 	<div class="form-group">
		 		<label class="col-md-4 control-label" for="id"> içerik</label>
		 		<div class="col-md-8">
		 			<textarea name="icerik" id="editor" class="form-control" rows="6" style="resize: none;"></textarea>
		 			
		 		</div>
		 		
		 	</div>
		 	<div class="form-group">
		 		<label class="col-md-4 control-label" for="ft"> Foto yükle</label>
		 		<div class="col-md-8">
		 			<input type="file" name="dosya">
		 			
		 		</div>
		 		
		 	</div>
		 	<div class="form-group text-center">
		 		<button class="btn btn-success "><i class="glyphicon glyphicon-ok"></i> Yayınla</button>
		 		
		 	</div>
		 	
		 </form>
	


	

<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace('editor');
</script>
</div>
</body>
</html>