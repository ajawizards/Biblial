<?php  
require_once 'config/connexion.php';

function supprimerlivre(){
  $users_id=$_POST['userconnecté']; 
  $livres_id=$_POST['livre'];
  var_dump($livres_id);
  var_dump($users_id);

   $conn= new Connexion();
   $pdo=$conn->getPdo();
   $supprimer = $pdo->prepare("DELETE FROM users_livres WHERE users_id=:users_id AND livres_id=:livres_id");
   $supprimer->bindParam('users_id',$users_id);
   $supprimer->bindParam('livres_id',$livres_id);
   $supprimer->execute();
   $supprimer = $supprimer->fetchAll(PDO::FETCH_ASSOC);
   return $supprimer;
}

supprimerlivre();
/* header('location:macollection.php'); */