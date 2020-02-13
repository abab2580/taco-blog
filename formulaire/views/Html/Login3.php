<?php

if(isset($_SESSION['Message']))
{
 echo"<div class='alert'>

  ". $_SESSION['Message'] .";
   ". unset($_SESSION['Message']) .";

 </div> ;"

}
//$_SESSION['Message'] = 'Votre pseudo ou mot de passe est incorrect';
//echo $_SESSION['Message'];
?>
