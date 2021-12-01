  <?php require_once "easter-egg.php" ?>

  <div class="container">
    <div class="row">
      <?php if(isset($_SESSION['user'])){ ?>
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
         <?php if(isset($_SESSION['user'])){ ?>
         <li><a class="grey-text text-lighten-3" href="index.php">Présentation</a></li>
         <li><a class="grey-text text-lighten-3" href="index.php#projects">Projets</a></li>
         <?php } ?>
         <li><a href="#contact" class="modal-trigger grey-text text-lighten-3">Contactez-nous</a></li>
       </ul>

        <?php } ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
   <div class="container row">
     <span class="col l8">©2021 ProgHub : ProgGuys's property</span>
     <?php if (isset($_SESSION['user'])){ ?>
      <span class="col l4 black-text">Connecté en tant que : <?php echo $_SESSION['user']['prenom']." ".$_SESSION['user']['nom'] ?></span>
    <?php } ?>

   </div>
  </div>
