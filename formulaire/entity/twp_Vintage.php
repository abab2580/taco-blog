<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_Vintage
{
  /**
  * conteneur id
  *
  * @var integer
  */
  private $id;

  /**
  * conteneur mk
  *
  * @var string
  */
  private $mk;


  /**
  * Get the value of conteneur id
  *
  * @return integer
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set the value of conteneur id
  *
  * @param integer id
  *
  * @return self
  */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
  * Get the value of conteneur mk
  *
  * @return string
  */
  public function getMk()
  {
    return $this->mk;
  }

  /**
  * Set the value of conteneur mk
  *
  * @param string mk
  *
  * @return self
  */
  public function setMk($mk)
  {
    $this->mk = $mk;

    return $this;
  }

  public function __construct ($m)
  {
    $this->mk=$m;
  }

  //dysplay method
  public function showVintage()
  {

  }

  //function for select all vintage in data base
  public static function getAllVintage()
  {
    $query = 'SELECT * FROM twp_Vintage';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_OBJ);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  public static function getAllVintageConcact()
  {
    $query = 'SELECT id,Mk as "Name" FROM twp_Vintage';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_OBJ);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  //function for registration the route of vintage
  public static function saveVintage($m)
  {
    $prepare=("INSERT INTO twp_Vintage(id,Mk) VALUES ('', :Mk)");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->bindParam(':Mk',$m);
    $bdd->execute();
    if(!$bdd){
      echo"not";
    }
  }
}
