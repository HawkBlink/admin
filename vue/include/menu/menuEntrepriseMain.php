<nav class="navbar bg-light navbar-expand-lg navbar-default fixed-top ">
  <div class="container">
  <a class="navbar-brand navfix" <?php echo 'href="'.$liens_internet.'/vue/entreprise.php?type=Entreprise"'; ?>>
    <img src="css/img/logo.png" width="45" height="45" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-bars" id="click"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" class="btn-menu" <?php echo 'href="'.$liens_internet.'/vue/adulte.php?type=Entreprise"'; ?> >Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#cohesion">Cohésion de groupe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#coaching">Coaching interculturel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#bien">Bien-être au travail.</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#commu">Travail sur la communication</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#orientation">Orientation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/portfolio.php?type=Entreprise"'; ?> >Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" <?php echo 'href="'.$liens_internet.'/vue/event.php?type=Entreprise"'; ?> >Evènements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/vue/actu.php?type=Entreprise"'; ?> >Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="'.$liens_internet.'/"'; ?> >Ça ne vous correspond pas ?</a>
        </li>
      </ul>
    </div>
  </div>
</nav>