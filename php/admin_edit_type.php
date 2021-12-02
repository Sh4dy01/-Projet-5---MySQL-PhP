<?php
require_once "config.php";

$sql = "UPDATE type_projet SET nom=:nom, image=:image WHERE id='".$_GET['id']."';";
$dataBinded=array(
  ':nom'=> $_POST['nom'],
  ':image'=> $_POST['image']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../index.php");?>
