<?php
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/vintageController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Vintage.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- <link rel="stylesheet" href="../Css/mastercss.css"> -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
      <title>AdminVintage</title>
  </head>
  <body>
    <form method="POST" action="https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php" id="form" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="anciennete">
      <div class="formulaire">
        <h1>Ancienneté</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Ancienneté </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Mk" placeholder="l'ancienneté de votre voiture" required></p>
        <div class="flex_centre">
          <input type="submit" class="bouton_envoie" name="btn-anciennete" value="Valider">
        </div>
      </div>
    </form>
  </body>
</html>


            <h1>Ancienneté des voitures</h1>
                  <div class="">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Ancienneté</th>
                            <th>Action</th>
                        </tr>

                      <?php $anciennete = twp_Vintage::getAllVintage();?>

                      <?php foreach($anciennete as $vintage): ?>
                      <tr>
                            <td><?= $vintage->id; ?></td>
                            <td><?= $vintage->Mk; ?></td>
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
