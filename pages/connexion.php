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
    <header>
        <a class="contact-header" href="accueil.php">
          <img class="logo-header" src="../asset/Logo.png" alt="logo">
        </a>
      </header>

      <div class="container-connexion">
        <form class="form" action="" method="POST" id="login">
          <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" autocomplete="off" >
            <small></small>
          </div>
          
          <div>
            <label for="password" class="form-label">Mot de passe</label>
            <input type="text" class="form-control" name="password"> <!-- Remettre type = password-->
            <small></small>
          </div>
          
          <div class="button">
              <button class="button-orange" type="submit">Se Connecter</button>
            </div> 
          
        </form>

      </div>
     </div>  
     <script src="../js/login.js"></script>
</body>
</html>