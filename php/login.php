<?php
  require_once "config.php";

  $sql = "SELECT id, privileges, active, email, prenom, nom, parcours, p_image, id_equipe FROM user WHERE email='".$_POST['email']."' AND password=SHA1('".$_POST['password']."')";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $user = current($pre->fetchAll(PDO::FETCH_ASSOC));

  if(empty($user)){
    echo "Utilisateur ou mot de passe incorrect !";
  }else{
    if ($user['active']==0) {
      echo "Votre compte a été désactivé.";
    }
    else {
      $_SESSION['user'] = $user;
    }
  }
  header('Location:../index.php');
?>
