<div class="navbar-fixed">
  <nav class="nav-wrapper orange lighten-2">
    <div class="container">
      <h1 class="brand-logo black-text">ProgGuys</h1>
      <a class="sidenav-trigger" data-target="mobile-menu">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html" class="waves-effect waves-light blue btn">Présentation</a></li>
        <li><a class="dropdown-trigger waves-effect waves-light red btn" data-target="project-dropdown">Projets</a></li>
        <!-- Project Dropdown Structure -->
        <li><ul id='project-dropdown' class='dropdown-content'>
          <li>
            <div class="valign-wrapper black-text"><i class="material-icons prefix">groups</i><span>Game Jam</span></div>
            <ul>
              <li><a href="game-jam.html">Scientific Game Jam #3</a></li>
            </ul>
          </li>
          <li class="divider" tabindex="-1"></li>
          <li>
            <div class="valign-wrapper black-text"><i class="material-icons">videogame_asset</i><span>JEUX</span></div>
            <ul>
              <li><a href="puissance-4.html">Puissance 4</a></li>
            </ul>
          </li>
          <li class="divider" tabindex="-1"></li>
          <li>
            <div class="valign-wrapper"><i class="material-icons">public</i><span>Site Web</span></div>
            <ul>
            <li><a href="demacia.html">Demacia</a></li>
            </ul>
          </li>
        </ul></li>
        <li><a class="waves-effect waves-light btn orange modal-trigger" href="#contact">Contactez-nous</a></li>
      </ul>
    </div>

    <?php require_once "config.php"; ?>
    <html>
     <head>
     </head>
     <body>
      <?php require "menu.php"; ?>
      <h1>Connexion</h1>
      <form method="post" action="login.php">
        <input type='email' name='email' />
        <input type='password' name='password' />
        <input type='submit' value='Me connecter' />
      </form>
     </body>
    </html>
  </nav>
</div>

<ul class="sidenav orange lighten-4 collapsible" id="mobile-menu">
  <li>
    <div class="collapsible-header btn blue">
      <a href="index.html#presentation" class="white-text"><i class="material-icons">home</i>PRESENTATION</a>
    </div>
  </li>
  <li>
    <div class="collapsible-header btn red">
      <i class="material-icons">construction</i><span>Projets</span>
    </div>
    <div class="collapsible-body">
      <ul>
        <li><ul>
          <li>
            <div class="valign-wrapper"><i class="material-icons prefix">groups</i><span>Game Jam</span></div>
            <a href="game-jam.html">Scientific Game Jam #3</a>
          </li>
          </ul>
        </li>
        <li class="divider" tabindex="-1"></li>
        <li><ul>
          <li>
            <div class="valign-wrapper"><i class="material-icons">videogame_asset</i><span>JEUX</span></div>
            <a href="puissance-4.html">Puissance 4</a></li>
          </ul>
        </li>
        <li class="divider" tabindex="-1"></li>
        <li><ul>
          <li>
            <div class="valign-wrapper"><i class="material-icons">public</i><span>Site Web</span></div>
            <li><a href="demacia.html">Demacia</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </li>
  <li>
    <div class="collapsible-header waves-effect waves-light btn  orange"><a href="#contact" class="modal-trigger white-text"><i class="material-icons">email</i>Contactez-nous</a>
    </div>
  </li>
</ul>
