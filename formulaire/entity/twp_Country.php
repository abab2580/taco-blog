<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_Country
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

  // dysplay method
  public function showCountry()
  {
    echo $this->getId(). "</br>";
    echo $this->getName();
  }

  //function for select all country in data base
  public static function getAllCountry()
  {
    $query = 'SELECT * FROM twp_Country';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_ASSOC);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  //function for registration the route of country
  public static function saveCountry($n)
  {
    $prepare=("INSERT INTO twp_Country(id,Name) VALUES ('', :Name)");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->bindParam(':Name',$n);
    $bdd->execute();
    if(!$bdd){
      echo"not";
    }
  }
}
//
// public static function addAndUpdate(){
//   if (isset($_GET['id_to_update'])) {
//     $stmt = Model::$pdo->prepare("SELECT * FROM twp_Country WHERE id = :id");
//     $resultat = $stmt->execute([':id' => $_GET['id_to_update'] ]);
//     $twp_Country = $stmt->fetch();
//   }
//   else{
//     $twp_Country['Name'] = "";
//   }
//   if (isset($_POST['btn_create_contry'])) {
//      $id = $_POST['id'];
//      $Name = $_POST['Name'];
//      $errors = [];
//      if ($Name == null || $Name == "") {
//          $errors[] = "Veuillez saisir un nom de produit valide";
//      }
//      if (count($errors) > 0) {
//           echo "Merci de corriger ces erreurs :<br>";
//           foreach ($errors as $error) {
//               echo $error."<br>";
//           }
//       }
//
//     else {
//           $stmt =  Model::$pdo->prepare("INSERT INTO twp_Country (Name) VALUES (:Name));
//           $resultat = $stmt->execute([':Name' => $Name]);
//         }
//
//         }
