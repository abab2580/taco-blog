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
  <title>Formulaire d'enregistrement</title>
</head> -->
<!-- <body> -->
  <form method="POST" action="https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php" id="form" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="type" value="inscription">
    <div class="formulaire">
      <h1>S'inscrire</h1>
      <p class="asterisk" id="size">Les champs avec<abbr> * </abbr>sont obligatoires.</p>
      <p class="ligne"><label class="labelcategorie" for="inputNom"> Nom</label><abbr> *</abbr></p>
      <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name="Last_Name" placeholder="Insérer votre nom" required></p>

      <p class="ligne"><label class="labelcategorie" for="inputPrenom"> Prénom</label><abbr> *</abbr></p>
      <p class="ligne"><input type="text" class="champ_input" value="" id="inputPrenom" name="First_Name" placeholder="Insérer votre prénom" required></p>

      <p class="ligne"><label class="labelcategorie" for="inputPseudo"> Pseudo</label><abbr> *</abbr></p>
      <p class="ligne"><input type="text" class="champ_input" value="" id="inputPseudo" name="Pseudo" placeholder="ex : Austin_59" minlength="2" maxlength="20" required></p>

      <p class="ligne"><label class="labelcategorie" for="inputMail"> Adresse Email</label><abbr> *</abbr></p>
      <p class="ligne"><input type="email" class="champ_input" value="" id="inputMail" name="Mail" placeholder="ex : taco@adresse.com" pattern="[a-zA-Z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}" required></p>

      <p class="ligne"><label class="labelcategorie" for="inputPassword1"> Mot de passe</label><abbr> *</abbr></p>
      <p class="ligne"><input type="password" class="champ_input" value="" id="inputPassword1" name="Password" placeholder="Entre 8 et 12 caractères dont 1 maj et 1 chiffre" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,12}" required></p>

      <p class="ligne"><label class="labelcategorie" for="inputPassword2"> Confirmation du mot de passe</label><abbr> *</abbr></p>
      <p class="ligne"><input type="password" class="champ_input" value="" id="inputPassword2" placeholder="Mot de passe" required></p>

      <p id="size">En vous inscrivant, vous acceptez la Politique de conﬁdentialité de tacotroc.com </br> accessible via le lien suivant : <a href="https://www.tacotroc.com/politique-de-confidentialite"> Conditions générales d'utilisation </a> </p>
      <div class="flex_centre">
        <input type="submit" class="bouton_envoie" name="" value="Valider">
      </div>
    </div>
  </form>
<!-- </body> -->
<!-- <script type="text/javascript" src="../Js/masterjs.js">

</script>
</html> -->
