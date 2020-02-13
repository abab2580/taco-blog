<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_Brand
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
  public static function showBrand($id)
  {
    $query = 'SELECT * FROM twp_Brand';
    $rep =  Model::$pdo->prepare($query);
    $rep->execute();
    $twp_Brand = $rep->fetch($id);

}

  //function for select all brand in data base
  public static function getAllBrand()
  {
    $query = 'SELECT * FROM twp_Brand';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_OBJ);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  //function for registration the route of brand
  public static function saveBrand($n)
  {
    $message = '';
    $prepare=("INSERT INTO twp_Brand(id,Name) VALUES ('', :Name)");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->bindParam(':Name',$n);
    $bdd->execute();
    if ($bdd) {
      echo "ajouter avec succès!";
    }

    } 

  public static function deleteBrand($id){
     //$id = $_GET['id'];
     try {

       $prepare =('DELETE  FROM twp_Brand WHERE id=:id');
       $stmt = Model::$pdo->prepare($prepare);
       $stmt -> execute();

     } catch (\Exception $e) {
       echo "Erreur de connexion à la base";
     }

  }


  }
