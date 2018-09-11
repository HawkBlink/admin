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
      <title>Praxis | Actualités | <?php echo $_GET['type'] ?></title>
      <meta name="description" content="praxis-sans-souci - trouver vous">
      <meta name="keywords" content="psychologie, psychopédagogie">
      <meta name="robots" content="index,follow">
        <link rel="stylesheet" href="css/style_menu.css">
        <link rel="stylesheet" href="css/style_actu.css">
        <link rel="stylesheet" href="css/style_footer.css">
        <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
<!-- Corp de la page -->
      <body>
      	<div id="page">
			<div class="menu" >
	          <?php include "include/menu/menu".$_GET['type'].".php"; ?><!-- Inclusion du menu.php -->
	        </div>
	        <div class="container-fluid"><!--Container DEBUT-->
	        	<div class="row">
	                <?php include '../modele/actu/actu_traitement.php'; ?>
	            </div>
	          </div><!--Container fin -->
        </div><!--Div PAGE FIN -->
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