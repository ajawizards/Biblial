<?php 
if (session_status() == PHP_SESSION_NONE) { // s'il n'y a pas de session demare en une nouvelle 

  session_start();
  //var_dump($_SESSION['auth']);
 /*   if(isset($_SESSION['auth']->id)){
    echo "Session is running". $_SESSION['auth'];
  
  }

  else {
    $_SESSION = 'visitor';
    echo "Session is running". $_SESSION;
  } */
 
}
?>
<header  class=" bg-black ">   
  <div class="header container-fluid">
    <div class="row justify-content-between"> 
      <div>   
      </div>
      <div>
        <a href="index.php"><img class="mb-4 mt-3" src="img/log-biblial-v2_1200x.png"  alt="logo de biblial" width="150px"></a>
      </div>
      <div>    
      </div>
  </div>
    <div class="row justify-content-center">
    <nav class="navbar navbar-expand-lg  navbar-light  text-center ">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-white rounded"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
    <a class="mr-3 ml-3" href="index.php"><i class="fas fa-book-reader logac"></i></a>
      <li class="nav-item active">
        <a  class=" ml-3" href="bibliotheque.php">Bibliothèque <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a  class="mr-3 ml-3"  href="mangasearch.php">Manga Search</a>
      </li>
      <li class="nav-item active">
        <a  class="mr-3 ml-3"  href="pourquoi.php">Pourquoi Biblial ?</a>
      </li>
      <li class="nav-item active">
        <a  class="mr-3 ml-3" href="contact.php">Contact</a>
      </li>
            <?php if (isset($_SESSION['auth'])): ?>
       <li class="nav-item active"><a class="mr-3 ml-3" href="macollection.php">Ma Collection</a></li>
       <li class="nav-item active"><a class="mr-3 ml-3" href="logout.php">Se déconnecter</a></li>

     <?php else: ?>

       <li class="nav-item active" ><a class="mr-3 ml-3" href="register.php">S'inscrire</a></li>
       <li class="nav-item active"><a class="mr-3 ml-3" href="login.php">Se connecter</a></li>
     </ul>
      <?php endif; ?>
        </div>
      </div>
    
    <div class="container">

  <?php if (isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type =>$message): ?>  

      <div class="alert alert-<?= $type; ?>">
      
      <?= $message; ?>
      
      </div>
    <?php endforeach; ?>

      <?php unset($_SESSION['flash']);?>  <!-- unset va detruire les erreurs -->
    <?php endif; ?>
    </ul>
  </div>
</nav>
  </div>
</header>