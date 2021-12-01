<?php
require_once "config.php";

$sql = "DELETE FROM carte WHERE id='".$_GET['card']."';";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../project.php?id=".$_GET['id']."");?>
