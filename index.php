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
          <section class="container section grey">
            <?php if(isset($_SESSION['user'])){?>
              <span>Connecté en tant que : <?php echo $_SESSION['user']['prenom']." ".$_SESSION['user']['nom'] ?></span>
            <?php }else{ ?>
              <span>Vous n'êtes pas connecté</span>
            <?php } ?>

            <!-- Admin view !-->
            <?php if ($_SESSION['user']['privileges']==1){ ?>
              <h3>Pannel admin :</h3>
              <div class="row white">

                <div class="admin col s12 m6 l6">
                  <span class="red-text">UTILISATEURS :</span>
                  <?php
                    $sql = "SELECT user.id, privileges, user.id_equipe, email, prenom, nom, nom_equipe FROM user INNER JOIN equipe ON equipe.id = user.id_equipe;";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
                    foreach($data as $user){ ?>
                      <div class="single" id="<?php echo $user['id'] ?>">
                        <span><?php echo $user['prenom']." ".$user['nom'] ?> | </span>
                        <span><?php echo $user['email'] ?> | </span>
                        <?php if ($user['id_equipe']==0){ ?>
                          <span>Aucune équipe | </span>
                        <?php }else{?>
                          <span><?php echo $user['nom_equipe'] ?> | </span>
                        <?php } ?>
                        <?php if ($user['privileges']==1){ ?>
                          <span>Admin</span>
                        <?php }else{?>
                          <span>Utilisateur</span>
                        <?php } ?>
                      </div>
                    <?php }
                  ?>
                </div>

                <div class="admin col s12 m6 l6">
                  <span class="red-text">PROJETS :</span>
                  <?php
                    $sql = "SELECT titre, projet.id, prenom, nom FROM projet INNER JOIN user ON user.id=projet.id_user;";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
                    foreach($data as $project){ ?>
                      <div class="single" id="<?php echo $project['id'] ?>">
                        <span><?php echo $project['titre']?> | </span>
                        <span><?php echo $project['prenom']." ".$project['nom'] ?></span>
                      </div>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
          </section>

          <!-- Presentation !-->
          <section class="container section grey lighten-4 z-depth-4" id="presentation">

            <div class="center-align">
              <h2><?php echo $_SESSION['user']['nom_equipe'] ?></h2>
              <!-- PHP pour récupérer les users appartenant à la même équipe de l'user login !-->
              <?php
              if (empty($workers)){ ?>
                <span>Vous n'avez pas rejoins d'équipe</span>
              <?php }else{ ?>
                <i><?php echo $_SESSION['user']['description']?></i>
            </div>
            <div class="row">
              <?php foreach($workers as $user){ ?>
                <div class="student card hoverable green lighten-1 center-align col s10 offset-s1 m4 offset-m1 l4 offset-l1 z-depth-5">
                  <div class="card-image waves-effect waves-block waves-green">
                    <img src="<?php echo $user['p_image']?>" alt="<?php echo $user['p_img_alt']?>" class="responsive-img activator">
                  </div>
                  <div class="card-content">
                    <h3 class="card-title activator grey-text text-darken-4"><?php echo $user['prenom']." ".$user['nom'] ?></h3>
                  </div>
                  <div class="card-reveal">
                    <h4 class="card-title grey-text text-darken-4"><?php echo $user['prenom']." ".$user['nom'] ?><i class="material-icons right">close</i></h4><br>
                    <ul class="left-align">
                      <?php echo $user['parcours'] ?>
                    </ul>
                  </div>
                  <div class="card-action">
                    <?php foreach ($links as $link) {?>
                      <a href="<?php echo $link['lien'] ?>" rel="nofollow external" target="_blank"><i class="<?php echo $link['icone'] ?>"></i></a>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div><?php } ?>
          </section>

          <!-- Portfolio !-->
          <section class="container section grey lighten-4 z-depth-4" id="projects">

            <h2 class="center-align">Portfolio</h2>
            <?php if (empty($type_project)){?>
              <div class="center-align container">
                <span>Vous n'avez pas encore publié de projet.</span>
              </div>
            <?php } ?>
            <ul class="collapsible popout">
              <?php foreach ($type_project as $type){ ?>
                <li>
                  <div class="collapsible-header hoverable header-jam valign-wrapper" style="background-image: url(<?php echo $type['image'] ?>);">
                    <h3 class="container center-align white-text"><?php echo $type['nom'] ?></h3>
                  </div>
                  <div class="collapsible-body row">
                    <?php
                    $sql = "SELECT projet.id, user.prenom, projet.image, projet.image_alt, titre, projet.desc, img_user.p_image, img_user.p_img_alt FROM projet INNER JOIN img_user ON img_user.id_user = projet.id_user INNER JOIN user ON user.id =".$_SESSION['user']['id']." WHERE projet.id_user=".$_SESSION['user']['id']." AND type=".$type['type'].";";
                    $pre = $pdo->prepare($sql);
                    $pre->execute();
                    $tmp_projects = $pre->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($tmp_projects as $project) { ?>

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
                                <a class="col s4 m4 l4" href="project.php?id=<?php echo $project['id']; ?>">Y aller</a>
                                <div class="right col s8 m8 l8">
                                  <div class="right chip">
                                    <img src="<?php echo $project['p_image'] ?>" alt="<?php echo $project['p_img_alt'] ?>">
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
