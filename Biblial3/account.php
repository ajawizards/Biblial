<?php
//je defini mon doctype
    include("template/doctype.php");   
?>
<?php
//je fais venir mon header
    include("template/header.php");   
?>
<?php 
/* session_start(); */ // la fonction est demaré dans le header pas besoin de de session_start ici
// verifacation que l'utilisateur est bien connecté
require 'inc/functions.php';
  logged_only();
  if(!empty($_POST)){

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){ //empty sert pour pas valider avec champs vide le changement 
        $_SESSION['flash']['danger'] = "les mots de passes ne correspondent pas";

    } else {
        $user_id = $_SESSION['auth']->id;
        $password= password_hash($_POST['password'], PASSWORD_BCRYPT);  //  cyptage du mot de passe 
        require_once 'inc/db.php';
        $pdo->prepare('UPDATE users SET password = ? WHERE id = ? ')->execute([$password, $user_id]);  // requete pour verifier les password pour le chnagement
        $_SESSION['flash']['succes'] = "Votre mot de passe a bien été mis à jour";
    }

  }

?>
<main>
<div class="container mb-5">
<h1 class="text-center"><span class= "mt-3 badge badge-danger">Mon compte</span></h1>


<h1>Bonjour <?=$_SESSION['auth']->username;?> </h1>

<form action="" method="post"> <!-- ici creation d'un formulaire pour changer le mot de passe du compte -->


<div class="form-group">

    <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe">

</div>
<div class="form-group">

    <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe">
</div>
<button class="btn btn-info">Changer mon mot de passe</button>


</form>

</div>
</main>
<?php
//footer
    include("template/footer.php");   
?>
