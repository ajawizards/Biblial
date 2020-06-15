<?php
//je fais venir mon doctype
    include("template/doctype.php");   
?>

<?php
//je fais venir mon header
    include("template/header.php");   
?>

<div class="container">
    
<h1 class="text-center"><span class= "mt-3 badge badge-danger">Bibliothèque</span></h1>
    <div class="row">
        <?php
        require_once 'function/voirlivre.php';
           /* var_dump(infocarte()); */ // avec ce vardump je peux verifier le contenu des infos retourunées par ma fonction.
            $cartes = infocarte(); 
            foreach ($cartes as $carte) {
              /*   $modalvue= $carte['livresid'];
                var_dump($modalvue); */
        ?>
             <div class=" col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4 mb-4">

            <div id="" class=" card text-center">
           <?php /* var_dump($carte) */?> 
            <?php echo '<img height="400px"  class=" card-img-top" src="'.$carte['livresimg'].'" alt="image du livre">'?>
            <div class="card-body">
                <h5 class="  card-title"><?php echo $carte['livrestitre']?>
            </h5>
                <p class="card-text"><?php echo $carte['auteursnom']?></p>
                <!-- <a href="#" class="btn btn-danger">voir plus</a> -->
                <button type="submit" class="btn btn-outline-dark  mb-2 policeText" data-toggle="modal" data-target="#modalvue<?php echo $carte['livresid']?>">En savoir plus</button>
            </div>
            </div>
            </div>
          
            <div class="modal fade bd-example-modal-lg" id='modalvue<?php echo $carte['livresid']?>' tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header bg-black text-white">
        <h5 class="modal-title " id="exampleModalLabel"><?php echo $carte['livrestitre']?></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="card" style="height: 600px">
                <img src="<?php echo ''.$carte['livresimg']?>" class="card-img-top" alt="...">
            <div class="card-body">
                   
                    <p class="card-text">Tome N°<?php echo $carte['livrestome']?></p>
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">R&eacute;sumé : <?php echo $carte['livreresum']?></li>
                    <li class="list-group-item">Nombres de pages : <?php echo $carte['livrespage']?></li>
                    <li class="list-group-item">Date de publication : <?php echo $carte['livrespublication']?></li>
                    <li class="list-group-item">Auteur : <?php echo $carte['auteursnom']?></li>
                    <li class="list-group-item text-center "><form ><button  data-placement="top" data-content="livre ajouté à ta collection" class="ajoutlivre btn btn-info" type="button">Ajouter</button>

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