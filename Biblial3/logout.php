<?php
//je defini mon doctype
    include("template/doctype.php");   
?>
<?php
//je fais venir mon header
    include("template/header.php");   
?>
<?php 
/* session_start(); */

unset($_SESSION['auth']);
$_SESSION['flash']['success'] = "Vous êtes maintenant déconnecté";
header('Location: login.php'); 
?>
<form action="" method="POST">

<div class="form-group">

<label   for="">Pseudo</label>

<input type="text" name="username"  class="form-control">

</div>


<div class="form-group">

<label   for="">Email</label>

<input type="text" name="email" class="form-control">

</div>


<div class="form-group">

<label   for="">Mot de passe </label>

<input type="password" name="password" class="form-control">

</div>



<div class="form-group">

<label   for=""> Confirmer votre Mot de passe </label>

<input type="password" name="password_confirm" class="form-control">

</div>

<button type="submit" class=" btn btn-primary">M'inscrire</button>

</form>


<?php
//footer
    include("template/footer.php");   
?>