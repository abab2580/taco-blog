<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Model.php');

class modelController {

  //action readAll : read all users
  public static function readModel(){
    return twp_Model::getAllModel();
  }

  //action created : create an user in a database
  public static function addModel(){
    twp_Model::saveModel($_POST['Name']);
    header("Status: 301 Moved Permanently", false, 301);
    exit();

  }
}
