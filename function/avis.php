<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "test");

if (isset($_POST['envoi'])) {
    $pseudo = $_POST['pseudo'];
    $comment = $_POST['comment'];

    // Échapper les valeurs pour éviter les injections SQL
    $pseudo = mysqli_real_escape_string($connection, $pseudo);
    $comment = mysqli_real_escape_string($connection, $comment);

    // Utiliser les variables PHP dans la requête SQL
    $insert_query = "INSERT INTO avis (pseudo, comment) VALUES ('$pseudo', '$comment')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if ($insert_query_run) {
        $_SESSION['status'] = "Envoi réussi!";
        header('location: accueil.php');
    } else {
        $_SESSION['status'] = "Échec de l'envoi";
        header('location: accueil.php');
    }
}
?>