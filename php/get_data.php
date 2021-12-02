<?php
$sql = "SELECT user.id, p_image,prenom,nom,parcours,description FROM user INNER JOIN equipe ON equipe.id = user.id_equipe WHERE equipe.id='".$_SESSION['user']['id_equipe']."';";
$pre = $pdo->prepare($sql);
$pre->execute();
$workers = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT nom_equipe, description FROM equipe INNER JOIN user ON user.id_equipe = equipe.id WHERE user.id='".$_SESSION['user']['id']."';";
$pre = $pdo->prepare($sql);
$pre->execute();
$team = current($pre->fetchAll(PDO::FETCH_ASSOC));

$sql = "SELECT * FROM user_liens WHERE id_user='".$_SESSION['user']['id']."';";
$pre = $pdo->prepare($sql);
$pre->execute();
$links = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT type, type_projet.nom, type_projet.image FROM projet INNER JOIN type_projet ON type_projet.id = projet.type WHERE id_user=".$_SESSION['user']['id']." GROUP BY type;";
$pre = $pdo->prepare($sql);
$pre->execute();
$type_project = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM projet INNER JOIN type_projet ON type_projet.id = projet.type WHERE id_team=".$_SESSION['user']['id_equipe']." GROUP BY type;";
$pre = $pdo->prepare($sql);
$pre->execute();
$team_type_project = $pre->fetchAll(PDO::FETCH_ASSOC);


 ?>
