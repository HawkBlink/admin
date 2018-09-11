<?php 
include'../../controleur/connexion/session_starter.php';
//on vérifie les token;
if(isset($_SESSION['token'])){
        if($_GET['token'] == $_SESSION['token']){
          require_once'../../controleur/liens.php';
          require '../../controleur/profil/profil_traitment.php';
?>
<!DOCTYPE html>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
			<title>Connect | Profil</title>
				<link rel="shortcut icon" href="../css/img/logo.png">
    			<link rel="stylesheet" href="../css/style_profil.css">
          <link rel="stylesheet" href="../css/style_footer.css">
    			<link rel="stylesheet" href="../css/style_menu-admin.css">
				<link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
		<!-- Corp de la page -->
  		<body>
  			<?php include 'include/menu_admin.php'; ?>
  			<div id="page">
        	<div class="container" id="background">
            
        		<div class="row"><!--Row DEBUT -->
	        		<!--On affiche les données du profil-->
	        		<div class="affichage col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <fieldset class="informations">
                      <legend class="info">Mes Informations</legend>
		                    <span class="gras">Votre nom et prénom : </span><br /><p class="variable text-center"><?php echo $_SESSION['nom']; ?> <?php echo $_SESSION['prenom']; ?></p><br />
		                    <span class="gras">Votre adresse email : </span><br /><p class="variable text-center"><?php echo $_SESSION['email']; ?></p><br />
		                    <span class="gras">Votre date de naissance : </span><br /><p class="variable text-center"><?php echo $_SESSION['date']; ?></p>
                </fieldset>
		            </div>
                  <form method="POST" action="" enctype="multipart/form-data" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <fieldset class="form-change">
                      <legend class="info">Changer mes Informations</legend>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-address-card fa-2x"></i></div>
                            </div>
                            <input type="text" class="form-control" name="prenom2" minlength="2" maxlength="10" placeholder="Roger">
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text fas fa-address-card fa-2x"></div>
                            </div>
                            <input type="text" class="form-control" name="nom2" minlength="2" maxlength="15" placeholder="Du pont">
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text fas fa-at fa-2x"></div>
                            </div>
                            <input type="email" class="form-control" name="email2" minlength="2" placeholder="roger.dupont@outlook.fr">
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text fas fa-calendar-alt fa-2x"></div>
                            </div>
                            <input type="date" class="form-control" name="date_born2" minlength="2">
                          </div>
                          <input type="submit" name="change_info" class="btn btn-outline-info col-lg-6">
                          <p style="font-size: 0.75em;">*Toutes les informations peuvent être changer indépendament</p>
                    </fieldset>
                  </form>
              </div>
            	</div><!--Row FIN -->
      		</div><!--Container FIN -->
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
            header('location: '.$liens_absolu.'connexion.php');
        }
    } else {
        session_destroy();
            header('location: '.$liens_absolu.'connexion.php');
    }
?>