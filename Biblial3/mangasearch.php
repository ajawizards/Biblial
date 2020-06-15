<?php
//je fais venir mon doctype
    include("template/doctype.php");   
?>

<?php
//je fais venir mon header
    include("template/header.php");   
?>
<main>
  <div class="container mb-5">
    <h1 class="text-center"><span class= "mt-3 badge badge-danger">Manga Search</span></h1>
      <div class=" text-justify  text-center mt-5">
          <h4>Envie de découvrir un manga, un auteur ?</h4>
          <h6>Fais ta recherche ici !</h6>
      </div>
        <div class="text-center">
          <input class=" text-center mt-5" id="search" placeholder="titre/auteur ">
          <button id="bouton" type="button" class="btn btn-light bt2 mb-2">Clique-ici !</button>
        </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  id="resultat" ></div>
  </div>
  </div>
</main>

<?php
//footer
    include("template/footer.php");   
?>