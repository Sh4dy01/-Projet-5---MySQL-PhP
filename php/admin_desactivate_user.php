<?php
require_once "config.php";

if ($_GET['active']==0) {
  $val = 1;
}else {
  $val = 0;
}

$sql = "UPDATE user SET active=:value WHERE id='".$_GET['id']."';";
$dataBinded=array(
    ':value'=> $val
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header("Location:../index.php");?>
