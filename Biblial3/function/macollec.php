<?php
require_once 'config/connexion.php';

function voirmacollec(){
   $users_id=$_SESSION["auth"]->id;
   $conn= new Connexion();
   $pdo=$conn->getPdo();
   $utilisateur = $pdo->prepare("SELECT users_livres.livres_id AS livreId , livres.Nombres_de_pages AS livrespage , livres.date_publication AS livrespublication , livres.resum AS livreresum, livres.Numero_du_tome AS livrestome, livres.titre AS livrestitre, livres.img AS livresimg , auteurs.nom AS nom_auteur, editeurs.nom AS nom_editeur
   FROM users_livres 
   INNER JOIN livres ON livres.id = users_livres.livres_id
   INNER JOIN auteurs_livres ON livres.id=auteurs_livres.livres_id
   INNER JOIN auteurs ON auteurs.id=auteurs_livres.auteurs_id
   INNER JOIN editeurs_livres ON livres.id = editeurs_livres.livres_id
   INNER JOIN editeurs ON editeurs.id=editeurs_livres.editeurs_id
   WHERE users_id= :users_id");
   $utilisateur->bindParam('users_id',$users_id, PDO::PARAM_STR);
   $utilisateur->execute();
   $utilisateur = $utilisateur->fetchAll(PDO::FETCH_ASSOC);
   return $utilisateur;
   }



 /*   SELECT auteurs.nom AS auteursnom FROM auteurs INNER JOIN auteurs_livres ON auteurs.id = auteurs_livres.auteurs_id    requete qui fonctionne dans SQl il faut reussir à la mettre dans la requete pdo maintenant*/