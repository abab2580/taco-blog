<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../Css/mastercss.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
      <title>AdminModel</title>
  </head>
  <body>
    <form method="POST" action="https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php" id="form" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="cylindre">
      <div class="formulaire">
        <h1>Ajouter le model</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Nom</label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Name" placeholder="Saisissez le model de votre voiture " required></p>

        <p class="ligne"><label class="labelcategorie" for="inputNom"> Model</label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Cylinder" placeholder="Saisissez le model de votre voiture " required></p>
        <div class="flex_centre">
          <input type="submit" class="bouton_envoie" name="btn-model" value="Ajouter">
        </div>
      </div>
    </form>
  </body>
</html>
