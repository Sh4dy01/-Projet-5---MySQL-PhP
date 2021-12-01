<?php if(isset($_SESSION['user'])){
  $sql = "SELECT id, titre FROM projet WHERE id_user=".$_SESSION['user']['id'].";";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $allProjects = $pre->fetchAll(PDO::FETCH_ASSOC); }?>

  <div class="navbar-fixed">
    <nav class="nav-wrapper orange lighten-2">
      <div class="container">
        <h1 class="brand-logo black-text">ProgHub</h1>
        <a class="sidenav-trigger" data-target="mobile-menu">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down grey darken-2">
          <li class="orange lighten-1"><a href="index.php" class="waves-effect waves-light"><i class="material-icons">home</i></a></li>
          <li class="red"><a class="dropdown-trigger waves-effect waves-light" data-target="project-dropdown"><i class="material-icons">construction</i></a></li>
          <!-- Project Dropdown Structure -->
          <li><ul id='project-dropdown' class='dropdown-content'>
            <?php foreach ($allProjects as $project){ ?>
              <li><a href="project.php?id=<?php echo $project['id'] ?>"><?php echo $project['titre'] ?></a></li>
            <?php } ?></ul></li>
          <li class="orange darken-1"><a class="waves-effect waves-light modal-trigger" href="#contact"><i class="material-icons">email</i></a></li>
          <li><a class="waves-effect waves-light" href="php/logout.php"><i class="material-icons">logout</i></a></li>
        </ul>
      </div>
    </nav>
  </div>
<ul class="sidenav orange lighten-4 collapsible" id="mobile-menu">
  <li>
    <div class="collapsible-header btn blue">
      <a href="index.html#presentation" class="white-text"><i class="material-icons">home</i>PRESENTATION</a>
    </div>
  </li>
  <li>
    <?php if(isset($_SESSION['user'])) {?>
      <div class="collapsible-header btn red">
        <i class="material-icons">construction</i><span>Projets</span>
      </div>
      <div class="collapsible-body">
        <ul>
          <?php foreach ($allProjects as $project){ ?>
            <li><a href="game-jam.html"><?php echo $project['titre'] ?></a></li>
          <?php } ?>
        </ul>
      </div>
    <?php } ?>
  </li>
  <li>
    <div class="collapsible-header waves-effect waves-light btn  orange"><a href="#contact" class="modal-trigger white-text"><i class="material-icons">email</i>Contactez-nous</a>
    </div>
  </li>
  <?php if(isset($_SESSION['user'])) {?>
    <li>
      <div class="collapsible-header btn grey">
        <a href="php/logout.php" class="white-text"><i class="material-icons">logout</i>DECONNEXION</a>
      </div>
    </li>
  <?php } ?>
</ul>

<!-- Contact Modal Structure -->
<div id="contact" class="modal">
  <div class="modal-content black-text">
    <h4 class="center-align">Contactez-nous</h4>
    <div class="row">
      <form class="col s12">
        <div class="row center-align">
          <h5>Qui contacter ?</h5>
          <div class="col s6 l3 offset-l2">
            <p>
              <label>
                <input type="checkbox" />
                <span>Hugo MAESTRACCI</span>
              </label>
            </p>
          </div>
          <div class="col s6 l3 offset-l2">
            <p>
              <label>
                <input type="checkbox" />
                <span>Baptiste MILLAN</span>
              </label>
            </p>
          </div>
        </div>
        <div class="row center-align">
          <h5>Vos coordonnées</h5>
          <div class="input-field col s6 m4 l4">
            <i class="material-icons prefix">account_circle</i>
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Prénom</label>
          </div>
          <div class="input-field col s6 m4 l4">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Nom</label>
          </div>
          <div class="input-field col s12 m4 l4">
            <i class="material-icons prefix">business</i>
            <input id="entreprise_name" type="text" class="validate">
            <label for="entreprise_name">Entreprise</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <i class="material-icons prefix">email</i>
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s6 m6 l6">
            <i class="material-icons prefix">phone</i>
            <input id="telephone" type="tel" class="validate">
            <label for="telephone">Téléphone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="textarea2" class="materialize-textarea" data-length="250"></textarea>
            <label for="textarea2">Message</label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="modal-close waves-effect waves-light pulse blue btn" type="submit" name="action">
          <i class="material-icons right">send</i>Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>
