<?php
//je defini mon doctype
    include("template/doctype.php");   
?>
<?php
//je fais venir mon header
    include("template/header.php");   
?>

<?php
 
require_once 'inc/functions.php'; 
/* session_start(); */

if(!empty($_POST)){


    $errors=array();

    require_once 'inc/db.php';

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){

        $errors['username'] = "votre pseudo n'est pas valide (alphanumérique)";

    } else {

        $req = $pdo->prepare('SELECT id from users WHERE username = ?'); 
        $req->execute([$_POST['username']]);
        $user=$req->fetch();
        if ($user){
            $errors['username'] = 'ce pseudo est déjà pris';
        }
        /* debug($user);
        die(); */
    }


    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre Email n'est pas valide";
    } 
    else {

        $req = $pdo->prepare('SELECT id from users WHERE email = ?'); 
        $req->execute([$_POST['email']]);
        $user=$req->fetch();
        if ($user){
            $errors['email'] = 'Cet email est déjà utilisé par un autre compte';
        }
        /* debug($user);
        die(); */
    }

  
    if (empty($_POST['password'])) {
        $errors['password'] = 'tu dois remplir le champs';
    }
    elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{8,12}$/', ($_POST['password'] ))) {
        $errors['password'] = 'il faut entre 8 et 12 caractères et au moins une lettre et un chiffre';
    } 
    elseif( $_POST['password'] != $_POST['password_confirm']){

        $errors['password'] = 'vos mots de passes ne sont pas identiques';
    } 
            
    

    if(empty($errors)){

        $req= $pdo->prepare("INSERT INTO users SET username= ?, password= ?, email= ?, confirmation_token =?,roles_id =(SELECT id FROM roles WHERE id ='1')");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token= str_random(60);
        /* debug($token); // pour que le token s'affiche
        die(); */
        $req->execute([$_POST['username'], $password, $_POST['email'], $token ]);
        $user_id= $pdo->lastInsertId();
        mail($_POST['email'],'Confirmartion de votre compte', "Afin de valider votre compte merci de valider ce lien\n\nhttp://localhost/biblial3/confirm.php?id=$user_id&token=$token");
        $_SESSION['flash']['success'] = 'un email de confirmation vous a été envoyé pour valider votre compte';
        header('Location: login.php');
        exit();
}



/* debug($errors); */

}


?>

<div class="container">
<h1 class="text-center"><span class= "mt-3 badge badge-danger">S'inscrire</span></h1>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
    <?php foreach($errors as $error): ?>
        <li><?= $error; ?></li>
    <?php endforeach; ?>
    </ul>
</div>
    <?php endif; ?>


<div class="container mb-5">
        <div class=" text-justify  text-center mt-5">
            <h4>L'inscription à Biblial est entièrement gratuite!</h4>
            <h6>En devenant membre tu pourras :</h6>
        <p>Gérer ta collection de manga, et la partager sur les réseaux<br>
           Réserver ton pseudo afin que personne d'autres puisse l'utiliser <br>
        </p>
        </div>
    </div>


<form action="" method="POST">


<div class="row text-center justify-content-center">

<div class="col-md-7">

<div class="form-group">

<label   for="">Pseudo</label>

<input type="text" name="username" pattern=".{6,}" title="le pseudo doit être composé de 6 caractères ou plus" class="form-control">

</div>

</div>

<div class="col-md-7">

<div class="form-group">

<label   for="">Email</label>

<input type="text" name="email" class="form-control">

</div>

</div>

<div class="col-md-7">

<div class="form-group">

<label   for="">Mot de passe </label>

<input type="password" name="password"  class="form-control">


</div>

</div>


<div class="col-md-7">

<div class="form-group">

<label   for=""> Confirmer votre Mot de passe </label>

<input type="password" name="password_confirm" class="form-control">

</div>

<button type="submit" class=" btn btn-danger">Valider</button>
</div>
     
</div>
</form>

</div>

<div class="container mb-5">
        <div class=" text-justify  text-center mt-5">
            <h6>Informations :</h6>
        <p>En soumettant ce formulaire, j'accepte<a href=""> la politique d'utilisation des données.</a><br>
           Ainsi que l'exploitation des informations saisies dans le cadre du compte utilisateur Biblial.<br>
        </p>
        </div>
    </div>

<?php
//footer
    include("template/footer.php");   
?>

<!-- 
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Il faut au moins un numéro, une minuscule, une majuscule et 8 caractèeres" -->