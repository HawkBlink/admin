<?php 
//on démarre la session 
session_start();
//on vérifie les token;
if(isset($_SESSION['token'])){
        if($_GET['token'] == $_SESSION['token']){
          require_once'../../../controleur/liens.php';
          require '../../../modele/bdd.php';
          require '../../../modele/actu/actu_traitement-admin.php';

?>
<!DOCTYPE html>
<html>
	<!-- Entête -->
	<head>
    	<meta charset="utf-8" lang="fr">
    	<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no"/>
			<title>Connect | Actualités</title>
				<link rel="shortcut icon" href="../../css/img/logo.png">
    		<link rel="stylesheet" href="../../css/style_new-actu.css">
    		<link rel="stylesheet" href="../../css/style_menu-admin.css">
        <link rel="stylesheet" href="../../css/style_footer.css">
				<link rel="stylesheet" href="../../css/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  				<script src="../../js/jquery-3.3.1.min.js"></script>
  				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  				<script src="../../css/bootstrap/dist/js/bootstrap.min.js"></script>
  				<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=34fbbj8avagynokwzinmbbsdx0jvw61dob94kvyuh9l024di"></script>
          <script src="index.js"></script>
          <script>tinymce.init({ 
          selector:'textarea',
          toolbar: 'paste undo redo | fontsizeselect fontselect | bold italic strikethrough underline | forecolor backcolor | alignleft aligncenter alignright alignjustify | outdent indent | rtl ltr |  numlist bullist | table tabledelete | charmap emoticons hr | link image media code',
          plugins: 'paste charmap emoticons hr lists table directionality textcolor code media link image',
          height: 600,
          code_dialog_height: 600,
          code_dialog_width: 600,
          images_upload_url: 'upload.php',
          images_upload_handler: function(blobInfo, success, failure){
            var xhr, formData;
                  
                    xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;
                    xhr.open('POST', 'upload.php');
                  
                    xhr.onload = function() {
                        var json;
                    
                        if (xhr.status != 200) {
                            failure('HTTP Error: ' + xhr.status);
                            return;
                        }
                    
                        json = JSON.parse(xhr.responseText);
                    
                        if (!json || typeof json.location != 'string') {
                            failure('Invalid JSON: ' + xhr.responseText);
                            return;
                        }
                    
                        success(json.location);
                    };
                  
                    formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());
                  
                    xhr.send(formData);
                },

            });
          
      </script>

	</head>
		<!-- Corp de la page -->
  		<body>
  			<?php include '../include/menu_admin.php';?>
  			<div id="page"><!--Div PAGE DEBUT -->
  				<div class="container-fluid"><!--Container DEBUT-->
            <div class="row">
              <div class="form-style col-lg-6 offset-lg-1 col-md-6 col-sm-6 col-xs-12">
                <form method="POST" action="" enctype="multipart/form-data" class="form-group"">
                  <fieldset cass="form-group">
                    <label for="title">Titre de l'article :</label><input id="title" type="text" placeholder="Le nom de l'article" name="objet_art" <?php if(isset($_POST['objet_art'])){echo 'value="'.$_POST['objet_art'].'"';} ?> class="form-control coteinput"/><br />
                    <label for="editor">Contenu de l'article :</label><textarea id="editor" placeholder="Le contenu de l'article" name="editor"><?php if(isset($_POST['editor'])){echo $_POST['editor'];} ?></textarea><br />
                    <label for="img" >L'image d'entête :</label><br />
                    <input type="hidden" name="MAX_FILE_SIZE" value="12000000" />
                    <input type="file" name="img" id="img"/>
                    <br /><hr>
                    <input type="submit" value="Envoyer" name="new_art" class="btn btn-primary"/>
                  </fieldset>
                </form>
              </div>
              <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-6 col-xs-12 table-responsive">
                  <?php require $liens_absolu.'/modele/actu/billets_bdd.php'; ?>
              </div>
            </div>
      		</div><!--Container fin -->
      	</div><!--Div PAGE FIN -->
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