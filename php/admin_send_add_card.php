<?php
require_once "config.php";

$sql = "INSERT INTO carte(id_projet,titre, l_titre, texte, notation) VALUES (:id_projet, :titre,:l_titre,:texte,:notation)";
$dataBinded=array(
    ':id_projet'=> $_GET['id'],
    ':titre'=> $_POST['titre'],
    ':l_titre'=> $_POST['l_titre'],
    ':texte'=> $_POST['texte'],
    ':notation'=> $_POST['notation']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../project.php?id=".$_GET['id']."");?>
