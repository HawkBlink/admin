<?php 
  if(isset($_GET['success'])){
    ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong><?php echo $_GET['success']; ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php
  }
require $liens_absolu.'/controleur/script/contact/traitement_contact.php';
?>
<!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" >Formulaire de contact</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="" class="form-group">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                      <label for="email">Votre email : </label>
                      <input type="email" id="email" class="Form-control" name="email" placeholder="exemple@exemple.fr" maxlength="150" required/><br />
                      <label for="subject" >L'objet de votre email : </label>
                      <input type="text" class="Form-control" name="objet" id="subject" maxlength="60" required/>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 align-self-center"><br />
                    <div class="input-group">
                      <div class="input-group-prepend" >
                        <div class="input-group-text" id="prepend-nom">Nom</div><span></span>
                      </div>
                      <input type="text" name="nom" id="nom"class="Form-control" minlength="2" maxlength="30" required/>
                    </div><br />
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" id="prepend-prenom">Prénom</div>
                      </div>
                      <input type="text" name="prenom" id="prenom" class="Form-control" minlength="2" maxlength="30" required/>
                    </div>
                  </div>
                </div><br />
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      <label for="text">Votre demande : </label>
                      <textarea id="text" Placeholder="Insérer votre demande" class="Form-control" name="content" rows="7" maxlength="5500" required></textarea>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="type" <?php echo 'value="'.$_GET['type'].'"' ?>/>
                <input type="submit" class="btn btn-primary" id="envoyer" value="Envoyer" />
              </div>
          </form>
          </div>
        </div>
      </div>
<!--Modal-->
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <div class="row">
              <ul class="social col-lg-6 col-sm-6 col-md-6">
                  <a href="https://www.facebook.com/pages/biz/local/Praxis-Sans-Soucis/1134180826627891/" target="_blank" class="facebook offset-md-1"><li class="fab fa-facebook fa-4x"></li></a>
                  <a href="https://www.instagram.com/rosaliebojoly/" target="_blank" class="instagram offset-1"><li class="fab fa-instagram fa-4x"></li></a>
                  <a href="https://www.linkedin.com/in/rosalie-bojoly-98200741/" target="_blank" class="linkedin offset-1"><li class="fab fa-linkedin fa-4x"></li></a>
              </ul>
              <button type="button" class="btn btn-outline-primary col-sm-6 col-md-6" data-toggle="modal" data-target="#exampleModalCenter">
                Contactez nous maintenant !
              </button>
          </div>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-lg-6 col-sm-12 col-md-12 justify-content-sm-center">
          <div class="row justify-content-md-center">
            <div class="col-md-3 offset-lg-2 mb-md-0 mb-3">
                <h5 class="text-uppercase">Liens utiles</h5>
                <ul class="list-unstyled">
                  <li>
                    <a <?php echo 'href="confident.php?type='.$_GET['type'].'"' ?> >Politique de confidentialité</a>
                  </li>
                  <li>
                    <a href="#!">E-softing</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">Liens du site</h5>
                <ul class="list-unstyled">
                  <li>
                    <a <?php echo 'href="'.$liens_internet.'/"'; ?> >Accueil</a>
                  </li>
                  <li>
                    <a <?php echo 'href="'.$liens_internet.'/vue/portfolio.php?type='.$_GET['type'].'"'; ?> >Portfolio</a>
                  </li>
                  <li>
                    <a <?php echo 'href="'.$liens_internet.'/vue/actu.php?type='.$_GET['type'].'"'; ?> >Actualités</a>
                  </li>
                  <li>
                    <a <?php echo 'href="'.$liens_internet.'/vue/event.php?type='.$_GET['type'].'"'; ?> >Evènements</a>
                  </li>
                </ul>

              </div>
            </div>
      </div>
    </div>
  </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright
      <a href="https://praxis-sans-souci.com"> praxis-sans-souci.com</a>
    </div>
  </footer>
  <!-- Footer -->