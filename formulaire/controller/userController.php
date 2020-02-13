<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_User.php');

class userController {

  //action readAll : read all users
  public static function readAll(){
    return twp_User::getAllUser();
  }

  //action created : create an user in a database
  public static function addUser(){
    twp_User::saveUser($_POST['Last_Name'], $_POST['First_Name'], $_POST['Pseudo'], $_POST['Mail'], $_POST['Phone'], $_POST['Password'], $_POST['Token'], $_POST['Date_Creation'], $_POST['Internet_Protocol']);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com/se-connecter");
    exit();
  }

  public static function login(){
    twp_User::login_session($_POST['Pseudo'], $_POST['Password']);
    // header("Status: 301 Moved Permanently", false, 301);
    // header("Location:https://www.tacotroc.com");
  }

  public static function logout(){
    twp_User::logout_session();
  }


}
