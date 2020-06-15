<?php
//je defini mon doctype
    include("template/doctype.php");   
?>
<?php
//je fais venir mon header
    include("template/header.php");   
?>

<main class="mt-5" >
  <div class="container-fluid">   
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 position-relative mb-5 ">
          <div class="text-center">
        <img  class="img1 img-fluid"src="img/manga1.jpg">
          </div>
        <div class="cardCollection bg-card" >
          <h2 class="text-center">Ma collection</h2> <p class="text-center">consulte et modifie ta bibliothèque </p>
          <div class="text-center"><button  onclick="location.href='macollection.php'" type="button" class="btn btn-light bt2 mb-2" >Consulte </button></div>
        </div>
       
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 position-relative mb-5">
        
          <div class="text-center">
        <img class="img1 img-fluid" src="img/recherche2.jpg">
          </div>
        <div class=" cardCollection bg-card " >
          <h2 class="text-center">Manga Search</h2> <p class="text-center">recherhe tes mangas et auteurs préférés</p>
          <div class="text-center"><button  onclick="location.href='mangasearch.php'" type="button" class="btn btn-light bt2 mb-2">Recherche</button></div>
        </div>
        
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12 mt-5 mb-4 barre">
      <div class="text-center">
        <img class=" img-fluid" src="img/moza3.png">
          </div>
          <div class=" barre1">
        <div class=" bg-card">
      <h2 class="text-center">Communauté</h2> <p class="text-center">Donnes ton avis et partage tes coups de coeurs</p>
          <div class="text-center"><button type="button" class="btn btn-light bt2 mb-2">Commente</button></div>
          </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</main>
<?php
//footer
    include("template/footer.php");   
?>
