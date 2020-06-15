<?php
//je fais venir mon doctype
    include("template/doctype.php");   
?>

<?php
//je fais venir mon header
    include("template/header.php");   
?>

<form action="tampon.php" method="POST">

<div class="container">
<div class="row text-center justify-content-center">

<div class="col-md-7">
    <div class="form-group">
        <label   for="">Titre</label>
        <input type="text" name="titre"  class="form-control">
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
        <label   for="">N°du tome </label>
        <input type="text" name="Numero_du_tome" class="form-control">
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
        <label   for="">Nombres de pages</label>
        <input type="text" name="Nombres_de_pages" class="form-control">
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
        <label   for=""> Résumé </label>
        <input type="text" name="resum" class="form-control">
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
        <label   for=""> Auteur </label>
        <input type="text" name="auteur" class="form-control">
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
        <label   for=""> Editeur </label>
        <input type="text" name="editeur" class="form-control">
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
        <label   for=""> Date de Publication </label>
        <input type="text" name="date_publication" class="form-control">
    </div>
</div>

<div class="col-md-7">
    <div class="form-group">
        <label   for=""> Image </label>
        <input type="text" name="img" class="form-control">
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
    <button type="submit" class=" btn btn-danger">Valider</button>
    </div>
</div>

</div> 
</div>
</form>



<?php 
/* 
$request = $_POST["titre"]; // donnée contenu dans le titre pour le livre 
$request2 = $_POST["auteur"];
$request3 = $_POST["resum"];
$request4 = $_POST["editeur"];
$request5 = $_POST["Numero_du_tome"];
$request6 = $_POST["Nombres_de_pages"];
$request7 = $_POST["date_publication"];
$request8 = $_POST["img"];
$request9 = $_POST["isbn"];

echo $request,"<br>", $request2,"<br>", $request3,"<br>", $request4,"<br>", $request5, "<br>", $request6, "<br>", $request7,"<br>", $request8, "<br>", $request9;
 */

?>






<?php
//footer
    include("template/footer.php");   
?>