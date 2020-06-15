<?php
session_start();
?>
<?php
//je fais venir mon doctype
    include("template/doctype.php");   
?>


<?php
//je fais venir mon header
    include("template/header.php");   
?>

<div class="container" >
    
<h1 class="text-center"><span class= "mt-3 badge badge-danger">Contact</span></h1>

<?php 
    if(array_key_exists('errors', $_SESSION)): ?>
        <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>  
        </div>
<?php endif; ?>

<?php 
    if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert alert-success">
          Votre Email nous a bien été envoyé.  
        </div>
<?php endif; ?>


<div class="container mb-5">
        <div class=" text-justify  text-center mt-5">
        <p>Une remarque à faire pour améliorer le site, une prise d'informations, un dysfonctionnement de certainses fonctionnalités ? <br>
           Où alors des remerciements pour le contenu proposé n'hesite pas à prendre contact les champs ci-dessous sont à ta disposition.</p>
        </div>
    </div>

<form action="post_contact.php"  method="POST">

<div class="row text-center ">

<div class="col-md-6">
    
    <div class="form-group">
        <label for="inputname">Votre Nom</label>
        <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '';?>">
    </div>
</div>
<div class="col-md-6">
    
    <div class="form-group">
        <label for="inputemail">Votre Email</label>
        <input type="text" name="email" class="form-control" id="inputemail"  value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>">
    </div>
</div>
<div class="col-md-12">

    <div class="form-group">

        <label for="inputmessage">Votre message</label>
        <textarea id="inputmessage" name="message" class="form-control" ><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>

    </div>
    <button type="submit" class="btn btn-info">Envoyer</button>
</div>
 

</div>

</form>
        
<!-- <h2>Debug : </h2>
<?= var_dump($_SESSION); ?> -->

</div>


<div class="container">
        <div class=" text-justify  text-center mt-5">
        <p>Une fois votre message reçu une reponse vous sera faite dans les 24 heures à l'adresse mail que vous avez indiqué.</p>
        </div>
    </div>

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['errors']); 
unset($_SESSION['success']); 
?>


<?php
//footer
    include("template/footer.php");   
?>