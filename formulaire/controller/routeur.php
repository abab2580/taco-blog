<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/userController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/brandController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/clubController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/colorController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/cylinderController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/modelController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/museeController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/proprietaireController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/typeController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/versionController.php');
require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/controller/vintageController.php');

//gestion du routing
if (isset($_POST['type'])){
  switch ($_POST['type']){
    case 'inscription':
    userController::addUser();
    break;
    case 'connexion':
    userController::login();
    break;
    case 'deconnexion':
    userController::logout();
    break;
    case 'brand':
    brandController::addBrand();
    break;
    case 'club':
    clubController::addClub();
    break;
    case 'color':
    colorController::addColor();
    break;
    case 'cylindre':
    cylinderController::addCylinder();
    break;
    case 'model':
    modelController::addModel();
    break;
    case 'musee':
    museeController::addMusee();
    break;
    case 'proprietaire':
    proprietaireController::addProprietaire();
    break;
    case 'type':
    typeController::addType();
    break;
    case 'version':
    versionController::addVersion();
    break;
    case 'anciennete':
    vintageController::addVintage();
    break;
    case 'supp':
    brandController::deleteBrand();
    break;
    // case 'delete':
    // $_POST['id'];
    // clubController::delete($id);
    case 'test'
    clubController::test1();
    break;
    default:
    //dans le cas ou le type n'est pas un des type prévu => on bloque le user sur une page inutile
    echo'route invalide !';
  }

}
