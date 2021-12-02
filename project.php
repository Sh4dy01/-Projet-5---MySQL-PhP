<!DOCTYPE html>
<?php require_once "php/config.php"; ?>
  <html lang="fr" dir="ltr">
    <head>
      <?php require "php/header.php" ?>
    </head>

    <body class="grey lighten-1">
      <!-- navbar -->
      <header>
        <?php
          require "php/menu.php";

          $sql = "SELECT * FROM projet WHERE projet.id='".$_GET['id']."';";
          $pre = $pdo->prepare($sql);
          $pre->execute();
          $project = current($pre->fetchAll(PDO::FETCH_ASSOC));

          $sql = "SELECT * FROM carte WHERE id_projet='".$_GET['id']."';";
          $pre = $pdo->prepare($sql);
          $pre->execute();
          $allCards = $pre->fetchAll(PDO::FETCH_ASSOC);

          $sql = "SELECT * FROM projet_liens WHERE id_projet='".$_GET['id']."';";
          $pre = $pdo->prepare($sql);
          $pre->execute();
          $allLinks = $pre->fetchAll(PDO::FETCH_ASSOC); ?>

      </header>

      <main id="main">
        <section class="section container grey lighten-4 z-depth-4">
          <h2 class="center-align"><?php echo $project['titre'] ?></h2>

          <h3 class="center-align">Le projet</h3>
          <div class="row">
            <?php foreach ($allCards as $card){ ?>
              <div class="col s12 l4">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator responsive-img" src="<?php echo $card['image'] ?>">
                  </div>
                  <div class="card-content row valign-wrapper">
                    <div class="col l9">
                      <h3 class="card-title activator grey-text text-darken-4"><?php echo $card['titre'] ?></h3>
                    </div>
                    <div class="col l3 right-align">
                      <?php if ($_SESSION['user']['privileges']==1 || $_SESSION['user']['id']==$project['id_user']): ?>
                        <button class="waves-effect waves-light blue btn orange modal-trigger" data-target="edit_card_id=<?php echo $card['id'] ?>"><i class="material-icons">construction</i></button>
                        <button class="waves-effect waves-light btn red modal-trigger" data-target="delete_card_id=<?php echo $card['id'] ?>"><i class="material-icons">clear</i></button>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="card-reveal">
                    <h4 class="card-title grey-text text-darken-4"><?php echo $card['l_titre'] ?><i class="material-icons right">close</i></h4>
                    <p><?php echo $card['texte'] ?></p>
                    <br>
                    <blockquote>
                      <?php echo $card['notation'] ?>
                    </blockquote>
                  </div>
                </div>
              </div>
              <?php if ($_SESSION['user']['privileges']==1 || $_SESSION['user']['id']==$project['id_user']): ?>
                <div id="edit_card_id=<?php echo $card['id'] ?>" class="modal">
                  <?php
                  $sql = "SELECT * FROM carte WHERE id='".$card['id']."';";
                  $pre = $pdo->prepare($sql);
                  $pre->execute();
                  $dataCard = current($pre->fetchAll(PDO::FETCH_ASSOC));?>

                  <div class="modal-content">
                    <h4>Edition de la carte</h4>
                    <ul>
                      <form action="php/edit_card.php?id=<?php echo $dataCard['id_projet'] ?>&card=<?php echo $card['id'] ?>" method="post">
                        <li><span>Titre : </span><input id="titre" type="text" name="titre" value="<?php echo $dataCard['titre'] ?>"/></li>
                        <li><span>Sous-titre : </span><input id="l_titre" type="text" name="l_titre" value="<?php echo $dataCard['l_titre'] ?>"/></li>
                        <li><span>Texte : </span><input id="texte" type="text" name="texte" value="<?php echo $dataCard['texte'] ?>"/></li>
                        <li><span>Notation : </span><input id="notation" type="text" name="notation" value="<?php echo $dataCard['notation'] ?>"/></li>
                        <li></li>
                        <li class="row">
                          <button class="waves-effect waves-light blue btn green" type="submit" name="action">VALIDER</button>
                        </li>
                      </form>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <a class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
                  </div>
                </div>
                <div id="delete_card_id=<?php echo $card['id'] ?>" class="modal">
                  <div class="modal-content center-align">
                    <h4>AVERTISSEMENT</h4>
                    <p>Cette action est irréversible.</p>
                    <form action="php/delete_card.php?id=<?php echo $dataCard['id_projet'] ?>&card=<?php echo $card['id'] ?>" method="post">
                      <button class="waves-effect waves-light btn red" type="submit" name="action">CONFIRMER LA SUPPRESSION</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
                  </div>
                </div>
              <?php endif; ?>

            <?php } ?>
          </div>
          <?php if ($project['carous']==1){
            $sql = "SELECT * FROM img_carrousel WHERE id_projet='".$_GET['id']."';";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $allImgs = $pre->fetchAll(PDO::FETCH_ASSOC); ?>

            <div class="carousel carousel-slider center">
              <?php foreach ($allImgs as $img){ ?>
                <div class="carousel-item red white-text">
                  <img class="responsive-img" src="<?php echo $img['image'] ?>" alt="<?php echo $img['img_alt'] ?>">
                </div>
              <?php } ?>
            </div>
          <?php } ?>

          <div class="container center-align">
            <a class="waves-effect waves-light btn" id="help" onclick="$('.tap-target').tapTarget('open')">En savoir plus</a>
            <div class="tap-target" data-target="menu">
              <div class="tap-target-content">
                <h4>Aide</h4>
                <span>Ici vous pouvez accéder aux différents médias du projet.</span>
              </div>
            </div>
          </div>

        </section>

        <?php if ($_SESSION['user']['privileges']==1 || $_SESSION['user']['id']==$project['id_user']): ?>
          <section class="gestion container">
            <div class="container center-align">
              <h3>Gestion du projet</h3>
              <ul class="inline ">
                <li><button data-target="add_card" class="btn blue modal-trigger"><i class="material-icons">add</i>CARTE</button></li>
                <li><button data-target="edit_project" class="btn orange modal-trigger"><i class="material-icons">construction</i></button></li>
                <li><button data-target="delete_project" class="btn red modal-trigger"><i class="material-icons">delete</i></button></li>
              </ul>
            </div>
          </section>
        <?php endif; ?>

        <div class="fixed-action-btn">
          <a class="btn-floating pulse btn-large orange" id="menu">
            <i class="large material-icons">add</i>
          </a>
          <ul>
            <?php foreach ($allLinks as $link){ ?>
              <li><a class="btn-floating blue" href="<?php echo $link['lien'] ?>" target="_blank"><i class="material-icons"><?php echo $link['icone'] ?></i></a></li>
            <?php } ?>
          </ul>
        </div>
      </main>

      <div id="edit_project" class="modal">
        <?php
        $sql = "SELECT * FROM projet INNER JOIN type_projet ON type_projet.id = projet.type WHERE projet.id='".$_GET['id']."';";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $dataProject = current($pre->fetchAll(PDO::FETCH_ASSOC));

        $sql = "SELECT * FROM type_projet ORDER BY id";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $types = $pre->fetchAll(PDO::FETCH_ASSOC);?>

        <div class="modal-content">
          <h4>Edition du projet</h4>
          <form  action="php/edit_project.php?id=<?php echo $_GET['id'] ?>" method="post">
            <ul>
              <li><span>Titre : </span><input id="titre" type="text" name="titre" value="<?php echo $dataProject['titre'] ?>"/></li>
              <li><span>Description : </span><input id="desc" type="text" name="desc" value="<?php echo $dataProject['description'] ?>"/></li>
              <li>
                <div class="left">
                  <label>Catégorie :</label>
                  <select class="browser-default" id="type" name="type" >
                    <option value="<?php echo $dataProject['type'] ?>" selected><?php echo $dataProject['nom'] ?></option>
                    <?php foreach ($types as $type): ?>
                      <?php if ($type['id']!=$dataProject['type']): ?>
                        <option value="<?php echo $type['id'] ?>"><?php echo $type['nom'] ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="right">
                  <button class="waves-effect waves-light blue btn green right" type="submit" name="action"><i class="material-icons">done</i></button>
                </div>
              </li>
            </ul>
          </form>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
        </div>
      </div>
      <div id="add_card" class="modal">
        <div class="modal-content">
          <h4>Ajout de carte</h4>
          <ul>
            <form action="php/add_card.php?id=<?php echo $dataProject['id'] ?>" method="post">
              <li><span>Titre : </span><input id="titre" type="text" name="titre"/></li>
              <li><span>Sous-titre : </span><input id="l_titre" type="text" name="l_titre"/></li>
              <li><span>Texte : </span><input id="texte" type="text" name="texte"/></li>
              <li><span>Notation : </span><input id="notation" type="text" name="notation"/></li>
              <li></li>
              <li class="row">
                <button class="waves-effect waves-light blue btn green" type="submit" name="action"><i class="material-icons">done</i> </button>
              </li>
            </form>
          </ul>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
        </div>
      </div>
      <div id="delete_project" class="modal">
        <div class="modal-content center-align">
          <h4>AVERTISSEMENT</h4>
          <span>Êtes-vous sûr de supprimer ce projet ?</span>
          <span>Cette action est irréversible.</span>
          <ul>
            <form action="php/delete_project.php?id=<?php echo $project['id'] ?>" method="post">
              <li class="row">
                <button class="waves-effect waves-light btn red" type="submit" name="action"><i class="material-icons">clear</i></button>
              </li>
            </form>
          </ul>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">ANNULER</a>
        </div>
      </div>
      <!-- Easter Egg -->
      <?php require "php/easter-egg.php" ?>

      <footer class="page-footer grey darken-3">
        <?php require "php/footer.php" ?>
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/jquery.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
    </body>
  </html>
