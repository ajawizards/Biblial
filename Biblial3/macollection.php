<?php
//je fais venir mon doctype
    include("template/doctype.php");   
?>

<?php
//je fais venir mon header
    include("template/header.php");   
?>

<div class="container">
    
<h1 class="text-center"><span class= "mt-3 badge badge-danger">Ma collection</span></h1>
    <div class="row">
        

        <?php
        require 'inc/functions.php';
       
        logged_only();
        /* var_dump($_SESSION); */ // ce var_dump me permet de voir les informations de la personne connecté. 
     
       /*  var_dump($_SESSION ["auth"]->id); */ // ce var_dump me permet de voir précisement quel utilisateur est connecté. Pour acceder à la propriété d'un objet il faut utiliser ->
        
        require_once 'function/macollec.php';
        /*  var_dump(voirmacollec()); */
         $meslivres = voirmacollec();
            /* var_dump($meslivres); */
         foreach($meslivres as $monlivre){
        ?>
            
             <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4 mb-4">

            <div id="" class="card text-center" >
           <?php /* var_dump($carte) */?> 
            <?php echo '<img height="300px" class="card-img-top" src="'.$monlivre['livresimg'].'" alt="image du livre">'?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $monlivre['livrestitre']?>
            </h5>
                <p class="card-text"><?php echo $monlivre['nom_auteur']?></p>
                <!-- <a href="#" class="btn btn-danger">voir plus</a> -->
                <button type="submit" class="btn btn-outline-dark  mb-2 policeText" data-toggle="modal" data-target="#modalvue<?php echo $monlivre['livreId']?>">En savoir plus</button>
            </div>
            </div>
            </div>
          
            <div class="modal fade bd-example-modal-lg" id='modalvue<?php echo $monlivre['livreId']?>' tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header bg-black text-white">
        <h5 class="modal-title " id="exampleModalLabel"><?php echo $monlivre['livrestitre']?></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="card" style="height: 600px">
                <img src="<?php echo ''.$monlivre['livresimg']?>" class="card-img-top" alt="...">
            <div class="card-body">
                   
                    <p class="card-text">Tome N°<?php echo $monlivre['livrestome']?></p>
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">R&eacute;sumé : <?php echo $monlivre['livreresum']?></li>
                    <li class="list-group-item">Nombres de pages : <?php echo $monlivre['livrespage']?></li>
                    <li class="list-group-item">Date de publication : <?php echo $monlivre['livrespublication']?></li>
                    <li class="list-group-item">Auteur : <?php echo $monlivre['nom_auteur']?></li>
                    <li class="list-group-item">Editeur : <?php echo $monlivre['nom_editeur']?></li>
                    <li class="list-group-item text-center "><form ><button data-placement="top" data-content="livre supprimer de ta collection" class="supprlivre btn btn-info" type="button">Supprimer</button>

                </form></li>
                
                <?php 
    $value = $_SESSION['auth']->id;
    echo "<input type='hidden' class='utilisateur' value='$value' >"
  
  ?>
                </ul>
          
            </div>
            </div>
            </div>
            </div>
        <?php
        }
        ?>


   
    </div>
    </div>

<?php
//footer
    include("template/footer.php");   
?>