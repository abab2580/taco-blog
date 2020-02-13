<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Club.php');

class clubController {

  //action readAll : read all users
  public static function readClub(){
    return twp_Club::getAllClub();
  }

  //action created : create an user in a database
  public static function addClub(){

    twp_Club::saveClub($_POST['Name']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_club");
    exit();
  }

public static function test1(){
  twp_Club::test();
}
  //action delete : supprime une voiture
  // public static function delete($id){
  //     return ModeleVoiture::deleteCLub($id);
  //
  // }
}
