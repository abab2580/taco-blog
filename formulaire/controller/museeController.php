<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Museum.php');

class museeController {

  //action readAll : read all users
  public static function readMusee(){
    return twp_Museum::getAllMusee();
  }

  //action created : create an user in a database
  public static function addMusee(){
    twp_Museum::saveMuseum($_POST['Name']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_museum");
    exit();


  }
}
