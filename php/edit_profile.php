<?php
require_once "config.php";

$sql = "UPDATE user SET prenom=:prenom, nom=:nom, parcours=:parcours WHERE id='".$_SESSION['user']['id']."';";
$dataBinded=array(
  ':prenom'=> $_POST['prenom'],
  ':nom'=> $_POST['nom'],
  ':parcours'=> $_POST['parcours']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql = "SELECT id, privileges, active, email, prenom, nom, parcours, p_image, id_equipe FROM user WHERE id='".$_SESSION['user']['id']."'";
$pre = $pdo->prepare($sql);
$pre->execute();
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));
$_SESSION['user'] = $user;

header("Location:../index.php");?>
