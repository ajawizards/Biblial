<?php 

$request = $_POST["titre"]; // donnée contenu dans le titre pour le livre 
$request2 = $_POST["auteur"];
$request3 = $_POST["resum"];
$request4 = $_POST["editeur"];
$request5 = $_POST["Numero_du_tome"];
$request6 = $_POST["Nombres_de_pages"];
$request7 = $_POST["date_publication"];
$request8 = $_POST["img"];
$request9 = $_POST["isbn"];

echo "coucou " .$request,"<br>", $request2,"<br>", $request3,"<br>", $request4,"<br>", $request5, "<br>", $request6, "<br>", $request7,"<br>", $request8, "<br>", $request9;



$servername = "localhost";
$username = "alexbiblial";
$password = "projet2019aformac";
$dbname = "biblial";

try {
    $connexion =new PDO("mysql:host=$servername;dbname=biblial", $username,$password); // ici je creer une connexion à ma database ! 
    echo"je suis connecté à la bdd";

    $reqst=$connexion->prepare("INSERT INTO auteurs  (nom) SELECT :nom WHERE NOT EXISTS (SELECT * FROM auteurs WHERE nom=:nom)");
    $nomauteur= $_POST["auteur"];
    $reqst->bindParam(':nom', $nomauteur);
    $reqst->execute();

    $reqst1=$connexion->prepare("INSERT INTO editeurs (nom) SELECT :nom WHERE NOT EXISTS (SELECT * FROM editeurs WHERE nom=:nom)");
    $nomediteur= $_POST["editeur"];
    $reqst1->bindParam(':nom', $nomediteur);
    $reqst1->execute();

    
    $req=$connexion->prepare("
    INSERT INTO livres (id,titre,Numero_du_tome,Nombres_de_pages,date_publication,resum,img) 
    VALUES (NULL,:titre, :Numero_du_tome,:Nombres_de_pages,:datepubli,:resum,:img)");
     // tentative insert dans ma bdd 
    /* var_dump($_POST['titre']); // nouvelle verif pour voir si la value à bien le titre */
    $titre= $_POST['titre'];
    $page= $_POST['Nombres_de_pages'];
    $publica= $_POST['date_publication'];
    $resume = $_POST["resum"];
    $tome = $_POST["Numero_du_tome"];
    $img = $_POST["img"];
    
    $req->bindParam(':titre', $titre);
    $req->bindParam(':Nombres_de_pages', $page);
    $req->bindParam(':datepubli', $publica);
    $req->bindParam(':resum', $resume);
    $req->bindParam(':Numero_du_tome',$tome);
    $req->bindParam(':img', $img);
    
    $req->execute();
    $livresid= $connexion->lastInsertID();
    echo "bien inséré dans la bdd";

    $req2=$connexion->prepare("INSERT INTO auteurs_livres (auteurs_id,livres_id) SELECT auteurs.id, livres.id  FROM auteurs, livres WHERE auteurs.nom = :auteurnom AND livres.id = :livresid");
    $livresId= $connexion->lastInsertID();
    $req2->bindParam(':auteurnom',$auteurnom);
    $req2->bindParam(':livresid',$livresId);
    $livresid=$livresId;
    $auteurnom =$_POST["auteur"];
    $req2->execute();
   /*  var_dump($livresid); */

    $req3=$connexion->prepare("INSERT INTO editeurs_livres (editeurs_id,livres_id) SELECT editeurs.id, livres.id  FROM editeurs, livres WHERE editeurs.nom = :editeurnom AND livres.id = :livresid");
    /* $livresId= $connexion->lastInsertID(); */
    $req3->bindParam(':editeurnom',$editeurnom);
    $req3->bindParam(':livresid',$livresId);
    $livresid=$livresId;
    $editeurnom =$_POST["editeur"];
    $req3->execute();
   
    var_dump($livresid);

}

catch (PDOException $e){
    die ("erreur de creation : ". $e);
}






