<?php
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/cylinderController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Cylinder.php');
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
      <title>AdminCylindrer</title>
  </head>
  <body>
    <form method="POST" action="https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php" id="form" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="cylindre">
      <div class="formulaire">
        <h1>Ajouter le type de votre Cylindre</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Type Cylindre</label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Cylinder" placeholder="Saisissez le type de votre cylindre " required></p>
        <div class="flex_centre">
          <input type="submit" class="bouton_envoie" name="btn-cylinder" value="Valider">
        </div>
      </div>
    </form>
  </body>
</html><br><br>


<h1>Liste de version disponible</h1>
        <div class="">
              <table>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
                  <?php $vuCylinder = twp_Cylinder::getAllCylinder();?>
                  <?php foreach($vuCylinder as $cylinder): ?>
                  <tr>
                      <td><?= $cylinder->id; ?></td>
                      <td><?= $cylinder->Cylinder; ?></td>
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
