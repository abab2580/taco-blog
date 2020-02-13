<?php
session_start();
?>
<!-- <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../Css/mastercss.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
</head>
<body> -->
  <?php
  if($_SESSION['Pseudo'] == "")
  {
    echo "<a href='https://www.tacotroc.com/sinscrire'>
    <button type='button' class='bouton_envoie'>Inscription</button></a> <br>";
    echo "<a href='https://www.tacotroc.com/se-connecter'>
    <button type='button' class='bouton_envoie'>Connexion</button></a> ";

  }
  else if($_SESSION['Pseudo'] !== "")
  {
    $user = $_SESSION['Pseudo'];
    // afficher un message
    echo "<br>Bonjour $user, vous êtes connectés";

    if($_SESSION['Pseudo'])
    {
      echo"<form action= 'https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php' method='POST' id='form'>
        <input type='hidden' name='type' value='deconnexion'>
       <input type='submit' class='bouton_envoie' value='Se déconnecter' />
        </form> ";
      }
    }
  ?>

<!-- </body>
<script type="text/javascript" src="../Js/masterjs.js"></script>
</html> -->
