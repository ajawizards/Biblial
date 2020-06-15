<?php
//je defini mon doctype
    include("template/doctype.php");   
?>
<?php
//je fais venir mon header
    include("template/header.php");   
?>
<main>


<?php 
if(!empty($_POST) && !empty($_POST['password'])) {

    
    require_once 'inc/db.php';
    require_once 'inc/functions.php';

    $req = $pdo->prepare("SELECT * from users WHERE (username = :username OR email = :username)  AND confirmed_at IS NOT NULL"); // le compte doit etre obligatoirement verifier pour acceder à la connexion
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();

    if (password_verify($_POST['password'], $user->password)) { 
        // verifer le hash du password et le confirmed 
        
        if($user->roles_id == '1'){ // si simple user arrive sur la page de son compte
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté au site';
            header('Location: account.php');
            exit();

        }

        if($user->roles_id == '2'){ // si admin il va direct sur la page moncompte
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = "Vous êtes maintenant connecté au site en tant qu'administrateur";
            header('Location: moncompte.php');
            exit();

        }
   
    } else {
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect';
        header('Location: login.php');
    }


}     
     
 ?>

<div class="container mb-5">
<h1 class="text-center"><span class= "mt-3 badge badge-danger">Se connecter</span></h1>

<form action="" method="POST">


<div class="row text-center justify-content-center">

<div class="col-md-7">

<div class="form-group">

<label   for="">Pseudo ou email </label>

<input type="text" name="username"  class="form-control">

</div>

</div>

<div class="col-md-7">

<div class="form-group">

<label   for="">Mot de passe</label>

<input type="password" name="password" class="form-control">
</div>

</div>

<div class="col-md-7">

<button type="submit" class=" btn btn-danger">Valider</button>
</div>

</div>
</form>

</div>

</main>
<?php
//footer
    include("template/footer.php");   
?>
