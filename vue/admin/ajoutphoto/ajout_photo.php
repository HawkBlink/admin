<?php 
require '../../../controleur/connexion/session_starter.php';
//on vérifie les token;
if(isset($_SESSION['token'])){
    if($_GET['token'] == $_SESSION['token']){
	    require_once'../../../controleur/liens.php';	
		require_once '../../../controleur/script/gestion-gallerie/gest_photo.php';
?>
<!DOCTYPE html>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
			<title>Connect | Photo</title>
				<link rel="shortcut icon" href="../../css/img/logo.png">
    			<link rel="stylesheet" href="../../css/style_ajout-photo.css">
    			<link rel="stylesheet" href="../../css/style_menu-admin.css">
    			<link rel="stylesheet" href="../../css/style_footer.css">
				<link rel="stylesheet" href="../../css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
				<script src="../../js/jquery-3.3.1.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="../../css/bootstrap/dist/js/bootstrap.min.js"></script>
	</head>
	<!-- FIN d'entête -->
		<!-- Corp de la page -->
  		<body>
  			<?php include '../include/menu_admin.php'; ?>
  			<div id="page">
        	<div class="container-fluid" id="background">
	          <div class="row">
	              	<form method="POST" action="" enctype="multipart/form-data" class="col-lg-4 col-md-5 col-sm-6 col-xs-12 offset-sm-1 offset-lg-2"><!--Formulaire d'envoi de fichier DEBUT -->
	              		<fieldset class="form-group new_file"> 
	              			<h3 class="title_ajout">Ajouter une image </h3><hr>
		              		<label for="selectDoss">Vos dossier existants : </label><br /><hr>
	  							<?php include'../../../controleur/script/dossier_img/selectDoss.php';?><!--On inclu la recherche de dossier-->
		              	  	<input type="hidden" name="MAX_FILE_SIZE" value="12000000" /><br />
		                  	<label for="img">Envoyer une image:</label><br /><hr>
							<input type="file" name="img" id="img" class="form-control-file"/>
							<input type="text" name="namefile" placeholder="Nommez votre fichier" class="form-control"><br />
		                  	<input type="submit" value="Envoyer" name="Fichier"  class="btn btn-primary mb-2"/>
	                  	</fieldset>
	                </form><!--Formulaire d'envoi de fichier FIN -->

	                <form method="POST" action="" class="col-lg-4 col-md-5 col-sm-5 col-xs-12"><!--Formulaire de création de dossier DEBUT -->
	                	<fieldset class="form-group new_doss"> 
		              	  <label for="doss_new"><h3>Créer un nouveau dossier :</h3></label><br /><hr>
		              	  <input type="text" id="doss_new" name="doss_new" placeholder="Album photo" class="form-control"/><br />
		              	  <input type="submit" value="Créer le dossier" class="btn btn-primary mb-2"/>
		              	</fieldset>
	              	</form><!--Formulaire de création de dossier FIN -->
	          </div><!--row FIN -->

	          <div class="row">
	              	<div id="div" class="suppr_file col-lg-6 col-md-6 col-sm-8 col-xs-12 offset-sm-2 offset-md-3 offset-lg-3"><!--Formulaire de suppression de fichier DEBUT -->
	              		<h3 class="title_ajout">Supprimer une image ou un dossier</h3><hr>
						<form method="POST" action="">
							<fieldset class="form-group">
				        			<?php include '../../../controleur/script/dossier_img/selectDoss.php'; ?><br />
			        			<input type="submit" name="envoie_liens_img" value="Aller vers le dossier"  class="btn btn-primary"/>
			        		</fieldset>
			        	</form>
				        <form method="POST" action="" class="selection">
				        	<fieldset class="form-group"> 
						        <?php include'../../../controleur/script/dossier_img/suppr_img.php';?><br />
						        <input type="submit" value="Supprimer le fichier"  name="selection" class="btn btn-primary mb-2">					            
				        	</fieldset>
				        </form><!--Formulaire suppression de fichier FIN -->
			        	<hr>		        	       
			          	<form method="POST" action="" class="suppr_doss"><!--Formulaire supression de dossier DEBUT -->
						    <fieldset class="form-group"> 
								<?php include'../../../controleur/script/dossier_img/suppr_doss.php';?><br />
								<input type="submit" name="selection_doss" value="Supprimer le dossier" class="btn btn-primary mb-2 selection_doss">
								<div class="afficher"></div>				            
						    </fieldset>
						</form><!-- Formulaire supression de dossier FIN -->
					</div><!-- Formulaire de suppression de fichier et dossier FIN -->
				</div><!-- row FIN -->
      		</div><!-- Container fin -->
      	</div>
  		</body>
		<!-- fin Corp de la page -->

			<!-- Pied de page -->
        <?php include '../../include/footer-admin.php'; ?>
			<!-- Pied de page -->     
</html> 
<?php

} else {
            session_destroy();
            header('location:../../../connexion.php');
        }
    } else {
        session_destroy();
            header('location:../../../connexion.php');
    }
?>
