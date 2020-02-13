<?php
class Conf
{
  static private $databases = array (
    // serveur of data base
    'hostname' => 'tacotrocrv230.mysql.db:3306',

    //name od data base
    'database' => 'tacotrocrv230',

    //login my sql
    'login' => 'tacotrocrv230',

    //password
    'password' => '28Turenne'

  );

  static public function getHostname(){
    return self::$databases['hostname'];
  }
  static public function getDatabase(){
    return self::$databases['database'];
  }
  static public function getLogin() {
    return self::$databases['login'];
  }

  static public function getPassword(){
    return self::$databases['password'];
  }

  static private $debug = true;

  static public function getDebug () {
    return self::$debug;
  }
}
