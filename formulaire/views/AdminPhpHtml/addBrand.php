<?php
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/brandController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Brand.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');
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
      <title>AdminBrand</title>
  </head>
  <body>

    <form method="POST" action="" id="form" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="type" value="brand">
      <div class="formulaire">
        <h1>Ajouter une marque</h1>
        <p class="ligne"><label class="labelcategorie" for="inputNom"> Nom</label><abbr> *</abbr></p>
        <p class="ligne"><input type="text" class="champ_input" value="" id="inputNom" name = "Name" placeholder="Insérer le nom de la marque" required></p>
        <div class="flex_centre">
          <input type="submit" class="bouton_envoie" name="btn-brand" value="Valider">
        </div>
      </div>
    </form><br><br>


                                <h1>Liste de marque disponible</h1>
    <div class="">
      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>

        <?php $marque = twp_Brand::getAllBrand();?>

        <?php
        //$id = $_GET['id'];
        $marque1 = twp_Brand::deleteBrand('id');?>


        <?php foreach($marque as $brand): ?>
          <tr>
             <td><?= $brand->id; ?></td>
             <td><?= $brand->Name; ?></td>
             <td>
              <a href="www.tacotroc.com/wp-admin/admin.php?page=add_brand?id=<?= $brand->id; ?>" onclick="">delete</a>
              <form class="" Type="" action="index.html" method="post">
                  <input type="hidden" name="type" value="supp">
                        <input type="submit" class="bouton_envoie" name="btn-brand" value="supp">
                   <a href="id=<?= $brand->id; ?>">deletes</a>
              </form>

              <a href="#">edit</a>
             </td>
         </tr>
       <?php endforeach; ?>
      </table>


    </div>
  </body>
</html>
