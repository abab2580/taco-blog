<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Version.php');

class versionController {

  //action readAll : read all users
  public static function readVersion(){
    return twp_Version::getAllVersion();
  }

  //action created : create an user in a database
  public static function addVersion(){

    twp_Version::saveVersion($_POST['Name']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_version");
    exit();


  }
}
