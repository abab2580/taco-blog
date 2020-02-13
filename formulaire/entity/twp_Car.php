<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_Car
{
  /**
  * conteneur id
  *
  * @var integer
  */
  private $id;

  /**
  * conteneur immatriculation
  *
  * @var string
  */
  private $immatriculation;

  /**
  * conteneur comment
  *
  * @var string
  */
  private $comment;

  /**
  * conteneur circulation_year
  *
  * @var integer
  */
  private $circulation_year;

  /**
  * conteneur color_1
  *
  * @var string
  */
  private $detail_color_1;

  /**
  * conteneur color_2
  *
  * @var string
  */
  private $detail_color_2;

  /**
  * conteneur restoration
  *
  * @var bool
  */
  private $restoration;

  /**
  * conteneur last_parking
  *
  * @var string
  */
  private $last_parking;

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
  * Get the value of conteneur immatriculation
  *
  * @return string
  */
  public function getImmatriculation()
  {
    return $this->immatriculation;
  }

  /**
  * Set the value of conteneur immatriculation
  *
  * @param string immatriculation
  *
  * @return self
  */
  public function setImmatriculation($immatriculation)
  {
    $this->immatriculation = $immatriculation;

    return $this;
  }

  /**
  * Get the value of conteneur comment
  *
  * @return string
  */
  public function getComment()
  {
    return $this->comment;
  }

  /**
  * Set the value of conteneur comment
  *
  * @param string comment
  *
  * @return self
  */
  public function setComment($comment)
  {
    $this->comment = $comment;

    return $this;
  }

  /**
  * Get the value of conteneur circulation_year
  *
  * @return integer
  */
  public function getCirculationYear()
  {
    return $this->circulation_year;
  }

  /**
  * Set the value of conteneur circulation_year
  *
  * @param integer circulation_year
  *
  * @return self
  */
  public function setCirculationYear($circulation_year)
  {
    $this->circulation_year = $circulation_year;

    return $this;
  }

  /**
  * Get the value of conteneur color_1
  *
  * @return string
  */
  public function getDetailColor1()
  {
    return $this->detail_color_1;
  }

  /**
  * Set the value of conteneur color_1
  *
  * @param string detail_color_1
  *
  * @return self
  */
  public function setDetailColor1($detail_color_1)
  {
    $this->detail_color_1 = $detail_color_1;

    return $this;
  }

  /**
  * Get the value of conteneur color_2
  *
  * @return string
  */
  public function getDetailColor2()
  {
    return $this->detail_color_2;
  }

  /**
  * Set the value of conteneur color_2
  *
  * @param string detail_color_2
  *
  * @return self
  */
  public function setDetailColor2($detail_color_2)
  {
    $this->detail_color_2 = $detail_color_2;

    return $this;
  }


  /**
  * Get the value of conteneur last_parking
  *
  * @return string
  */
  public function getLastParking()
  {
    return $this->last_parking;
  }

  /**
  * Set the value of conteneur last_parking
  *
  * @param string last_parking
  *
  * @return self
  */
  public function setLastParking($last_parking)
  {
    $this->last_parking = $last_parking;

    return $this;
  }


  /**
  * Get the value of conteneur restoration
  *
  * @return bool
  */
  public function getRestoration()
  {
    return $this->restoration;
  }

  /**
  * Set the value of conteneur restoration
  *
  * @param bool restoration
  *
  * @return self
  */
  public function setRestoration($restoration)
  {
    $this->restoration = $restoration;

    return $this;
  }

  public function __construct ($i,$c,$cy,$dc1,$dc2,$r,$lp)
  {
    $this->immatriculation=$i;
    $this->comment= $c;
    $this->circulation_year= $cy;
    $this->detail_color_1=$dc1;
    $this->detail_color_2= $dc2;
    $this->restoration= $r;
    $this->last_parking= $lp;
    $this->counryName = $this->getCountryName();
  }

  //dysplay method
  public function showCar()
  {
    echo $this->getId(). "</br>";
    echo $this->getImmatriculation(). "</br>";
    echo $this->getComment(). "</br>";
    echo $this->getCirculationYear(). "</br>";
    echo $this->getDetailColor1(). "</br>";
    echo $this->getDetailColor2(). "</br>";
    echo $this->getLastParking(). "</br>";
    echo $this->getRestoration();
  }

  //function for select all car in data base
  public static function getAllCar()
  {
    $query = 'SELECT * FROM twp_Car';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_ASSOC);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }
  //function for registration the route of car
  public static function saveCar($i,$c,$cy,$dc1,$dc2,$r,$lp)
  {
    $prepare=("INSERT INTO twp_Car(id,Immatriculation,Comment,Circulation_Year,Details_Color_1,Details_Color_2,Restoration,Last_parking) VALUES (null,:Immatriculation,:Comment,:Circulation_Year,:Details_Color_1,:Details_Color_2,:Restoration,:Last_parking)");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->bindParam(':Immatriculation',$i);
    $bdd->bindParam(':Comment',$c);
    $bdd->bindParam(':Circulation_Year',$cy);
    $bdd->bindParam(':Details_Color_1',$dc1);
    $bdd->bindParam(':Details_Color_2',$dc2);
    $bdd->bindParam(':Restoration',$r);
    $bdd->bindParam(':Last_parking',$lp);
    $bdd->execute();
    if(!$bdd){
      echo"not";
    }

    // public getCountryName(){
    //   $prepare = "SELECT name from twp_Country left JOIN twp_Car on twp_Country.id = twp_Car.id_twp_Country where `id_twp_Country` = :country";
    //   $bdd= Model::$pdo->prepare($prepare);
    //   $bdd->bindParam(':country',$this->getCountry());
    //   $bdd->execute();
    //   if(!$bdd){
    //     echo"not";
    //   }
    //   $result = $sth->fetch(PDO::FETCH_ASSOC);
    //   // print_r($result);
    //   echo $result['name'];
    // }
  }
}
