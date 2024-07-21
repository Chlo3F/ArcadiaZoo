
<?php include('header.php'); 
include('navbar.php');
?>

<!---- MAP ---->
  <section class="container-map2">
    <div class="title-map">
      <h1>Habitats et Animaux</h1>
    </div>
    
    <p> Suspendisse erat mauris, nonummy eget, pretium eget, consequat vel, justo.
      Pellentesque consectetuer erat sed lacus. Nullam egestas nulla ac dui.
      Donec cursus rhoncus ipsum. Nunc et sem eu magna egestas malesuada.
      Vivamus dictum massa at dolor. Morbi est nulla, faucibus ac, posuere in, interdum ut, sapien.
      Suspendisse erat mauris, nonummy eget, pretium eget, consequat vel, justo.
      Pellentesque consectetuer erat sed lacus. Nullam egestas nulla ac dui.
      Donec cursus rhoncus ipsum. Nunc et sem eu magna egestas malesuada.
      Vivamus dictum massa at dolor. Morbi est nulla, faucibus ac, posuere in, interdum ut, sapien.
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