<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Owner.php');

class proprietaireController {

  //action readAll : read all users
  public static function readProprietaire(){
    return twp_Owner::getAllProprietaire();
  }

  //action created : create an user in a database
  public static function addProprietaire(){

    twp_Owner::saveOwner($_POST['Last_Name'], $_POST['First_Name'], $_POST['Compagny'], $_POST['Siret'], $_POST['Compagny_Name'], $_POST['Phone'] );
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_owner");
    exit();

  }
}
