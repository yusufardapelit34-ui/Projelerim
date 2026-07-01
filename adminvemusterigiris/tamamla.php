<?php
	
	
	
	if($_POST)
	{
		$baslik=$_POST["haberbaslik"];
		$yazar=$_POST["yazar"];
		$icerik=$_POST["icerik"];
		$yol="rsm/";
	$isim=$yol. $_FILES["dosya"]["name"];
	
	move_uploaded_file($_FILES["dosya"]["tmp_name"], $yol.$_FILES["dosya"]["name"]);
			
		try {
			$vt=new pdo("mysql:host=localhost;dbname=haberler","root","");

			
		} catch (PDOException $e) {
			echo $e->POSTMessage();
		}

		$ekle=$vt->prepare("insert into haber(baslik,icerik,yazar,tarih,fotourl) values(?,?,?,?,?)");
		$ekle->execute(array($baslik,$icerik,$yazar,date(y.m.d),$isim));
		echo "<script> alert('Haber Eklenmiştir.') </script>";
		echo "<script> window.location.href='index.php' </script>";

	}
	else
	{
		echo "<script> alert('veriler gelmedi') </script>";
		echo "<script> window.location.href='index.php' </script>";

	}
 ?>