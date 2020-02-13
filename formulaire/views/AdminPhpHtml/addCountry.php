<!-- </?php
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/paysController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Country.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');
?> -->
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../Css/mastercss.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
      <title>AdminCountry</title>
  </head>

<body>
  <form class="" action="" method="post">
    <div class="formulaire">
                <h1>Ajouter un pays</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Pays</label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Name" placeholder="ajouter un pays" required></p>
   <div class="flex_centre">
        <input type="submit" class="bouton_envoie" name="btn-brand" value="Valider">
      </div>
    </div>
  </form>
</body>
