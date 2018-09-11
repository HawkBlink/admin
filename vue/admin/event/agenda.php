<?php 
//on démarre la session 
session_start();
//on vérifie les token;
if(isset($_SESSION['token'])){
        if($_GET['token'] == $_SESSION['token']){
          require_once'../../../controleur/liens.php';
          require_once'../../../modele/bdd.php';
          require_once '../../../controleur/script/agenda_traitment.php';
?>
<!DOCTYPE html>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
			<title>Connect | Agenda</title>
				<link rel="shortcut icon" href="../../css/img/logo.png">
    			<link rel="stylesheet" href="../../css/style_agenda.css">
    			<link rel="stylesheet" href="../../css/style_menu-admin.css">
          <link rel="stylesheet" href="../../css/style_footer.css">
				<link rel="stylesheet" href="../../css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
		<!-- Corp de la page -->
  		<body>
  			<?php include '../include/menu_admin.php';?>
  			<div id="page">
	        	<div class="container-fluid">
              
  	        		<div class=" new_event">
  	                 <form method="POST" action="" class="form-group form_agenda">
                      <div class="row">
                        <fieldset id="loca" class="col-lg-4 col-md-4 offset-md-1 offset-lg-1">
                            <legend>Localisation</legend>
                          <label for="num_rue">Numéro :</label>
                          <input type="text" id="num_rue" name="num_rue" class="form-control" placeholder="18b : 35d" maxlength="10" minlength="1" required <?php if(isset($num_rue_into)){ echo 'value="'.$num_rue_into.'"'; } ?> /><br />
                          <label for="name_allee">Type d'allée :</label>
                          <input type="text" id="name_allee" name="name_allee" class="form-control" placeholder="Rue : allée : Avenue" maxlength="15" minlength="2" required <?php if(isset($name_allee_into)){ echo 'value="'.$name_allee_into.'"'; } ?> /><br />
                          <label for="name_rue">Nom de rue :</label>
                          <input type="text" id="name_rue" name="name_rue" class="form-control" placeholder="Principale : Sébastopol" maxlength="15" minlength="2" required <?php if(isset($name_rue_into)){ echo 'value="'.$name_rue_into.'"'; } ?> /><br />
                          <label for="name_city">Nom de la ville :</label>
                          <input type="text" id="name_city" name="name_city" class="form-control" maxlength="70" minlength="3" required <?php if(isset($name_city_into)){ echo 'value="'.$name_city_into.'"'; } ?> /><br />
                          <label for="code_postal">Code postal de la ville :</label>
                          <input type="number" id="code_postal" name="code_postal" class="form-control" min="01" max="99999" required <?php if(isset($code_postal_into)){ echo 'value="'.$code_postal_into.'"'; } ?> /><br />
                        </fieldset>
                        <fieldset id="nom" class="col-lg-4 offset-lg-2 col-md-4 offset-md-2">
                            <legend>Contenu</legend>
                        <label for="name_event">Nom de votre évènement :</label>  
                        <input type="text" id="name_event" name="name_event" class="form-control" maxlength="70" minlength="3" required <?php if(isset($name_event_into)){ echo 'value="'.$name_event_into.'"'; } ?> /><br />
                        <label for="date_event">Date :</label>
                        <input type="date" id="date_event" name="date_event" class="form-control" maxlength="70" minlength="3" required <?php if(isset($date_into)){ echo 'value="'.$date_into.'"'; } ?> /><br />
                        <label for="heure_debut">Heure de début:</label>
                        <input type="time" id="heure_debut" name="heure_debut" class="form-control" maxlength="70" minlength="3" required <?php if(isset($heure_debut_into)){ echo 'value="'.$heure_debut_into.'"'; } ?>/><br />
                        <label for="descript_event">Description brève (300 caractère) :</label>
                        <textarea id="descript_event" name="descript_event" class="form-control" maxlength="300" minlength="3" rows="3" required ><?php if(isset($descript_event_into)){ echo $descript_event_into; }?></textarea><br />
                        </fieldset>
                        </div>
                        <input type="submit" name="envoie_agenda" value="Créer" class="btn btn-primary col-lg-1 col-md-1 offset-lg-10 offset-md-10"/>
                     </form>
  	        		</div>
              
                <div class="row">
                  <div class="col-sm-6 offset-sm-3">
                  <?php include '../../../modele/affich_agenda.php'; ?>
                </div>
                </div>
	      		</div><!--Container fin -->
      		</div>
  		</body>
		<!-- fin Corp de la page -->

			<!-- Pied de page -->
        <?php include '../../include/footer-admin.php'; ?>
			<!-- Pied de page -->     

<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../../css/bootstrap/dist/js/bootstrap.min.js"></script>
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