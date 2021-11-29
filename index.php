<!DOCTYPE html>
  <?php require_once "config.php"; ?>
  <html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8"/>
      <link rel="preconnect" href="https://fonts.googleapis.com"/>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Oswald&display=swap" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
      <link type="text/css" rel="stylesheet" href="css/style-min.css"/>
      <script src="https://kit.fontawesome.com/b8e750155b.js" crossorigin="anonymous"></script>

      <title>ProgGuys : 2 jeunes programmeurs fous</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="Site des ProgGuys"/>
    </head>

    <body class="grey lighten-3">

      <!-- Navbar & SideNav -->
      <header>
<<<<<<< HEAD
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
=======
        <?php
          require "menu.php";
        ?>
      </header>
>>>>>>> 04cbc923197b2b04794e7aa7e3e41a3a79e1dbc3

      <main id="main">

        <!-- Admin !-->
        <section class="container section grey">
          <h3>Liste des utilisateurs</h3>
          <?php
            $sql = "SELECT * FROM user";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $user){ ?>
            <div class="bloc_user">
              <h4><?php echo $user['first_name']." ".$user['last_name'] ?></h4>
              <span class="email"><?php echo $user['email'] ?></span>
            </div>
            <?php } ?>

        </section>

        <!-- Presentation !-->
        <section class="container section grey lighten-4 z-depth-4" id="presentation">
          <!-- PHP pour récupérer les users appartenant à la même équipe de l'user login !-->
          <div class="center-align">
            <h2>Présentation des ProgGuys</h2>
            <i>2 Jeunes programmeurs fous</i>
          </div>
          <div class="row">
            <div class="student card hoverable green lighten-1 center-align col s10 offset-s1 m4 offset-m1 l4 offset-l1 z-depth-5">
              <div class="card-image waves-effect waves-block waves-green">
                <img src="img/hugo.jpg" alt="hugo maestracci person ProgGuys prog guys" class="responsive-img activator">
              </div>
              <div class="card-content">
                <h3 class="card-title activator grey-text text-darken-4">Hugo MAESTRACCI</h3>
              </div>
              <div class="card-reveal">
                <h4 class="card-title grey-text text-darken-4">Hugo MAESTRACCI<i class="material-icons right">close</i></h4><br>
                <ul class="left-align">
                  <li><span>Etudiant en <a href="https://gaming.tech/" target="_blank" rel="external nofollow">G-TECH 1</a> au Gaming Campus de Lyon</span></li>
                  <li><span>Anciennement :</span><br>
                    <ul>
                      <li><span>- Serveur à l'Instant Gourmand</span></li>
                      <li><span>- 1 an en License informatique à TOULON</span></li>
                      <li><span>- BAC STI2D option Système d'Information et Numérique</span></li>
                    </ul>
                  </li>
                  <li><blockquote class="center-align">"Je suis rentré au Gaming Campus dans le seul but d'atteindre mon rêve, qui est d'avoir les compétences nécessaires pour réaliser mes projets dans le monde du jeu-vidéo."</blockquote></li>
                </ul>
              </div>
              <div class="card-action">
                <a href="https://www.linkedin.com/in/hugo-maestracci-22b019222/" rel="nofollow external" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Sh4dy01" rel="nofollow external" target="_blank"><i class="fab fa-github-square"></i></a>
                <a href="https://www.instagram.com/hugo.m.83/" rel="nofollow external" target="_blank"><i class="fab fa-instagram-square"></i></a>
              </div>
            </div>

            <div class="student card hoverable blue lighten-1 center-align col s10 offset-s1 m4 offset-m2 l4 offset-l2 z-depth-5">
              <div class="card-image waves-effect waves-block waves-blue">
                <img src="img/baz.jpg" alt="baptiste millan person ProgGuys prog guys" class="responsive-img activator">
              </div>
              <div class="card-content">
                <h3 class="card-title activator grey-text text-darken-4">Baptiste MILLAN</h3>
              </div>
              <div class="card-reveal">
                <h4 class="card-title grey-text text-darken-4">Baptiste MILLAN<i class="material-icons right">close</i></h4><br>
                <ul class="left-align">
                  <li><span>Etudiant en <a href="https://gaming.tech/" target="_blank" rel="external nofollow">G-TECH 1</a> au Gaming Campus de Lyon</span></li>
                  <li><span>Anciennement :</span><br>
                    <ul>
                      <li><span>- BAC S au Lycée Français de Séoul</span></li>
                      <li><span>- DUT GMP à Rennes</span></li>
                    </ul>
                  </li>
                  <li><blockquote class="center-align">"Je suis très content dans cette filière et même si je ne connaissais jusqu'alors rien en programmation, j'avance et tout le monde se serre les coudes"</blockquote></li>
                </ul>
              </div>
              <div class="card-action">
                <a href="https://www.instagram.com/baptiste_millan14/" rel="nofollow external" target="_blank"><i class="fab fa-instagram-square"></i></a>
              </div>
            </div>
          </div>
        </section>

        <!-- Projects !-->
        <section class="container section grey lighten-4 z-depth-4" id="projects">
          <!-- PHP pour récupérer les projets appartenant à l'user login !-->

          <h2 class="center-align">Portfolio</h2>
          <ul class="collapsible popout">
            <li>
              <div class="collapsible-header hoverable header-jam valign-wrapper">
                <h3 class="container center-align white-text">GAME JAM</h3>
              </div>
              <div class="collapsible-body row">
                <div class="col s12 m12 l6">
                  <div class="card hoverable">
                    <div class="card-image">
                      <img class="responsive-img" src="img/scientific-game-jam.jpg" alt="scientific game jam ProgGuys prog guys">
                    </div>
                    <div class="card-content">
                      <h5>Scientific Game Jam #3</h5>
                      <p>Pour but de tester mes compétences actuelles en programmation, j'ai participé à ma première Game Jam à Lyon en distanciel.</p>
                    </div>
                    <div class="card-action">
                      <div class="row valign-wrapper">
                        <a class="col s4 m4 l4" href="game-jam.html">Y aller</a>
                        <div class="right col s8 m8 l8">
                          <div class="right chip">
                            <img src="img/hugo_s.jpg" alt="Contact Person hugo maestracci">
                            Hugo
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header hoverable header-game valign-wrapper">
                <h3 class="container center-align white-text">JEUX</h3>
              </div>
              <div class="collapsible-body row">
                <div class="col s12 m12 l6">
                  <div class="card hoverable">
                    <div class="card-image">
                      <img class="responsive-img" src="img/p4_1.jpg" alt="connect 4 game ProgGuys prog guys">
                    </div>
                    <div class="card-content">
                      <h4>Projet #2 : Puissance 4 textuel</h4>
                      <p>Réalisation d'un Puissance 4 sous le langage de programmation C, sans interface graphique et dans un univers Linux.</p><br>
                    </div>
                    <div class="card-action">
                      <div class="row valign-wrapper">
                        <a class="col s4 m4 l4" href="puissance-4.html">Y aller</a>
                        <div class="right col s8 m8 l8">
                          <div class="right valign-wrapper chip">
                            <img src="img/baz_s.jpg" alt="Contact Person baptiste millan ProgGuys prog guys">
                            Baptiste
                          </div>
                          <div class="right valign-wrapper chip">
                            <img src="img/hugo_s.jpg" alt="Contact Person hugo maestracci ProgGuys prog guys">
                            Hugo
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header hoverable header-web valign-wrapper">
                <h3 class="container center-align white-text">SITE WEB</h3>
              </div>
              <div class="collapsible-body row">
                <div class="col s12 m12 l6">
                  <div class="card hoverable">
                    <div class="card-image">
                      <img class="responsive-img" src="img/sitedemacia1.jpg" alt="site web ProgGuys prog guys league of legends demacia">
                    </div>
                    <div class="card-content">
                      <h4>Projet #3 : HTML/CSS/SEO</h4>
                      <p>Premier site pour découvrir les langages HTML/CSS et SEO sur l'univers de Demacia appartenant au jeu  League of Legends.</p>
                    </div>
                    <div class="card-action">
                      <div class="row valign-wrapper">
                        <a class="col s4 m4 l4" href="demacia.html">Y aller</a>
                        <div class="right col s8 m8 l8">
                          <div class="right chip">
                            <img src="img/baz_s.jpg" alt="Contact Person baptiste millan ProgGuys prog guys">
                            Baptiste
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </section>
      </main>

      <!-- Easter Egg -->
      <div class="easter-egg">
        <div class="secret" id="secret1_img">
          <img src="img/tondeuse_om.png" alt="easter egg ProgGuys prog guys om" id="om1">
          <img src="img/tondeuse_om2.png" alt="easter egg ProgGuys prog guys om" id="om2">
        </div>
        <div class="secret" id="secret2_img">
          <img src="img/tondeuse_ol.png" alt="easter egg ProgGuys prog guys ol" id="ol1">
          <img src="img/tondeuse_ol2.png" alt="easter egg ProgGuys prog guys om" id="ol2">
        </div>
        <div class="secret finish" id="finish">
          <img src="img/arrivee.jpg" alt="easter egg ProgGuys prog guys finish">
        </div>
      </div>

      <!-- Footer -->
      <footer class="page-footer grey darken-3">
        <div class="container">
          <div class="row">
            <div class="col s8 m6 l6">
              <div class="row">
                <div class="input-field col s12 m12 l12">
                  <input id="secret_text" type="text" data-length="9">
                  <label for="secret_text">Jeu contenant le premier easter egg ?</label>
                </div>
              </div>
              <div class="row valign-wrapper center">
                <div class="col s6">
                  <a class="btn-floating right waves-effect waves-light red" id="secret_btn"><i class="material-icons small">done</i></a>
                </div>
                <div class="col s6">
                  <a class="btn-floating left waves-effect waves-light red" id="return_btn"><i class="material-icons small">refresh</i></a>
                </div>
              </div>
            </div>
            <div class="col s4 m4 push-m2 l3 push-l3">
             <ul>
               <li><a class="grey-text text-lighten-3" href="index.html#presentation">Présentation</a></li>
               <li><a class="grey-text text-lighten-3" href="index.html#projects">Projets</a></li>
               <li><a href="#contact" class="modal-trigger grey-text text-lighten-3">Contactez-nous</a></li>
             </ul>
           </div>
          </div>
        </div>
        <div class="footer-copyright">
         <div class="container">
           <span>©2021 ProgGuys : Hugo MAESTRACCI & Baptiste MILLAN</span>
         </div>
        </div>
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
    </body>
  </html>
