<!DOCTYPE html>
  <?php require_once "php/config.php"; ?>
  <html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8"/>
      <link rel="preconnect" href="https://fonts.googleapis.com"/>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Oswald&display=swap" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <script src="https://kit.fontawesome.com/b8e750155b.js" crossorigin="anonymous"></script>

      <title>ProgHub : Le hub des Portfolio</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="Site des ProgGuys"/>
    </head>

    <body class="grey lighten-3">

      <!-- Navbar & SideNav -->
      <header>
        <?php
          require "php/menu.php";
        ?>
      </header>

      <main id="main">

        <?php if(isset($_SESSION['user'])){ ?>
          <!-- Admin !-->
          <section class="container section grey">
            <?php if(isset($_SESSION['user'])){?>
              <span>Connecté en tant que : <?php echo $_SESSION['user']['prenom'] ?></span>
          <?php }else{ ?>
              <span>Vous n'êtes pas connecté</span>
            <?php } ?>

            <h3>Liste des utilisateurs :</h3>
            <?php
            $sql = "SELECT * FROM user INNER JOIN equipe ON equipe.id = user.id_equipe;";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $user){ ?>
            <div class="bloc_user">
              <h4><?php echo $user['prenom']." ".$user['nom'] ?></h4>
              <span class="email"><?php echo $user['email'] ?></span>
              <span class="equipe"><?php echo $user['nom_equipe']?></span>
            </div>
            <?php } ?>

          </section>

          <!-- Presentation !-->
          <section class="container section grey lighten-4 z-depth-4" id="presentation">
            <!-- PHP pour récupérer les users appartenant à la même équipe de l'user login !-->
            <?php
            $sql = "SELECT * FROM user INNER JOIN equipe ON equipe.id = user.id_equipe INNER JOIN img_user ON img_user.id_user = user.id WHERE equipe.id='".$_SESSION['user']['id']."';";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);?>

            <?php if (is_null($data)){ ?>
              <div class="center-align">
                <h2>Vous n'avez pas rejoins d'équipe</h2>
              </div>
            <?php }else{ ?>
            <div class="center-align">
              <h2>Votre équipe</h2>
              <i><?php echo $user['description']?></i>
            </div>
            <div class="row">
            <?php foreach($data as $user){ ?>
              <div class="student card hoverable green lighten-1 center-align col s10 offset-s1 m4 offset-m1 l4 offset-l1 z-depth-5">
                <div class="card-image waves-effect waves-block waves-green">
                  <img src="<?php echo $user['image']?>" alt="<?php echo $user['img_alt']?>" class="responsive-img activator">
                </div>
                <div class="card-content">
                  <h3 class="card-title activator grey-text text-darken-4"><?php echo $user['prenom'].$user['nom'] ?></h3>
                </div>
                <div class="card-reveal">
                  <h4 class="card-title grey-text text-darken-4"><?php echo $user['prenom'].$user['nom'] ?><i class="material-icons right">close</i></h4><br>
                  <ul class="left-align">
                    <?php echo $user['parcours'] ?>
                  </ul>
                </div>
                <div class="card-action">
                  <a href="https://www.linkedin.com/in/hugo-maestracci-22b019222/" rel="nofollow external" target="_blank"><i class="fab fa-linkedin"></i></a>
                  <a href="https://github.com/Sh4dy01" rel="nofollow external" target="_blank"><i class="fab fa-github-square"></i></a>
                  <a href="https://www.instagram.com/hugo.m.83/" rel="nofollow external" target="_blank"><i class="fab fa-instagram-square"></i></a>
                </div>
              </div>
            </div>
          <?php }} ?>
          </section>

          <!-- Projects !-->
          <section class="container section grey lighten-4 z-depth-4" id="projects">
            <!-- PHP pour récupérer les projets appartenant à l'user login !-->
            <h2 class="center-align">Portfolio</h2>
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header hoverable header-jam valign-wrapper" style="background-image: url(../img/game_img.jpg);">
                  <h3 class="container center-align white-text">GAME JAM</h3>
                </div>
                <div class="collapsible-body row">

                  <?php
                    $sql = "SELECT * FROM projet WHERE id_user='".$_SESSION['user']['id']."' AND type='1';";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($data as $project) { ?>

                    <div class="col s12 m12 l6">
                      <div class="card hoverable">
                        <div class="card-image">
                          <img class="responsive-img" src="<?php echo $project['image'] ?>" alt="<?php echo $project['image_alt'] ?>">
                        </div>
                        <div class="card-content">
                          <h5><?php echo $project['titre'] ?></h5>
                          <p><?php echo $project['desc'] ?></p>
                        </div>
                        <div class="card-action">
                          <div class="row valign-wrapper">
                            <a class="col s4 m4 l4" href="game-jam.php">Y aller</a>
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
                  <?php } ?>
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

        <?php }else{ ?>
          <section class="container section grey lighten-4 z-depth-4">
            <h2 class="center-align">Bienvenue sur ProgHub, visiteur !</h2>
            <div class="row">
              <div class="col l10 offset-l1">
                <div class="black-text">
                  <ul class="collapsible">
                    <li>
                      <div class="collapsible-header"><i class="material-icons">login</i>Déjà membre de ProgHub ?</div>
                      <div class="collapsible-body">
                        <form method="post" action="php/login.php">
                          <div class="row">
                            <div class="input-field col s6 l6">
                              <i class="material-icons prefix">email</i>
                              <input id="email" type='email' name='email'/>
                              <label for="email">Votre mail</label>
                            </div>
                            <div class="input-field col s6 l6">
                              <i class="material-icons prefix">password</i>
                              <input type='password' name='password'/>
                              <label for="password">Votre mot de passe</label>
                            </div>
                            <div class="center-align">
                              <button class="waves-effect waves-light blue btn" type="submit" name="action">
                              <i class="material-icons right">login</i>Se connecter</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">how_to_reg</i>Première visite ?</div>
                      <div class="collapsible-body">
                        <form method="post" action="php/register.php">
                          <div class="black-text">
                            <h4 class="center-align">Inscription</h4>
                            <div class="row center-align">
                              <div class="input-field col s6 m6 l6">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type='email' name='email' />
                                <label for="email">Votre mail</label>
                              </div>
                              <div class="input-field col s6 m6 l6">
                                <i class="material-icons prefix">password</i>
                                <input type='password' name='password' />
                                <label for="password">Votre mot de passe</label>
                              </div>
                            </div>
                            <div class="row center-align">
                              <div class="input-field col s6 m6 l6">
                                <i class="material-icons prefix">person</i>
                                <input id="last_name" type='text' name='last_name' />
                                <label for="last_name">Nom</label>
                              </div>
                              <div class="input-field col s6 m6 l6">
                                <input id='first_name' type="text" name='first_name' />
                                <label for="first_name">Prénom</label>
                              </div>
                            </div>
                          </div>
                          <div class="center-align">
                            <button class="waves-effect waves-light blue btn" type="submit" name="action">
                            <i class="material-icons right">send</i>S'inscrire</button>
                          </div>
                        </form>
                      </div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">help_outline</i>Qu'est-ce que c'est ?</div>
                      <div class="collapsible-body">
                        <p>L'objectif de ce site serait de créer un "Hub" sur
                          lequel tout le monde pourrait ajouter ses projets et
                          par extension il y aurait aussi des questions/réponses.
                          Afin d'aider tous ceux en quêtes de réponses, nous
                          avons crée ProgHub.
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        <?php } ?>
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
