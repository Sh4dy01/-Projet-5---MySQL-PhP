<?php
require_once "config.php";

$sql = "UPDATE projet SET titre=:titre, description=:desc, type=:type WHERE id='".$_GET['id']."';";
$dataBinded=array(
    ':titre'=> $_POST['titre'],
    ':desc'=> $_POST['desc'],
    ':type'=> $_POST['type']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../project.php?id=".$_GET['id']."");?>
