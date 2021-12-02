<?php
require_once "config.php";

$sql = "UPDATE carte SET titre=:titre, l_titre=:l_titre, texte=:texte, notation=:notation WHERE id='".$_GET['card']."';";
$dataBinded=array(
    ':titre'=> $_POST['titre'],
    ':l_titre'=> $_POST['l_titre'],
    ':texte'=> $_POST['texte'],
    ':notation'=> $_POST['notation']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../project.php?id=".$_GET['id']."");?>
