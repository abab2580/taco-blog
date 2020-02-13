<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Type.php');

class typeController {

  //action readAll : read all users
  public static function readType(){
    return twp_Type::getAllType();
  }

  //action created : create an user in a database
  public static function addType(){

    twp_Type::saveType($_POST['Name']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_type");
    exit();
  }
}
