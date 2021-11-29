<?php
  require_once "config.php";

  $sql = "INSERT INTO user(email,password,prenom,nom) VALUES(:email,SHA1(:password),:prenom,:nom)";
  $dataBinded=array(
      ':email'   => $_POST['email'],
      ':password'=> $_POST['password'],
      ':prenom'=> $_POST['first_name'],
      ':nom'=> $_POST['last_name']
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);

  header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>
