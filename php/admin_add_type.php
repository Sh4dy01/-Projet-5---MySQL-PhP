<?php
require_once "config.php";

$sql = "INSERT INTO type_projet(`nom`) VALUES (:nom);";
$dataBinded=array(
  ':nom'=> $_POST['nom'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../index.php");?>
