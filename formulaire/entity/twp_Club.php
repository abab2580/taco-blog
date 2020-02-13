<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_Club
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
  public function showClub()
  {
    $query = 'SELECT * FROM twp_Club';
    $rep =  Model::$pdo->prepare($query);
    $rep->execute();
    $twp_Club = $rep->fetchAll();
  }

  //function for select all club in data base
  public static function getAllClub()
  {
    $query = 'SELECT * FROM twp_Club';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_OBJ);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  //function for registration the route of club
  public static function saveClub($n)
  {
    $prepare=("INSERT INTO twp_Club(id,Name) VALUES ('', :Name)");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->bindParam(':Name',$n);
    $bdd->execute();
    if(!$bdd){
      echo"not";
    }
  }

public static function test()
{
  echo"hello";
}
  // public static function deleteCLub($id)
  // {
  //   $prepare=("DELETE FROM twp_club WHERE id=:id");
  //   $rep=Model::$pdo->prepare($prepare);
  //   $rep->bindParam(':id',$id, PDO::PARAM_STR_CHAR);
  //   $rep->execute($id);
  //   if($rep)
  //   {
  //     echo "La voiture à été supprimé<br>";
  //   }else{
  //     echo "la voiture n'a pas été supprimé <br>";
  //   }
  // }
}
