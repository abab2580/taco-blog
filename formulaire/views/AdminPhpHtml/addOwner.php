<?php
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/proprietaireController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Owner.php');
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
      <title>AdminOwner</title>
  </head>
  <body>
    <form method="POST" action="https://www.tacotroc.com/wp-content/plugins/formulaire/controller/routeur.php" id="form" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="proprietaire">
      <div class="formulaire">
        <h1>Ajouter une propriétaire</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Nom </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Last_Name" placeholder="Entrer votre nom" required></p>

        <p class="ligne"><label class="labelcategorie" for="inputNom"> Prenom </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "First_Name" placeholder="Entrer votre prenom" required></p>

        <p class="ligne"><label class="labelcategorie" for="inputNom"> Entreprise </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Compagny" placeholder="Entrer le nom de votre entreprise" required></p>

        <p class="ligne"><label class="labelcategorie" for="inputNom"> Siret </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Siret" placeholder="Entrer le numero siret de votre entreprise" required></p>

        <p class="ligne"><label class="labelcategorie" for="inputNom"> Nom entreprise </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Compagny_Name" placeholder="Entrer le nom de l'entreprise (a revoir)" required></p>

        <p class="ligne"><label class="labelcategorie" for="inputNom"> Telephone </label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Phone" placeholder="Entrer votre numero de Telephone" required></p>
        <div class="flex_centre">
          <input type="submit" class="bouton_envoie" name="btn-proprietaire" value="Ajouter">
        </div>
      </div>
    </form>
  </body>
</html><br><br>




                              <h1>Liste de propriétaire disponible</h1>
    <div class="">
          <table>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Prenom</th>
                  <th>Entreprise</th>
                  <th>Siret</th>
                  <th>Nom entreprise</th>
                  <th>Telephone</th>
                  <th>Action</th>
                </tr>

                <?php $vuowner = twp_Owner::getAllOwner();?>

                <?php foreach($vuowner as $owner): ?>
                <tr>
                  <td><?= $owner->id; ?></td>
                  <td><?= $owner->Last_Name; ?></td>
                  <td><?= $owner->First_Name; ?></td>
                  <td><?= $owner->Compagny; ?></td>
                  <td><?= $owner->Siret; ?></td>
                  <td><?= $owner->Compagny_Name; ?></td>
                  <td><?= $owner->Phone; ?></td>
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
