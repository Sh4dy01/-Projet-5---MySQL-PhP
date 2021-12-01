<!DOCTYPE html>
  <?php require_once "php/config.php"; ?>
  <html lang="fr" dir="ltr">
    <head>
      <?php require "php/header.php" ?>
    </head>

    <body class="grey lighten-3">

      <!-- Get all the user's data if he is connected -->
      <?php if(isset($_SESSION['user'])){
        require "php/get_data.php";
      } ?>

      <!-- Navbar & SideNav -->
      <header>
        <?php if(isset($_SESSION['user'])){
          require "php/menu.php";}
        ?>
      </header>

      <main id="main">
        <!--- Check if the user is connected and if he is admin!--->
        <?php if(isset($_SESSION['user'])){?>
          <!-- Admin view !-->
          <?php if ($_SESSION['user']['privileges']==1){ ?>
            <section class="container grey section">
              <h3 class="center-align">Panel admin</h3>
              <div class="admin row white">
                <div class="col s12 l12">
                  <ul class="tabs">
                    <li class="tab col s6"><a class="active" href="#admin_users">Gestion Utilisateurs</a></li>
                    <li class="tab col s6"><a href="#admin_projects">Gestion Projet</a></li>
                  </ul>
                </div>
                <div id="admin_users" class="col s12">
                  <div class="row red-text center-align">
                    <span class="col l2"> DROITS</span>
                    <span class="col l2"> NOM</span>
                    <span class="col l3"> MAIL</span>
                    <span class="col l2"> EQUIPE</span>
                    <span class="col l3"> OPTIONS</span>
                  </div>
                  <?php
                    $sql = "SELECT user.id, privileges,active, user.id_equipe, email, prenom, nom, parcours, nom_equipe FROM user INNER JOIN equipe ON equipe.id = user.id_equipe;";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
                    foreach($data as $user){ ?>
                      <div class="row valign-wrapper center-align <?php if ($user['active']==0) {echo "grey";} ?>" id="<?php echo $user['id'] ?>">
                        <?php if ($user['privileges']==1){ ?>
                          <span class="col l2">Admin</span>
                        <?php }else{?>
                          <span class="col l2">Utilisateur</span>
                        <?php } ?>
                        <span class="col l2"><?php echo $user['prenom']." | ".$user['nom'] ?></span>
                        <span class="col l3"><?php echo $user['email'] ?></span>
                        <?php if ($user['id_equipe']==0){ ?>
                          <span class="col l2">Aucune équipe</span>
                        <?php }else{?>
                          <span class="col l2"><?php echo $user['nom_equipe'] ?></span>
                        <?php } ?>
                        <div class="col l3">
                          <?php if ($user['privileges']==0 OR ($user['privileges']==1 && $user['id']==$_SESSION['user']['id'])): ?>
                            <button class="waves-effect waves-light btn-small orange modal-trigger" data-target="admin_edit_user_id=<?php echo $user['id'] ?>"><i class="tiny material-icons">construction</i></button>
                            <button class="waves-effect waves-light btn-small red modal-trigger" data-target="admin_desactivate_user_id=<?php echo $user['id'] ?>"><i class="tiny material-icons">clear</i></button>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div id="admin_desactivate_user_id=<?php echo $user['id'] ?>" class="modal">
                        <div class="modal-content center-align red-text">
                          <h4>AVERTISSEMENT</h4>
                          <span>Souhaitez-vous <?php if ($user['active']==0) {echo "activer";}else{echo "désactiver";} ?> cet utilisateur ?</span>
                          <form action="php/admin_desactivate_user.php?id=<?php echo $user['id'] ?>&active=<?php echo $user['active'] ?>" method="post">
                            <button class="waves-effect waves-light blue btn green" type="submit" name="action"><i class="material-icons">check</i></button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
                        </div>
                      </div>
                      <div id="admin_edit_user_id=<?php echo $user['id'] ?>" class="modal">
                        <div class="modal-content">
                          <h4>Edition de l'utilisateur</h4>
                          <form action="php/admin_edit_user.php?id=<?php echo $user['id'] ?>" method="post">
                            <ul>
                              <li><span>Prénom : </span><input id="prenom" type="text" name="prenom" value="<?php echo $user['prenom'] ?>"/></li>
                              <li><span>Nom : </span><input id="nom" type="text" name="nom" value="<?php echo $user['nom'] ?>"/></li>
                              <li><span>Email : </span><input id="email" type="text" name="email" value="<?php echo $user['email'] ?>"/></li>
                              <li><span>Parcours : </span><input id="parcours" type="text" name="parcours" value="<?php echo $user['parcours'] ?>"/></li>
                              <li class="row">
                                <button class="waves-effect waves-light blue btn green" type="submit" name="action"><i class="material-icons">check</i></button>
                              </li>
                            </ul>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <a class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
                        </div>
                      </div>
                    <?php }
                  ?>
                </div>
                <div id="admin_projects" class="col s12">
                  <div class="row red-text center-align">
                    <span class="col l4"> NOM</span>
                    <span class="col l4"> CREATEUR</span>
                    <span class="col l4"> OPTIONS</span>
                  </div>
                  <?php
                    $sql = "SELECT titre, projet.id, prenom, nom FROM projet INNER JOIN user ON user.id=projet.id_user;";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
                    foreach($data as $project){ ?>
                      <div class="row valign-wrapper center-align" id="<?php echo $project['id'] ?>">
                        <span class="col l4"><?php echo $project['titre'] ?></span>
                        <span class="col l4"><?php echo $project['prenom']." | ".$project['nom'] ?></span>
                        <div class="col l4">
                          <a class="waves-effect waves-light btn-small blue" href="project.php?id=<?php echo $project['id'] ?>"><i class="tiny material-icons">chevron_right</i></a>
                        </div>
                      </div>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
            </section>

          <!-- Presentation !-->
          <section class="container section grey lighten-4 z-depth-4" id="presentation">
            <div class="center-align">
              <?php if ($_SESSION['user']['id_equipe']==0){ ?>
                <h2>Solo</h2>
                <span>Vous n'avez pas rejoins d'équipe</span>
                <div class="row">
                  <div class="student card hoverable green lighten-1 center-align col s10 offset-s1 m4 offset-m1 l4 offset-l1 z-depth-5">
                    <div class="card-image waves-effect waves-block waves-green">
                      <img src="<?php echo $_SESSION['user']['p_image']?>" alt="" class="responsive-img activator">
                    </div>
                    <div class="card-content row">
                      <h3 class="card-title activator grey-text text-darken-4 col l11"><?php echo $_SESSION['user']['prenom']." ".$_SESSION['user']['nom'] ?></h3>
                        <button data-target="edit_profil" class="btn-small orange modal-trigger right col l1"><i class="material-icons">edit</i></button>
                    </div>
                    <div class="card-reveal">
                      <h4 class="card-title grey-text text-darken-4"><?php echo $_SESSION['user']['prenom']." ".$_SESSION['user']['nom'] ?><i class="material-icons right">close</i></h4><br>
                      <ul class="left-align">
                        <?php echo $_SESSION['user']['parcours'] ?>
                      </ul>
                    </div>
                    <div class="card-action row">
                      <?php foreach ($links as $link) {?>
                        <a class="col l2" href="<?php echo $link['lien'] ?>" rel="nofollow external" target="_blank"><i class="<?php echo $link['icone'] ?>"></i></a>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              <?php }
              else{ ?>
                <h2><?php echo $team['nom_equipe'] ?></h2>
                <i><?php echo $team['description']?></i>
            </div>
            <div class="row">
              <?php foreach($workers as $user){ ?>
                <div class="student card hoverable green lighten-1 center-align col s10 offset-s1 m4 offset-m1 l4 offset-l1 z-depth-5">
                  <div class="card-image waves-effect waves-block waves-green">
                    <img src="<?php echo $user['p_image']?>" alt="" class="responsive-img activator">
                  </div>
                  <div class="card-content row">
                    <h3 class="card-title activator grey-text text-darken-4 col l11"><?php echo $user['prenom']." ".$user['nom'] ?></h3>
                    <?php if ($_SESSION['user']['id']==$user['id']): ?>
                      <button data-target="edit_profil" class="btn-small orange modal-trigger right col l1"><i class="material-icons">edit</i></button>
                    <?php endif; ?>
                  </div>
                  <div class="card-reveal">
                    <h4 class="card-title grey-text text-darken-4"><?php echo $user['prenom']." ".$user['nom'] ?><i class="material-icons right">close</i></h4><br>
                    <ul class="left-align">
                      <?php echo $user['parcours'] ?>
                    </ul>
                  </div>
                  <div class="card-action row">
                    <?php foreach ($links as $link) {?>
                      <a class="col l2" href="<?php echo $link['lien'] ?>" rel="nofollow external" target="_blank"><i class="<?php echo $link['icone'] ?>"></i></a>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div><?php } ?>

            <div id="edit_profil" class="modal">
              <div class="modal-content">
                <h4>Edition du profile</h4>
                <form action="php/edit_profile.php" method="post">
                  <ul>
                    <li><span>Prénom : </span><input id="prenom" type="text" name="prenom" value="<?php echo $_SESSION['user']['prenom'] ?>"/></li>
                    <li><span>Nom : </span><input id="nom" type="text" name="nom" value="<?php echo $_SESSION['user']['nom'] ?>"/></li>
                    <li><span>Parcours : </span><input id="parcours" type="text" name="parcours" value="<?php echo $_SESSION['user']['parcours'] ?>"/></li>
                    <li><form method="post" action="upload_file.php" enctype="multipart/form-data">
                      <input type='file' name='image'>
                    </form></li>
                    <li class="row">
                      <button class="waves-effect waves-light blue btn green" type="submit" name="action"><i class="material-icons">check</i></button>
                    </li>
                  </ul>
                </form>

              </div>
              <div class="modal-footer">
                <a class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
              </div>
            </div>
          </section>

          <!-- Portfolio !-->
          <section class="container section grey lighten-4 z-depth-4" id="projects">
            <div class="center-align">
              <h2>Mon Portfolio</h2>
              <ul>
                <li><button data-target="add_project" class="btn blue modal-trigger"><i class="material-icons">add</i></button></li>
              </ul>
            </div>

            <div id="add_project" class="modal">
              <div class="modal-content">
                <h4 class="center-align">Ajout de projet</h4>
                <form  action="php/add_project.php" method="post">
                  <ul>
                    <li><span>Titre : </span><input id="titre" type="text" name="titre" value=""/></li>
                    <li><span>Description : </span><input id="desc" type="text" name="desc" value=""/></li>
                    <li><button class="waves-effect waves-light blue btn green" type="submit" name="action"><i class="material-icons">done</i></button>
                    </li>
                  </ul>
                </form>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
              </div>
            </div>
            <?php if (empty($type_project)){?>
              <div class="center-align container">
                <span>Vous n'avez pas encore publié de projet.</span>
              </div>
            <?php }else{ ?>
            <ul class="collapsible popout">
              <?php foreach ($type_project as $type){ ?>
                <li>
                  <div class="collapsible-header hoverable header-jam valign-wrapper" style="background-image: url(<?php echo $type['image'] ?>);">
                    <h3 class="container center-align white-text"><?php echo $type['nom'] ?></h3>
                  </div>
                  <div class="collapsible-body row">
                    <?php
                    $sql = "SELECT projet.id, user.prenom, projet.image, projet.image_alt, projet.titre, projet.description, user.p_image, projet.type FROM projet INNER JOIN user ON user.id =".$_SESSION['user']['id']." WHERE projet.id_user=".$_SESSION['user']['id']." AND projet.type=".$type['type'].";";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $tmp_projects = $pre->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($tmp_projects as $project) { ?>

                        <div class="col s12 m12 l6">
                          <div class="card hoverable">
                            <div class="card-image">
                              <img class="responsive-img" src="<?php echo $project['image'] ?>" alt="">
                            </div>
                            <div class="card-content">
                              <h5><?php echo $project['titre'] ?></h5>
                              <p><?php echo $project['description'] ?></p>
                            </div>
                            <div class="card-action">
                              <div class="row valign-wrapper">
                                <a class="col s4 m4 l4" href="project.php?id=<?php echo $project['id']; ?>">Y aller</a>
                                <div class="right col s8 m8 l8">
                                  <div class="right chip">
                                    <img src="<?php echo $project['p_image'] ?>" alt="">
                                    <?php echo $project['prenom'] ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    <?php } ?>
                  </div>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
          </section>

          <section class="container section grey lighten-4 z-depth-4" id="projects">
            <div class="center-align">
              <h2>Notre Portfolio</h2>
            </div>

            <?php if (empty($team_type_project)){?>
              <div class="center-align container">
                <span>Votre équipe n'a pas encore publié de projet.</span>
              </div>
            <?php }else{ ?>
            <ul class="collapsible popout">
              <?php foreach ($team_type_project as $type){ ?>
                <li>
                  <div class="collapsible-header hoverable header-jam valign-wrapper" style="background-image: url(<?php echo $type['image'] ?>);">
                    <h3 class="container center-align white-text"><?php echo $type['nom'] ?></h3>
                  </div>
                  <div class="collapsible-body row">
                    <?php
                    $sql = "SELECT projet.id, titre, description, p_image, prenom, image FROM projet INNER JOIN user ON user.id = projet.id_user WHERE projet.id_team=".$_SESSION['user']['id_equipe']." AND projet.type=".$type['type'].";";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($data as $project) { ?>

                        <div class="col s12 m12 l6">
                          <div class="card hoverable">
                            <div class="card-image">
                              <img class="responsive-img" src="<?php echo $project['image'] ?>" alt="">
                            </div>
                            <div class="card-content">
                              <h5><?php echo $project['titre'] ?></h5>
                              <p><?php echo $project['description'] ?></p>
                            </div>
                            <div class="card-action">
                              <div class="row valign-wrapper">
                                <a class="col s4 m4 l4" href="project.php?id=<?php echo $project['id']; ?>">Y aller</a>
                                <div class="right col s8 m8 l8">
                                  <div class="right chip">
                                    <img src="<?php echo $project['p_image'] ?>" alt="">
                                    <?php echo $project['prenom'] ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    <?php } ?>
                  </div>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
          </section>

        <?php }else{ ?>
          <section class="container section grey lighten-4 z-depth-4">
            <h2 class="center-align">Bienvenue sur ProgHub, visiteur !</h2>
            <div class="row">
              <div class="col s10 offset-s1 l10 offset-l1">
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
                            <button id="register_btn" class="waves-effect waves-light blue btn" type="submit" name="action">
                            <i class="material-icons right">how_to_reg</i>S'inscrire</button>
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

      <footer class="page-footer grey darken-3">
        <?php require "php/footer.php" ?>
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
    </body>
  </html>
