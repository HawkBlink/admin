<?php 
	require_once'../controleur/liens.php';
	include '../controleur/script/affich_portfolio.php'; 
?>
<!DOCTYPE.php>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
    	<link rel="shortcut icon" href="css/img/logo.png">
			<title>Praxis | Gallerie | <?php echo $_GET['type'] ?></title>
			<meta name="description" content="praxis-sans-souci - trouver vous">
			<meta name="keywords" content="psychologie, psychopédagogie">
			<meta name="robots" content="index,follow">
				<link rel="stylesheet" href="css/jquery.fancybox.min.css">
				<link rel="stylesheet" href="css/style_menu.css">
    			<link rel="stylesheet" href="css/style_portfolio.css">
    			<link rel="stylesheet" href="css/style_footer.css">
				<link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
<!-- Corp de la page -->
  		<body>
  			<div class="menu" >
  				<?php include "include/menu/menu".$_GET['type'].".php"; ?><!-- Inclusion du menu.php -->
  			</div>
        	<div class="container" id="background">
        		<div class="row">
        			<div class="selection-xs d-block d-sm-none">
		        		<form method="POST" action="#" class="form-group formulaire-port">
		        			<label for="selectDoss">Selectionner un dossier : </label>
		        			<?php include '../controleur/script/dossier_img/selectDoss.php'; ?><br/>
		        			<input type="submit"  name="envoie" class="btn btn-primary col-lg-12" value="Aller"/>
		        		</form>
		        	</div>
	        		<div class="col-lg-3 col-md-3 col-sm-5 selection position-fixed d-none d-sm-block">
		        		<form method="POST" action="#" class="form-group formulaire-port">
		        			<label for="selectDoss">Selectionner un dossier : </label>
		        			<?php include '../controleur/script/dossier_img/selectDoss.php'; ?><br/>
		        			<input type="submit"  name="envoie" class="btn btn-primary col-lg-12" value="Aller"/>
		        		</form>
		        	</div>
		        </div>
		        <div class="row">
		        	<?php include '../controleur/script/img_while.php'; ?>
		        </div>
        	</div>
	        <script src="js/jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
			<script src="js/jquery.fancybox.min.js"></script>
			<script src="js/scriptAddClassMenu.js"></script>
			<script src="js/validcontact.js"></script>
  		</body><!-- fin Corp de la page -->

	  		<!-- Pied de page -->
				<?php include "include/footer.php"; ?>
			<!-- Pied de page -->  
</html>