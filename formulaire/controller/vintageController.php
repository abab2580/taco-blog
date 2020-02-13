<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Vintage.php');

class vintageController {

  //action readAll : read all users
  public static function readVintage(){
    return twp_Vintage::getAllVintage();
  }

  //action created : create an user in a database
  public static function addVintage(){

    twp_Vintage::saveVintage($_POST['Mk']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_vintage");
    exit();

  }
}
