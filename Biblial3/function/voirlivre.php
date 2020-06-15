<?php
require_once 'config/connexion.php';

function voirauteur(){
   $conn= new Connexion();
   $pdo=$conn->getPdo();
   $author = $pdo->prepare("SELECT nom FROM auteurs");
   $author->execute();
   $author = $author->fetchAll(PDO::FETCH_ASSOC);
   return $author;
   }
   function voirimage(){
   $conn= new Connexion();
   $pdo=$conn->getPdo();
   $author = $pdo->prepare("SELECT img FROM livres");
   $author->execute();
   $author = $author->fetchAll(PDO::FETCH_ASSOC);
   return $author;
   }
   function voirtitre(){
      $conn= new Connexion();
      $pdo=$conn->getPdo();
      $author = $pdo->prepare("SELECT titre FROM livres");
      $author->execute();
      $author = $author->fetchAll(PDO::FETCH_ASSOC);
      return $author;
      }

/* premiere version pas bonne peut servir d'expliquation avec celle en dessous valable.
      function infocarte(){
         $conn= new Connexion();
         $pdo=$conn->getPdo();
         $author = $pdo->prepare("SELECT nom,titre,img FROM auteurs INNER JOIN livres ON auteurs.id = livres.id");
         $author->execute();
         $author = $author->fetchAll(PDO::FETCH_ASSOC);
         return $author;
      }
 */

function infocarte(){
   $conn= new Connexion();
   $pdo=$conn->getPdo();
   $author = $pdo->prepare("SELECT auteurs.nom AS auteursnom , livres.id AS livresid , livres.Numero_du_tome AS livrestome, livres.Nombres_de_pages AS livrespage , livres.date_publication AS livrespublication , livres.resum AS livreresum , livres.titre AS livrestitre, livres.img AS livresimg  FROM auteurs_livres INNER JOIN livres ON livres.id = auteurs_livres.livres_id INNER JOIN auteurs ON auteurs.id = auteurs_livres.auteurs_id");
   $author->execute();
   $author = $author->fetchAll(PDO::FETCH_ASSOC);
   return $author;
}

/* SELECT editeurs.nom AS editeursnom, livres.id AS livresid , livres.Numero_du_tome AS livrestome, livres.Nombres_de_pages AS livrespage , livres.date_publication AS livrespublication , livres.resum AS livreresum , livres.titre AS livrestitre, livres.img AS livresimg  FROM editeurs_livres INNER JOIN livres ON livres.id = editeurs_livres.livres_id INNER JOIN editeurs ON editeurs.id = editeurs_livres.editeurs_id */