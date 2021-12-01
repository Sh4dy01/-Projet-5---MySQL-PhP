<?php
require_once "config.php";

$sql = "UPDATE projet SET titre=:titre, description=:desc WHERE id='".$_GET['id']."';";
$dataBinded=array(
    ':titre'=> $_POST['titre'],
    ':desc'=> $_POST['desc']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../project.php?id=".$_GET['id']."");?>
