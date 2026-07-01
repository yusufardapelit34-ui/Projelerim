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
    <?php
      try {
        $vt=new pdo("mysql:host=localhost;dbname=haber","root","");

      } catch (PDOException $e) {
        echo $e->getMessage();
      }



      


     ?>
   <div>
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
          <div class="form-group text-center">
            <input type="submit" value="Gönder" class="btn btn-success">
            
          </div>
          
        </form>
      </div>
     </div>
</div>
     <?php 
      if(isset($_POST['kullanici']))
      {
        $kullanici=$_POST['kullanici'];
        $sifre=$_POST['sifre'];
        $uyekayit=$vt->prepare("insert into admin(kullanici,sifre) values(?,?)");
        $uyekayit->execute(array($kullanici,$sifre));
        echo "<script> alert('kayıt başarılı')</script>";
        echo "<script> window.location='giris.php' </script>";


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