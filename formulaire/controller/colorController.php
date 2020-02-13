<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Color.php');

class colorController {

  //action readAll : read all users
  public static function readColor(){
    return twp_Color::getAllColor();
  }

  //action created : create an user in a database
  public static function addColor(){

    twp_Color::saveColor($_POST['Name']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_color");
    exit();

  }
}
