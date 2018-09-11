<?php 
require_once'../../../controleur/liens.php';
include'../../../modele/actu/actualite-page_traitement.php';
?>
<!DOCTYPE.php>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
    	<link rel="shortcut icon" href="css/img/logo.png">
			<title>Praxis | <?php echo $titres.' | '.$_GET['type'] ?></title>
			<meta name="description" content="praxis-sans-souci - trouver vous">
			<meta name="keywords" content="psychologie, psychopédagogie">
			<meta name="robots" content="index,follow">
				<link rel="stylesheet" href="../../css/style_menu.css">
    			<link rel="stylesheet" href="../../css/style_actualite-page.css">
    			<link rel="stylesheet" href="../../css/style_footer.css">
				<link rel="stylesheet" href="../../css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
<!-- Corp de la page -->
  		<body>
  			<div class="menu" >
  				<?php include "../../include/menu/menu".$_GET['type'].".php"; ?><!-- Inclusion du menu.php -->
  			</div>
        	<div id="fb-root"></div>
				<script>
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
			<?php include '../../include/menu/menu'.$_GET['type'].'.php'; ?>
  			<div id="page"><!--Div PAGE DEBUT -->
  				<div class="container"><!--Container DEBUT-->
						<div class="row">
							<div class="content col-lg-12 col-md-12 col-sm-12">
								<img class="img-responsive rounded" <?php echo 'src="'.$img_path.'"'; ?> style="width: 100%; height: 500px; margin-top: 10px;" />
								<h1 class="titres"><?php echo $titres ?></h1>
									<h6 class="auteur font-italic ">Ecrit par <?php echo $auteur ?> le <?php echo $dateH ?></h6>
									<?php if(isset($date_edit)){ ?>
											<h6 class="auteur font-italic float-right" style="margin-left: 15px;">Edité par <?php echo $auteur ?> le <?php echo $date_edit ?></h6>
									<?php } ?>
										<div class="fb-share-button" <?php echo 'data-href="https://praxis-sans-souci.com/vue/actualite_page.php?id_billets='.$_GET['id_billets'].'&type='.$_GET['type'].'"' ?> data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
								<p><?php echo $contenuDecode; ?></p>
						</div>
	      			</div><!--Row fin -->
	      		</div><!--Container FIN -->
      		</div><!--PAGE FIN-->
	        <script src="../../js/jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../../css/bootstrap/dist/js/bootstrap.min.js"></script>
			<script src="../../js/jquery.fancybox.min.js"></script>
			<script src="../../js/scriptAddClassMenu.js"></script>
			<script src="../../js/validcontact.js"></script>
  		</body><!-- fin Corp de la page -->

	  		<!-- Pied de page -->
				<?php include "../../include/footer.php"; ?>
			<!-- Pied de page -->  
</html>