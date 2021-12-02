<?php
require_once "config.php";

$sql = "DELETE FROM type_projet WHERE id='".$_GET['id']."';";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../index.php");?>
