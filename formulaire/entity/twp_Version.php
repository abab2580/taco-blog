<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_Version
{
  /**
  * conteneur id
  *
  * @var integer
  */
  private $id;

  /**
  * conteneur name
  *
  * @var string
  */
  private $name;


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
  * Get the value of conteneur name
  *
  * @return string
  */
  public function getName()
  {
    return $this->name;
  }

  /**
  * Set the value of conteneur name
  *
  * @param string name
  *
  * @return self
  */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  public function __construct ($n)
  {
    $this->name=$n;
  }

  //dysplay method
  public function showVersion()
  {
    $query = 'SELECT * FROM twp_Version';
    $rep =  Model::$pdo->prepare($query);
    $rep->execute();
    $twp_Version = $rep->fetchAll();
  }

  //function for select all version in data base
  public static function getAllVersion()
  {
    $query = 'SELECT * FROM twp_Version';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_OBJ);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  //function for registration the route of version
  public static function saveVersion($n)
  {
    $prepare=("INSERT INTO twp_Version(id,Name) VALUES ('', :Name)");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->bindParam(':Name',$n);
    $bdd->execute();
    if(!$bdd){
      echo"not";
    }
  }
}
