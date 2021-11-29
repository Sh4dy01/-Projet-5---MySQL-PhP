<!DOCTYPE html>
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

      <title>Projet #2 : Langage C</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="Création d'un puissance 4 textuel sous C"/>
    </head>

    <body class="grey lighten-1">
      <!-- navbar -->
      <header>
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
      </header>

      <main id="main">
        <section class="section container grey lighten-4 z-depth-4">
          <h2 class="center-align">Projet #2 : Puissance 4 textuel</h2>
          <div class="row container">
            <div class="col s10 offset-s1 m8 offset-m2 l6">
              <div class="card hoverable">
                <div class="card-image black waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/p4_1.png" alt="game connect 4 prog guys progguys">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4">Mission<i class="material-icons right">more_vert</i></h3>
                </div>
                <div class="card-reveal">
                  <h4 class="card-title grey-text text-darken-4">Créer un puissance 4 textuel<i class="material-icons right">close</i></h4>
                  <p>Pour notre deuxieme projet au <a href="https://gamingcampus.fr/" target="_blank" rel="nofollow external">Gaming Campus</a> nous devions créer un puissance 4 à l'aide du langage C et de github que nous devions se familiariser pour notre futur métier.
                  </p>
                  <p>Nous devions le réaliser dans un environnement Linux
                  avec le système d'exploitation Debian et apprendre à utiliser emacs, gcc ainsi que les commandes bash.</p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m8 offset-m2 l6">
              <div class="card hoverable">
                <div class="card-image black waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/p4_3.png" alt="game connect 4 prog guys progguys">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4">Développement<i class="material-icons right">more_vert</i></h3>
                </div>
                <div class="card-reveal">
                  <h4 class="card-title grey-text text-darken-4">Langage C<i class="material-icons right">close</i></h4>
                  <p class="center-align">Apprendre un langage de programmation en 3 semaines n'est pas chose simple.</p>
                  <p>Pour Baptiste et son binôme tout était nouveau, assimilé le C/Git/Linux pour réaliser son projet fut un long périple mais ils ont sû surmonter les épreuves et terminer leur projet à temps et avec brio.</p>
                  <p>Pour Hugo et <a href="https://www.linkedin.com/in/guilian-pipart-635a60221/" rel="nofollow external" target="_blank">Guilian PIPART</a>, vu qu'ils avaient déjà connaissance du langage C, le développement fut moins long et avec une certaine aisance, ils ont tout de même développé des fonctionnalités non demandées dans le cahier des charges pour aller encore plus loin ainsi que donné des cours de tutorats pour les autres binômes dans le besoin.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row container">
            <div class="col s10 offset-s1 m8 offset-m2 l8 offset-l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/p4_2.jpg" alt="game connect 4 prog guys progguys">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4">Conclusion<i class="material-icons right">more_vert</i></h3>
                </div>
                <div class="card-reveal">
                  <h4 class="card-title grey-text text-darken-4">L'apport<i class="material-icons right">close</i></h4>
                  <p>Beaucoup de connaissance et d'expérience en peu de temps.
                    Savoir utiliser le langage C et l'algorithmie sont des grosses bases pour la suite.</p>
                    <p><i><b>Même si le puissance 4 est purement textuel, nous sommes très fièrs de nos créations.</b></i></p>
                  <blockquote><i>La pédagogie par projet, se concentrant sur la pratique, nous donnes énormément de connaissance en peu de temps.</i></blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="container center-align">
            <a class="waves-effect waves-light btn" id="help" onclick="$('.tap-target').tapTarget('open')">En savoir plus</a>
            <div class="tap-target" data-target="menu">
              <div class="tap-target-content">
                <h4>Aide</h4>
                <span>Ici, vous pouvez accéder directement aux différents codes sources des puissances 4 !</span>
              </div>
            </div>
          </div>
        </section>

        <div class="fixed-action-btn">
          <a class="btn-floating pulse btn-large grey darken-4" id="menu">
            <i class="large material-icons">add</i>
          </a>
          <ul>
            <li><a class="btn-floating red" href="https://github.com/Sh4dy01/gtech1-b10-puissance4" rel="nofollow external" target="_blank"><i class="fab fa-github-square"></i></a></li>
            <li><a class="btn-floating red darken-1" href="https://github.com/judegoiave/gtech1--b25--puissance4" rel="nofollow external" target="_blank"><i class="fab fa-github-square"></i></a></li>
          </ul>
        </div>
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
