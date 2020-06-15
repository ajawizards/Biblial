<?php  
require_once 'config/connexion.php';

function ajouterlivre(){
  $users_id=$_POST['userconnecté'];
  $livres_id=$_POST['livre'];
  var_dump($livres_id);
  var_dump($users_id);

   $conn= new Connexion();
   $pdo=$conn->getPdo();
   $ajout = $pdo->prepare("INSERT INTO users_livres(users_id, livres_id) VALUES (:users_id,:livres_id)");;
   $ajout->bindParam('users_id',$users_id);
   $ajout->bindParam('livres_id',$livres_id);
   $ajout->execute();
   $ajout = $ajout->fetchAll(PDO::FETCH_ASSOC);
   return $ajout;
}

ajouterlivre();

