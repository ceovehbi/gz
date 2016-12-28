<?php 
	// Edit by Uğur KILCI
	require_once("ver.php"); 
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
	<meta charset="UTF-8">
	<title>fvhkukgfbvk</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="shortcut icon" href="images/ciizi.png">
	</head>
	<body>
		<div class="full"> 
			<div class="mstr"> 
				<?php 
					// Birde böyle dene bakalım olacak mı?
					$icerik = $baglanti->prepare("SELECT * FROM status");
					$icerik->execute();
					$dizi = $icerik->fetchALL(PDO::FETCH_ASSOC);
					foreach($dizi as $row){

					foreach($islem as $row){
						echo'
							<div class="mstr1">
								<div class="mstr2">
									<ul><li>'.$row["star_er"].'<span style="float:right;">date:'.$row["star_date"].'</span></li></ul>
								</div>
							</div>
							<div class="mstr4">
								<ul>
									<li>'.substr($row["star_be"],0,400).'</li>
								</ul>
							</div>
							<div class="mstr3"> 
								<ul>comment :2</ul>  
							</div>
						';
					}
				?>
				
  			</div>
			<?php } ?>
			<div class="profil"> 
				<?php  
				    if (!isset($_SESSION['Kullanici'])) {
					echo 'Hoş Geldin:<label> Guest </label>'
					    . '<a href="http://localhost/ciizi/reglo.php">Üye Girişi   </a>'
					    . '<a href="http://localhost/ciizi/reglo.php">Üye Ol</a>';
				    }else if (isset($_SESSION['Kullanici'])){
					$username = $_SESSION['Kullanici'];
					echo 'Hoş Geldin:<label> '.$username.'</label><br>'
					    . '<a href="http://localhost/ciizi/uyebilgi.php">Bilgilerim</a><br>'
					    . '<a href="http://localhost/ciizi/cikis.php">Çıkış</a><br>';
					}
				?>
   			</div>
		</div>
	</body>
</html>
