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
			 <?php
      try {
        $vt=new pdo("mysql:host=localhost;dbname=haber","root","");

      } catch (PDOException $e) {
        echo $e->getMessage();
      }



      


     ?>
     <div class="container-fluid">
      <h2 class="text-center "> Lütfen Kayit Olun</h2>
      <hr>
        <form method="post" class="form-horizontal">
          <div class="form-group">
             
            <label class="col-md-4 control-label" for="kull">Ad-Soyad:</label>
            <div class="col-md-6">
              <input type="text" id="kull" name="kullanici" placeholder="Yusuf Arda Pelit" class="form-control" required="">
             
            </div>
            
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="sfr">Şifre:</label>
            <div class="col-md-6">
              <input type="password" id="sfr" name="sifre" placeholder="Yusuf123" class="form-control" required="">
              
            </div>
            
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="pt">E-posta:</label>
            <div class="col-md-6">
              <input type="email" id="pt" name="eposta" placeholder="yusuf123@mail.com" class="form-control" required="">
              
            </div>
            
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="tl">Telefon:</label>
            <div class="col-md-6">
              <input type="text" id="tl" name="telefon" placeholder="055688667" class="form-control" required="">
              
            </div>
            
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="ads">Adres:</label>
            <div class="col-md-6">
              <textarea name="adres" id="ads" class="form-control" style="height:180px;resize: none;" required=""></textarea>
              
            </div>
            
          </div>
          <div class="form-group text-center">
            <input type="submit" value="Kayit Ol" required="" class="btn btn-success">
            
          </div>
          
          
        </form>
      </div>
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
        echo "<script> alert('Kayit Başarılıdır')</script>";
        echo "<script> window.location='anasayfam.php' </script>";


      }
      else
      {

      }
     ?>

    



<style type="text/css">
  
  label{
    color:black;
  }
  input{
    color:black;
  }
</style>
  

</div>
</body>
</html>