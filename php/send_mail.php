<?php
$to = $_POST['to'];
$from = $_POST['from'];
$objet = $_POST['objet'];
$nom = $_POST['last_name'];
$prenom = $_POST['first_name'];
$entreprise = $_POST['entreprise_name'];
$telephone = $_POST['telephone'];
$message = $_POST['textarea2'];
$content =
  "De : ".$prenom." ".$nom."\r\n
  Destinataire : ".$from."\r\n
  Téléphone : ".$telephone."\r\n
  Entreprise : ".$entreprise."\r\n
  Message : ".$message.\r\n;

if(mail($to,$objet,$content)){
    mail($to, $objet, $content);
} ?>
