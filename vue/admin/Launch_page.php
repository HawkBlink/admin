<?php 
//on démarre la session 
session_start();
//on vérifie les token;
if(isset($_SESSION['token'])){
        if($_GET['token'] == $_SESSION['token']){

  require '../../controleur/liens.php';
    require_once '../../modele/bdd.php';
        require $liens_absolu.'/controleur/script/billets_bdd_header.php';
?>
<!DOCTYPE html>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
			<title>Connect | Accueil</title>
				<link rel="shortcut icon" href="../css/img/logo.png">
    			<link rel="stylesheet" href="../css/style_launch-page.css">
    			<link rel="stylesheet" href="../css/style_menu-admin.css">
          <link 
          <link rel="stylesheet" href="../css/style_footer.css">
				<link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
		<!-- Corp de la page -->
  		<body>
  			<?php include 'include/menu_admin.php';?>
  			<div id="page">
	        	<div class="container-fluid">
              <div class="row">
  	        		<div class="col-lg-5 col-sm-12 col-sm-5 offset-lg-1 actu">
  	        			<h1>Vos actualités</h1>
  	        				<?php require $liens_absolu.'/modele/actu/billets_bdd.php'; ?>
  	        		</div>
                <div class="col-lg-5 col-sm-12 col-sm-5 actu">
                  <h1>Vos évènements</h1>
                    <?php require $liens_absolu.'/modele/affich_agenda_launch.php'; ?>
                </div>
              </div>
	      		</div><!--Container fin -->
      		</div>
  		</body>
		<!-- fin Corp de la page -->

			<!-- Pied de page -->
        <?php include '../include/footer-admin.php'; ?>
			<!-- Pied de page -->     

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
<?php
    } else {
            session_destroy();
            header('location: '.$liens_internet.'connexion.php');
        }
    } else {
        session_destroy();
            header('location: '.$liens_internet.'connexion.php');
    }
?>