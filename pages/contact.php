<?php session_start(); 
if (isset($_SESSION['status'])) {
  echo '<div class="alert alert-info">' . $_SESSION['status'] . '</div>';
  unset($_SESSION['status']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arcadia Zoo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/navbar-footer.css" rel="stylesheet">
  <link href="../css/contact.css" rel="stylesheet">
</head>

<body>


    <div class="container-co">
        <a class="contact-header" href="accueil.php">
          <img class="logo-header" src="../asset/Logo.png" alt="logo">
        </a>


  <div class="container-form">

    <form class="form" action="../function/sendmail.php" method="POST" id="contact">

      <div class="title-form">
        <h1>Contactez-nous</h1> 
      </div>
  
      <div>
        <label for="subject" class="form-label">Sujet</label>
        <input type="text" class="form-control" name="subject" id="subject">
      <small></small>
      </div>
        
      <div>
        <label for="message" class="form-label">Description</label>
        <textarea class="form-control" name="message"
        id="message" rows="8"></textarea>
        <small></small>
      </div>
      
      <div>
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" name="email"
        id="email" placeholder=" mon@email.com">
        <small></small>
      </div>
      
      <div class="button">
        <button class="button-orange" type="submit" name="submitContact">Envoyer</button>
      </div> 
        </form>
  
  </div>
    

  </div>
  
  </div>
  <script src="../js/formulaire.js"></script>
</body>
</html>