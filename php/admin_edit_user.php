<?php
require_once "config.php";

$sql = "UPDATE user SET email=:email, prenom=:prenom, nom=:nom, parcours=:parcours WHERE id='".$_GET['id']."';";
$dataBinded=array(
  ':email'=> $_POST['email'],
  ':prenom'=> $_POST['prenom'],
  ':nom'=> $_POST['nom'],
  ':parcours'=> $_POST['parcours']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../index.php");?>
