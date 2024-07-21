<?php 
session_start();
include('header.php');
include('navbar.php');
 ?>
  <body>
      <!-- Hero -->
  <section class="container-hero">
    <div>
      <img class="hero" src="../asset/hero.jpeg" alt="Paysage Zoo">
      <div class="hero-h1">
        <h1>Bienvenue à ARCADIA Zoo</h1> 
      </div>
    </div>
    <div class="container-color">
    </div>
  </section>

  <!-- Services -->
  <section class="container-service">
    <div class="service-titre">
      <h2>Animations et Activités</h2>
    </div>
    <div class="card-service">
      <img src="../asset/restaurant2.jpg" alt="Salle restaurant">
      <h3>Restauration</h3>
      <p>Venez découvrir la cuisine du monde dans une ambiance tropicale.</p>
      <a class="button-orange" href="../pages/service.html">En savoir +</a>
    </div>

    <div class="card-service">
      <img src="../asset/train.jpg" alt="Petit Train">
      <h3>Tour de petit train</h3>
      <p>Découvrez le Zoo autrement à bord du petit train.</p>
      <a class="button-orange" href="../pages/service.html">En savoir +</a>
    </div>

    <div class="card-service">
      <img src="../asset/soigneur-animalier.jpg" alt="Soigneur animalier">
      <h3>Visite guidée</h3>
      <p>Venez à la rencontre de nos pensionnaires. Visite gratuite.</p>
      <a class="button-orange" href="../pages/service.html">En savoir +</a>
    </div>
    <div class="container-color">
    </div>
  </section>
  <!-- Animaux -->
  <section class="container-animaux">
    <h2>Habitats et Animaux</h2>
    <div class="container-map">
      <a class="button-green" href="../pages/habitat-animaux.html">Préparer sa visite</a>
      <img src="../asset/plan2.png" alt="carte zoo">
    </div>
    <div class="container-profile">
    <div class="card-profile">
      <a href="../pages/lion.html">
        <img class="profile" src="../asset/Profil lion.png" alt="Lion">
      </a>
      <h3>Leonardo</h3>
    </div>

    <div class="card-profile">
      <a href="../pages/girafe.html">
        <img class="profile" src="../asset/Profil girafe.png" alt="Girafe">
      </a>
      <h3>Zara</h3>
    </div>

    <div class="card-profile">
      <a href="../pages/kangourou.html">
        <img class="profile" src="../asset/Profil kangourou.png" alt="Kangourou">
      </a>
      <h3>Roo</h3>
    </div>

    <div class="card-profile">
      <a href="../pages/singe.html">
        <img class="profile" src="../asset/Profil singe.png" alt="Singes">
      </a>
      <h3>Bongo</h3>
    </div>

    <div class="card-profile">
      <a href="../pages/oiseaux.html">
        <img class="profile" src="../asset/Profil oiseau.png" alt="Perroquet">
      </a>
      <h3>Rio</h3>
    </div>

    <div class="card-profile">
      <a href="../pages/loup.html">
        <img class="profile" src="../asset/Profil loup.png" alt="Loup">
      </a>
      <h3>Fang</h3>
    </div>
  </div>
  <div class="container-color">
    </div>
  </section>

  
  <!-- Avis-->
  <section class="container-avis">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../asset/avis.png" alt="Avis">
        </div>
        <div class="carousel-item">
          <img src="../asset/avis1.png"  alt="Avis">
        </div>
        <div class="carousel-item">
          <img src="../asset/avis2.png"  alt="Avis">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

<!--MODAL-->
<?php include('modal.php'); ?>

    
  </section>
</body>
  
  <?php include('footer.php') ?>