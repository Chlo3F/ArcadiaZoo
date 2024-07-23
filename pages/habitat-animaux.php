
<?php include('header.php'); 
include('navbar.php');
?>

<!---- MAP ---->
  <section class="container-map2">
    <div class="title-map">
      <h1>Habitats et Animaux</h1>
    </div>
    
    <p> 
    Bienvenue au Zoo Arcadia, un havre de biodiversité situé près de la mythique forêt de Brocéliande 
    en Bretagne, France. Fondé en 1960, Arcadia s'est forgé une réputation d'excellence 
    grâce à son engagement profond pour le bien-être animal et ses initiatives écologiques avant-gardistes.
    </p>
    <h5>Un Refuge pour la Biodiversité</h5>
    <p>
    Arcadia abrite une incroyable diversité d’animaux répartis dans des habitats soigneusement 
    reconstitués pour refléter leurs environnements naturels : des vastes étendues de la savane 
    africaine, où les lions et les girafes se déplacent majestueusement, aux forêts luxuriantes 
    de l’Amazonie, où les singes agiles évoluent parmi les lianes et les branches. 
    Chaque zone du zoo est conçue pour offrir aux animaux des conditions optimales 
    qui encouragent leurs comportements naturels, assurant leur santé et leur bien-être.
    </p>

    <h2> Carte du Zoo</h2>
    <img src="../asset/Plan.png" usemap="#zoo-map">

    <map name="zoo-map">
      <area shape="circle" coords="249,233,105" 
      href="lion.php" alt="plan du zoo" title="La savane carnivore">
      
      <area shape="circle" coords="727,164,105"
        href="girafe.php" alt="plan du zoo" title="La savane herbivore">

      <area shape="circle" coords="166,472,108" 
      href="kangourou.php" alt="plan du zoo" title="L'Australie">

      <area shape="circle" coords="815,720,133" 
      href="singe.php" alt="plan du zoo" title="Amazonie">

      <area shape="circle" coords="579,475,116" 
      href="oiseaux.php" alt="plan du zoo" title="Tropique">

      <area shape="circle" coords="189,784,121" 
      href="loup.php" alt="plan du zoo" title="Europe centrale">
    </map>
  </section>

  <div class="container-color">
  </div>
  <div class="title-map">
    <h2>Habitats et Animaux</h2>
  </div>
  
<!----HABITATS---->
  <section class="container-profile">
    <div class="card-profile">
      <a href="lion.php">
        <img class="profile" src="../asset/savane-lion.jpg" alt="Lion">
      </a>
      <h4>La Savane aux Lions</h4>
    </div>

    <div class="card-profile">
      <a href="girafe.php">
        <img class="profile" src="../asset/savane-girafe.jpg" alt="Girafe">
      </a>
      <h4>La savane des Girafes</h4>
    </div>

    <div class="card-profile">
      <a href="kangourou.php">
        <img class="profile" src="../asset/australie-kangourou.jpg" alt="Kangourou">
      </a>
      <h4>Désert d'Australie</h4>
    </div>

    <div class="card-profile">
      <a href="singe.php">
        <img class="profile" src="../asset/amazonie-singe.jpg" alt="Singes">
      </a>
      <h4>L'amazonie</h4>
    </div>

    <div class="card-profile">
      <a href="oiseaux.php">
        <img class="profile" src="../asset/tropical-perroquet.jpg" alt="Perroquet">
      </a>
      <h4>Les Tropiques</h4>
    </div>

    <div class="card-profile">
      <a href="loup.php">
        <img class="profile" src="../asset/forêt-loup.jpg" alt="Loup">
      </a>
      <h4>Forêt hivernale</h4>
    </div>
  </section>

  
  <?php include('footer.php') ?>