<?php
  require_once "config.php";
  $alright = true;

  if (empty($_POST['email'])) {
    $alright = false;
  }

  if (empty($_POST['password'])) {
    $alright = false;
  }

  if (empty($_POST['first_name'])) {
    $alright = false;
  }

  if (empty($_POST['last_name'])) {
    $alright = false;
  }

  if ($alright) {
    $sql="SELECT email from user WHERE email=".$_POST['email'].";";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    if (empty($data)) {
      $sql = "INSERT INTO user(email,password,prenom,nom) VALUES(:email,SHA1(:password),:prenom,:nom)";
      $dataBinded=array(
          ':email'   => $_POST['email'],
          ':password'=> $_POST['password'],
          ':prenom'=> $_POST['first_name'],
          ':nom'=> $_POST['last_name']
      );
      $pre = $pdo->prepare($sql);
      $pre->execute($dataBinded);

      require "login.php";
    }
    else {
        echo "L'adresse mail est déjà présent dans nos fichiers!";
      }
  }

  header('Location:../index.php');
?>
