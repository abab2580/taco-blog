<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Brand.php');

class brandController {

  //action readAll : read all users
  public static function readBrand(){
     twp_Brand::showBrand();
     header("Status: 301 Moved Permanently", false, 301);
     header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_brand");
     exit();
    //return twp_Brand::getAllBrand();
  }

  //action created : create an user in a database
  public static function addBrand(){

    twp_Brand::saveBrand($_POST['Name']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_brand");
    exit();

  }
   public static function deleteBrand(){
    twp_Brand::deleteBrand($id);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_brand");
    exit();
  }

  public static function updateBrand(){
   twp_Brand::updateBrand($_POST['Name']);
   // header("Status: 301 Moved Permanently", false, 301);
   // header("Location:https://www.tacotroc.com/wp-admin/admin.php?page=add_brand");
   // exit();
 }
}
