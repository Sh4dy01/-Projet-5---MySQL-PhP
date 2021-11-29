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

      <title>Game Jam #1 : Scientific Game Jam #3</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="Première Game Jam d'un des ProgGuys"/>
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
          <h2 class="center-align">Scientific Game Jam : 3ème édition</h2>
          <div class="row container">
            <div class="col s10 offset-s1 m6 l6">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/th.jpg" alt="T'as déjà regardé ta vulve dans un miroir ProgGuys game">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4">Introduction<i class="material-icons right">more_vert</i></h3>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Le challenge<i class="material-icons right">close</i></span>
                  <p>Créer son premier jeu en 48H n'est pas chose facile, heureusement j'ai eu la chance de faire partie d'une équipe formidable où la <b>communication</b> et <b>la bonne ambiance</b> furent au rendez-vous.</p>
                  <ul>
                    <li><span>Jour 1 : Brainstorming avec l'équipe et répartition des tâches</span></li>
                    <li><span>Jour 2 : Programmation avec mon coéquipier</span></li>
                    <li><span>Jour 3 : Rush final</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m6 l6">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/game_1.jpg" alt="T'as déjà regardé ta vulve dans un miroir ProgGuys game">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4">Le jeu<i class="material-icons right">more_vert</i></h3>
                </div>
                <div class="card-reveal">
                  <h4 class="card-title grey-text text-darken-4">T'as déjà regardé ta vulve dans un miroir ?<i class="material-icons right">close</i></h4>
                  <p>Un couple joue tranquillement à un RPG érotique,  et le jeu suscite des discussions autour de leur relation et de la sexualité. On comprend qu'ielles avaient prévu de se filmer en train de faire l'amour mais... ielles ont été trop stressé.e.s et ont choisi de se détendre en allumant la console.</p>
                  <blockquote><i>Notre chercheuse avait une thèse sur la sexualité dans les jeu-vidéos durant les années 80 et pour cela nous avons incorporer un j-rpg pixélisé dans notre jeu.</i></blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="row container">
            <div class="col s10 offset-s1 m6 l6">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/game_2.jpg" alt="T'as déjà regardé ta vulve dans un miroir ProgGuys game code">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4">Le développement<i class="material-icons right">more_vert</i></h3>
                </div>
                <div class="card-reveal">
                  <h4 class="card-title grey-text text-darken-4">Unity & C#<i class="material-icons right">close</i></h4>
                  <p>Ayant de bonnes connaissances en C# et un bon professeur je n'étais pas perdu dans la masse de travail à faire.<br>
                  La communication avec GIT fut simple et efficace grâce à mon précédent projet scolaire qui m'a apporté de grandes bases.
                  </p>
                  <span>Mes tâches étaient de :</span>
                  <ul>
                    <li>- Créer des objets scriptés 'tours' pour faire avancer le jeu, un moyen rapide et efficace pour faire un jeu en 48H</li>
                    <li>- Importer tous les assets dans Unity et les relier dans les scriptes</li>
                    <li>- Réaliser les différentes scènes du jeu (titre/principale/crédit)</li>
                    <li>- Faire les animations sous Unity</li>
                    <li>- Fixer les petits bugs</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 m6 l6">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/game_1.jpg" alt="T'as déjà regardé ta vulve dans un miroir ProgGuys game">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4">Conclusion<i class="material-icons right">more_vert</i></h3>
                </div>
                <div class="card-reveal">
                  <h4 class="card-title grey-text text-darken-4">L'apport<i class="material-icons right">close</i></h4>
                  <p>Avant la Game Jam j'étais très inquiet sur ce que je pourrais apporter à l'équipe pour le développement de jeu, mais grâce à mon coéquipier qui a su me mettre en confiance et des sessions intenses de programmations, j'ai pû faire de cette première fois une réussite.</p>
                  <blockquote><i>Notre jeu a obtenu le prix spécial de la "zézette éthique" de la part du jury.</i></blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="container center-align">
            <a class="waves-effect waves-light btn" id="help" onclick="$('.tap-target').tapTarget('open')">En savoir plus</a>
            <div class="tap-target" data-target="menu">
              <div class="tap-target-content">
                <h5>Aide</h5>
                <span>Ici vous pouvez accéder au trailer du jeu ainsi que de le tester !</span>
              </div>
            </div>
          </div>
        </section>

        <div class="fixed-action-btn">
          <a class="btn-floating pulse btn-large purple" id="menu">
            <i class="large material-icons">add</i>
          </a>
          <ul>
            <li><a class="btn-floating green" href="https://www.youtube.com/watch?v=WHX76n6wkME" target="_blank" rel="nofollow"><i class="material-icons">play_arrow</i></a></li>
            <li><a class="btn-floating blue" href="https://matote.itch.io/ta-vulve-dans-un-miroir" target="_blank"><i class="material-icons">videogame_asset</i></a></li>
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
