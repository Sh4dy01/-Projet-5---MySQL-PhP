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
              <div class="col s12 l6">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator responsive-img" src="<?php echo $card['image'] ?>">
                  </div>
                  <div class="card-content">
                    <h3 class="card-title activator grey-text text-darken-4"><?php echo $card['titre'] ?><i class="material-icons right">more_vert</i></h3>
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
