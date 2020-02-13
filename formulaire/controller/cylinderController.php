<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Cylinder.php');

class cylinderController {

  //action readAll : read all users
  public static function readCylinder(){
    return twp_Cylinder::getAllCylinder();
  }

  //action created : create an user in a database
  public static function addCylinder(){
    twp_Cylinder::saveCylinder($_POST['Cylinder']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_color");
    exit();

  }
}
