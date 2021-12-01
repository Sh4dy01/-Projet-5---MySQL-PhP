<?php
  require_once "config.php";

  $sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password=SHA1('".$_POST['password']."')";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $user = current($pre->fetchAll(PDO::FETCH_ASSOC));

  if(empty($user)){
    echo "Utilisateur ou mot de passe incorrect !";
  }else{
    $_SESSION['user'] = $user;
  }
  header('Location:../index.php');
?>
