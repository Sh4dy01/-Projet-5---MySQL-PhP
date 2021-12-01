<?php
require_once "config.php";

$sql = "INSERT INTO projet(`id_user`, `titre`, `description`) VALUES (:id_user,:titre,:description)";
$dataBinded=array(
    ':id_user'=> $_SESSION['user']['id'],
    ':titre'=> $_POST['titre'],
    ':description'=> $_POST['desc'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../index.php");?>
