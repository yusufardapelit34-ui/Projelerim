
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
<script type="text/javascript" src="bs/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>

	<?php
		session_start();
		if($_SESSION['kullanici'])
		{
			try {
				$vt=new pdo("mysql:host=localhost;dbname=haberler","root","");
				
			} catch (PDOException $e) {
				echo $e->getMessage();
			}


			$donen=$vt->query("select * from haber")->fetchALL();

			?>
			<div class="container">
				
			
				<h2 class="page-header">Admin sayfasına hoş geldiniz. Sayın ; <?php echo $_SESSION['kullanici'] ?></h2>
				<a href="cikis.php" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Çıkış</a>


					<h1 class="page-header text-primary"> Haberler</h1>
				<table class="table">
					<tr>
						<th>Haber id</th>
						<th>Haber Başlık</th>
						<th>Haber içerik</th>
						<th>Haber yazar</th>
						<th>Haber tarih</th>
						<th>Haber fotourl</th>
						<th></th>
					</tr>
					<?php foreach ($donen as $kayit): ?>

						<tr>
							<td><?= $kayit['haberid']; ?> </td>
							<td><?= $kayit['baslik']; ?></td>
							<td><?= $kayit['icerik']; ?></td>
							<td><?= $kayit['yazar']; ?></td>
							<td><?= $kayit['tarih']; ?></td>
							<td><?= $kayit['fotourl']; ?></td>
							<td> <a class="btn btn-danger glyphicon glyphicon-remove" href="Adminsil.php?id=<?= $kayit['haberid']; ?>"></a> </td>
						</tr>
					
					<?php endforeach ?>
				</table>

			</div>
			<?php
		}
		else
		{
			echo "<script> alert('bu Sayfayı görmeye yetikiniz yok') </script>";
			echo "<script> window.location.href='index.php' </script>";

		}

?>