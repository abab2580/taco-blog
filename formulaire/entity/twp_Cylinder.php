<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_Cylinder
{
  /**
  * conteneur id
  *
  * @var integer
  */
  private $id;

  /**
  * conteneur cylinder
  *
  * @var string
  */
  private $cylinder;


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
  * Get the value of conteneur cylinder
  *
  * @return string
  */
  public function getCylinder()
  {
    return $this->cylinder;
  }

  /**
  * Set the value of conteneur cylinder
  *
  * @param string cylinder
  *
  * @return self
  */
  public function setCylinder($cylinder)
  {
    $this->cylinder = $cylinder;

    return $this;
  }

  public function __construct ($c)
  {
    $this->cylinder=$c;
  }

  //dysplay method
  public function showCylinder()
  {
    $query = 'SELECT * FROM twp_Cylinder';
    $rep =  Model::$pdo->prepare($query);
    $rep->execute();
    $twp_Cylinder = $rep->fetchAll();
  }

  //function for select all cylinder in data base
  public static function getAllCylinder()
  {
    $query = 'SELECT * FROM twp_Cylinder';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_OBJ);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  //function for registration the route of cylinder
  public static function saveCylinder($c)
  {
    $prepare=("INSERT INTO twp_Cylinder(id,Cylinder) VALUES ('', :Cylinder)");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->bindParam(':Cylinder',$c);
    $bdd->execute();
    if(!$bdd){
      echo"not";
    }
  }
}
