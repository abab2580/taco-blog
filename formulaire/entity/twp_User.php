<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/model/model.php');

class twp_User
{
  /**
  * conteneur id
  *
  * @var integer
  */
  private $id;

  /**
  * conteneur last_name
  *
  * @var string
  */
  private $last_Name;

  /**
  * conteneur first_name
  *
  * @var string
  */
  private $first_Name;

  /**
  * conteneur pseudo
  *
  * @var string
  */
  private $pseudo;

  /**
  * conteneur mail
  *
  * @var string
  */
  private $mail;

  /**
  * conteneur phone
  *
  * @var integer
  */
  private $phone;

  /**
  * conteneur password
  *
  * @var string
  */
  private $password;

  /**
  * conteneur token
  *
  * @var string
  */
  protected $token;

  /**
  * conteneur date creation
  *
  * @var string
  */
  private $date;

  /**
  * conteneur ip
  *
  * @var string
  */
  private $ip;

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
  * Get the value of conteneur last_name
  *
  * @return string
  */
  public function getLastName()
  {
    return $this->last_Name;
  }

  /**
  * Set the value of conteneur last_name
  *
  * @param string last_Name
  *
  * @return self
  */
  public function setLastName($last_Name)
  {
    $this->last_Name = $last_Name;

    return $this;
  }

  /**
  * Get the value of conteneur first_name
  *
  * @return string
  */
  public function getFirstName()
  {
    return $this->first_Name;
  }

  /**
  * Set the value of conteneur first_name
  *
  * @param string first_Name
  *
  * @return self
  */
  public function setFirstName($first_Name)
  {
    $this->first_Name = $first_Name;

    return $this;
  }

  /**
  * Get the value of conteneur pseudo
  *
  * @return string
  */
  public function getPseudo()
  {
    return $this->pseudo;
  }

  /**
  * Set the value of conteneur pseudo
  *
  * @param string pseudo
  *
  * @return self
  */
  public function setPseudo($pseudo)
  {
    $this->pseudo = $pseudo;

    return $this;
  }

  /**
  * Get the value of conteneur mail
  *
  * @return string
  */
  public function getMail()
  {
    return $this->mail;
  }

  /**
  * Set the value of conteneur mail
  *
  * @param string mail
  *
  * @return self
  */
  public function setMail($mail)
  {
    $this->mail = $mail;

    return $this;
  }

  /**
  * Get the value of conteneur phone
  *
  * @return integer
  */
  public function getPhone()
  {
    return $this->phone;
  }

  /**
  * Set the value of conteneur phone
  *
  * @param integer phone
  *
  * @return self
  */
  public function setPhone($phone)
  {
    $this->phone = $phone;

    return $this;
  }

  /**
  * Get the value of conteneur password
  *
  * @return string
  */
  public function getPassword()
  {
    return $this->password;
  }

  /**
  * Set the value of conteneur password
  *
  * @param string password
  *
  * @return self
  */
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
  * Get the value of conteneur token
  *
  * @return string
  */
  public function getToken()
  {
    return $this->token;
  }

  /**
  * Set the value of conteneur token
  *
  * @param string token
  *
  * @return self
  */
  public function setToken($token)
  {
    $this->token = $token;

    return $this;
  }

  /**
  * Get the value of Date
  *
  * @return mixed
  */
  public function getDate()
  {
    return $this->date;
  }

  /**
  * Set the value of Date
  *
  * @param mixed date
  *
  * @return self
  */
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

  /**
  * Get the value of conteneur ip
  *
  * @return string
  */
  public function getIp()
  {
    return $this->ip;
  }

  /**
  * Set the value of conteneur ip
  *
  * @param string ip
  *
  * @return self
  */
  public function setIp($ip)
  {
    $this->ip = $ip;

    return $this;
  }


  public function __construct ($ln,$fn,$ps,$m,$ph,$p,$t,$dc,$i)
  {
    $this->last_Name = $ln;
    $this->first_Name = $fn;
    $this->pseudo = $ps;
    $this->mail=$m;
    $this->phone=$ph;
    $this->password=$p;
    $this->token=$t;
    $this->date=$dc;
    $this->ip=$i;
  }

  //dysplay method
  public function showUser()
  {
    echo $this->getId(). "</br>";
    echo $this->getLastName(). "</br>";
    echo $this->getFirstName(). "</br>";
    echo $this->getPseudo(). "</br>";
    echo $this->getMail(). "</br>";
    echo $this->getPhone(). "</br>";
    echo $this->getPassword(). "</br>";
    echo $this->getToken(). "</br>";
    echo $this->getDate(). "</br>";
    echo $this->getIp(). "</br>";

  }

  //function for select all user in data base
  public static function getAllUser()
  {
    $query = 'SELECT * FROM twp_User';
    $rep = Model::$pdo->query($query);
    $rep->setFetchMode (PDO::FETCH_ASSOC);
    $tab_obj=$rep->fetchAll();
    return $tab_obj;
  }

  public static function test_encore(){
    $query = ("SELECT Pseudo FROM twp_User WHERE Pseudo= '$pseudonyme'");
    $bdd= Model::$pdo->prepare($query);
    $bdd->execute(array(
      'Pseudo'=>$pseudonyme
    ));
    $resultat=$bdd->fetch();
    return $resultat;
  }
  //function for registration the route of user
  public static function saveUser($ln,$fn,$ps,$m,$ph,$p,$t,$dc,$i)
  {
    // if(isset($_POST['Pseudo']))
    // {
    //   $pseudonyme=$_POST['Pseudo'];
    //
    //   $query = ('SELECT Pseudo FROM twp_User WHERE Pseudo= :Pseudo');
    //   $bdd= Model::$pdo->prepare($query);
    //   $bdd->execute(array(
    //     'Pseudo'=>$pseudo
    //   ));
    //   $resultat=$bdd->fetch();
    //   if($resultat['Pseudo'] )
    //}

    if(isset($_POST['Pseudo']))
    {
      $pseudonyme=$_POST['Pseudo'];
      $resultat_autre = test_encore();
      if(mysqli_num_rows($resultat_autre)>0)
      {
        echo"le pseudo est déjà pris";
      }
      else{
        $p= password_hash($_POST['Password'], PASSWORD_DEFAULT);
        $dc=date('Y-m-d');
        $i=$_SERVER['REMOTE_ADDR'];
        $prepare=("INSERT INTO twp_User(id,Last_Name,First_Name,Pseudo,Mail,Phone,Password,Token,Date_Creation,Internet_Protocol) VALUES ('',:Last_Name,:First_Name,:Pseudo,:Mail,:Phone,:Password,:Token,:Date_Creation,:Internet_Protocol)");
        $bdd= Model::$pdo->prepare($prepare);
        $bdd->bindParam(':Last_Name',$ln);
        $bdd->bindParam(':First_Name',$fn);
        $bdd->bindParam(':Pseudo',$ps);
        $bdd->bindParam(':Mail',$m);
        $bdd->bindParam(':Phone',$ph);
        $bdd->bindParam(':Password',$p);
        $bdd->bindParam(':Token',$t);
        $bdd->bindParam(':Date_Creation',$dc);
        $bdd->bindParam(':Internet_Protocol',$i);
        $bdd->execute();
      }
    }
  }



  //function for authentification / session and cookie
  public static function login_session($pseudo, $password)
  {

    $prepare=("SELECT id, Password FROM twp_User WHERE Pseudo= :Pseudo");
    $bdd= Model::$pdo->prepare($prepare);
    $bdd->execute(array(
      'Pseudo'=>$pseudo
    ));
    $resultat=$bdd->fetch();

    $passwordCorrect = password_verify($password, $resultat['Password']);

    if(isset($pseudo) && isset($password))
    {
      if($passwordCorrect)
      {
        session_start();
        $_SESSION['Pseudo'] = $_POST['Pseudo'];
        $_SESSION['Password'] = $_POST['Password'];
        $_SESSION['Message'] = 'Votre pseudo ou mot de passe est incorrect';
        echo 'Vous êtes connecté !';

        if(isset($_POST['remember']))
        {
          $pseudonyme = $_POST['Pseudo'];
          $pass = $_POST['Password'];
          $deconnexion=0;
          setcookie('auth_pseudo', sha1($pseudonyme), time() + 3600 * 24 * 31, '/', "tacotroc.com",true, true);
          setcookie('auth_mdp', sha1($pass), time() + 3600 * 24 * 31, '/', "tacotroc.com",true, true);
          setcookie('auth_deco', $deconnexion, time() + 3600 * 24 * 31, '/', "tacotroc.com",true, true);
        }
      }
      else{
        echo 'Votre pseudo ou mot de passe est incorrect';
      }
    }
  }

  //the function for destroy a session variable and session
  public static function logout_session()
  {
    if(isset($_COOKIE['auth_deco']))
    {
      $deconnexion = 1;
      setcookie('auth_deco', $deconnexion, time() + 3600 * 24 * 31, '/', "tacotroc.com",true, true);
    }
    session_start();

    //destruction of session variables
    session_unset ();

    //destruction of the session
    session_destroy ();

    //redirection to the home page
    header("Status: 301 Moved Permanently", false, 301);
    header("Location:https://www.tacotroc.com");
    exit();

  }
}
