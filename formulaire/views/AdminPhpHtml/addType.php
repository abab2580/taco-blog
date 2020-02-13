<?php
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/typeController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Type.php');
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
      <title>AdminType</title>
  </head>
  <body>
    <form method="POST" action="https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php" id="form" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="type">
      <div class="formulaire">
        <h1>Ajouter un Type</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Type </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Name" placeholder="Entrer le type de voiture" required></p>
        <div class="flex_centre">
          <input type="submit" class="bouton_envoie" name="btn-type" value="Valider">
        </div>
      </div>
    </form>
  </body>
</html><br><br>


<h1>Liste de type disponible</h1>
        <div class="">
              <table>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
                  <?php $vuType = twp_Type::getAllType();?>
                  <?php foreach($vuType as $type): ?>
                  <tr>
                      <td><?= $type->id; ?></td>
                      <td><?= $type->Name; ?></td>
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
