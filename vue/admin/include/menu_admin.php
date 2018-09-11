<nav class="navbar bg-light navbar-expand-lg navbar-default fixed-top ">
  <div class="container">
  <a class="navbar-brand navfix" <?php echo 'href="'.$liens_internet.'/vue/admin/Launch_page.php?token='.$_SESSION['token'].'&id='.$_SESSION['id'].'"';?> >
    <img <?php echo 'src="'.$liens_internet.'/vue/css/img/logo.png"'; ?> width="45" height="45" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-bars""></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/admin/Launch_page.php?token='.$_SESSION['token'].'&id='.$_SESSION['id'].'"';?> >Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/admin/ajoutphoto/ajout_photo.php?token='.$_SESSION['token'].'&id='.$_SESSION['id'].'"';?> >Ajouter une photo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/admin/newactu/new_actu.php?token='.$_SESSION['token'].'&id='.$_SESSION['id'].'"';?> >Ajouter une actualité</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/admin/event/agenda.php?token='.$_SESSION['token'].'&id='.$_SESSION['id'].'"';?> >Evènenements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/admin/deconnexion.php?token='.$_SESSION['token'].'&id='.$_SESSION['id'].'"';?> >Deconnexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/admin/page_profil.php?token='.$_SESSION['token'].'&id='.$_SESSION['id'].'"';?> ><i class="fas fa-user-cog"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>