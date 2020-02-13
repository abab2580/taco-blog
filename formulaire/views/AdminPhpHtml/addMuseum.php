<?php
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/museeController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Museum.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../Css/mastercss.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
      <title>AdminMuseum</title>
  </head>
  <body>
    <form method="POST" action="https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php" id="form" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="musee">
      <div class="formulaire">
        <h1>Ajouter un musée</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Type couleur</label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Name" placeholder="Ajouter une musée" required></p>
        <div class="flex_centre">
          <input type="submit" class="bouton_envoie" name="btn-musee" value="Valider">
        </div>
      </div>
    </form>
  </body>
</html><br><br>



                              <h1>Liste de musée disponible</h1>
    <div class="">
          <table>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>

                <?php $vuMusee = twp_Museum::getAllMuseum();?>

                <?php foreach($vuMusee as $musee): ?>
                <tr>
                  <td><?= $musee->id; ?></td>
                  <td><?= $musee->Name; ?></td>
                  <td>
                  <a href="">edit</a>
                  <a href="">delete</a>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>

    </div>
  </body>
  </html>
