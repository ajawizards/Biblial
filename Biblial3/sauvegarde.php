<?php

/**Test a suppr pour mise en prod*/
$request = $_POST["titre"]; // donnée contenu dans le titre pour le livre 
$request2 = $_POST["auteur"];
$request3 = $_POST["resume"];
$request4 = $_POST["editeur"];
$request5 = $_POST["pages"];
$request6 = $_POST["publication"];
/* $request7 = $_POST["isbn"];
$request8 = $_POST["isbn2"]; */


echo  "coucou".$request,"<br>", $request2,"<br>", $request3,"<br>", $request4,"<br>", $request5, "<br>", $request6;

/**Fin des donnés a supp */
require_once 'config/connexion.php';

try {
    $conn= new Connexion();
    $pdo=$conn->getPdo();
    $req=$pdo->prepare("INSERT INTO livres (id,titre,Nombres_de_pages,date_publication,resum) VALUES (NULL,:titre ,:Nombres_de_pages,:datepubli,:resum)"); // tentative insert dans ma bdd 
    $titre= $_POST['titre'];
    $nbrpages= $_POST['pages'];
    $publica= $_POST['publication'];
    $resume = $_POST["resume"];
    
    $req->bindParam(':titre', $titre);
    $req->bindParam(':Nombres_de_pages', $nbrpages);
    $req->bindParam(':datepubli', $publica);
    $req->bindParam(':resum', $resume);
    $req->execute();
    echo "bien inséré dans la bdd";
 

    /* faire cette requete en 1*/ $req2=$pdo->prepare(" INSERT INTO auteurs (nom) SELECT :nom WHERE NOT EXISTS (SELECT * FROM auteurs WHERE nom=:nom)"); // tentative insert dans une seconde table en meme temps
    $aut= $_POST['auteur'];
    $req2->bindParam(':nom', $aut);
    $req2->execute();
    echo "bien inséré dans la bdd";
    /* $lastId = $req2->lastInsertId()*/ 

}

catch (PDOException $e){
    die ("erreur de creation : ". $e);
}



/*  sans le bind param les données ne veulent pas s'inserer dans ma bdd
try {
    $connexion =new PDO("mysql:host=$servername;dbname=biblial", $username,$password); // ici je creer une connexion à ma database ! 
    echo"je suis connecté à la bdd";
    $req=$connexion->prepare("INSERT INTO livres (id,titre) VALUES (NULL,:".$_POST['titre'].")"); // tentative insert dans ma bdd 
    var_dump($_POST['titre']); // nouvelle verif pour voir si la value à bien le titre
    $req->execute();
    echo " titre du livre bien inséré dans la bdd";
}

catch (PDOException $e){
    die ("erreur de creation : ". $e);
}
 */


 