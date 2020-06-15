<footer class="bg-black">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">
    <a class="mr-3 ml-3" href="index.php"><i class="fas fa-book-reader logac"></i></a>
      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="account.php">Mon compte</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="pourquoi.php">Pourquoi Biblial ?</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="contact.php">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <?php if (isset($_SESSION['auth'])): ?>
        <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="macollection.php">Ma collection</a>
        </h6>
      </div>
        <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="logout.php">Se deconnecter</a>
        </h6>
      </div>

     <?php else: ?>
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="register.php">S'inscrire</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="login.php">Se connecter</a>
        </h6>
      </div>
      <?php endif; ?>
      <!-- Grid column -->
      


    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12">
        <p style="line-height: 1.7rem"></p>Biblial, le site qui permet de gérer votre collection en ligne de manga.
                                       Rajoute en  base de données tous les titres dont tu disposes ! 
                                       Il est également possbile d'avoir un choix aléatoire de lecture journalier ! 
                                       N'attend plus vient enregistrer ta collection et n'hésite pas à la partager sur les réseaux .</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" id="test" value=2>Biblial © 2020 Copyright:
    <a href="">Charlot Alexandre</a>
  </div>
  <!-- Copyright -->

 
  
</footer>