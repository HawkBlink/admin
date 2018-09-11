<?php require_once'../controleur/liens.php'; ?>
<!DOCTYPE.php>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
    	<link rel="shortcut icon" href="css/img/logo.png">
			<title>Adulte</title>
				<link rel="stylesheet" href="css/style_menu-admin.css">
    			<link rel="stylesheet" href="css/style_adulte.css">
    			<link rel="stylesheet" href="css/style_footer.css">
				<link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
		<!-- Corp de la page -->
  		<body>
  			<div class="menu" >
  				<?php include "include/menu/menu".$_GET['type'].".php"; ?><!-- Inclusion du menuAdulte.php -->
  			</div>
	        	<div class="container"><!--Container-fluid Début-->
		          	<div class="row"><!--Row Début-->
		          		<div style="margin-top: 150px;">
							<h1>Politique modèle de confidentialité.</h1><hr>
							<h4>Nous nous engageons à ne collecter aucun renseignement personnel, d'aucune sorte que ce soit.</h4>
						</div>
		          	</div><!--Row Fin-->
	      		</div><!--Container fluis Fin-->      
  		</body><!-- fin Corp de la page -->
			<!-- Pied de page -->
			<?php include "include/footer.php"; ?>
			<!-- Pied de page -->      
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="css\bootstrap\dist\js\bootstrap.min.js"></script>
<script src="js/scriptAddClassMenu.js"></script><!--Script affichage background du menu-->
</html>
