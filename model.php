<?php
// class connexionBDD {
//   private $_instance = null;
//   private static $ConnexionBaseDeDonnees = '';
//
//   public static function getConnexion($ConnexionBaseDeDonnees){
//     if(isnull(self::$_instance)){
//       self::$_instance = new connexionBDD($ConnexionBaseDeDonnees);
//     }
//     return self::$_instance;
//   }
// }

$servername = "localhost";
$dbname = "spacedrivebdd";
$username = "root";
$password = "";

try{
  $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die('erreur :'.$e->getMessage());
}

function InsertUser($nom, $email, $passworduser){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "SELECT `mail` FROM `users`";
  $request = $dB->prepare($query);
  $request->execute();

  $result = emailExist($email);

    if($result != 0){
      return 'Votre email est déjà existant, veuillez vous connecter.';
      $request->closeCursor();
    }else{
    $query = "INSERT INTO `users`(`Nom`, `mail`, `password`) VALUES (:nom, :email, :password)";
    $passworduser = password_hash($passworduser, PASSWORD_DEFAULT);
    $arrayValue = [
      ':nom'=>$nom,
      ':email'=>$email,
      ':password'=>$passworduser
    ];
    $request = $dB->prepare($query);
    $request->execute($arrayValue);
    $request->closeCursor();
  }
  return True;
}

function emailExist($email){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "SELECT `mail` FROM `users` WHERE `mail`=:mail";
  $request = $dB->prepare($query);
  $arrayValue = [
    ':mail'=>$email
    ];
  $request->execute($arrayValue);
  $nb_presence = count($request->fetchAll());
  $request->closeCursor();
  return $nb_presence;
}

function connectUser($email, $passworduser){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }

  $query = "SELECT `password` FROM `users` WHERE `mail`=:mail";
  $request = $dB->prepare($query);
  $arrayValue = [
    ':mail'=>$email
    ];
    if($request->execute($arrayValue)){
      $donnees = $request->fetch();
      if(password_verify($passworduser, $donnees['password'])){
        return 1;
      }else{
        return 2;
      }
      $request->closeCursor();
    }
 }

function check($input){
  trim($input);
  stripslashes($input);
  htmlspecialchars($input);
  return $input;
}

function newTitreService($titre, $description, $plan){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }

  $query = "INSERT INTO `service`(`titre`, `description`, `plan`) VALUES (:titre,:description,:plan)";
  $request = $dB->prepare($query);
  $arrayValue = [
    ':titre'=>$titre,
    ':description'=>$description,
    ':plan'=>$plan
    ];
    $request = $dB->prepare($query);
    $request->execute($arrayValue);
    $request->closeCursor();
}

function newContentNosServices($titre, $presentation){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }

  $query = "INSERT INTO `nosservices`(`titre`, `Presentation`) VALUES (:titre,:presentation)";
  $request = $dB->prepare($query);
  $arrayValue = [
    ':titre'=>$titre,
    ':presentation'=>$presentation
    ];
    $request = $dB->prepare($query);
    $request->execute($arrayValue);
    $request->closeCursor();
}

function newTableService(){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "CREATE TABLE IF NOT EXISTS `Service` (
  `id_Service` INT UNSIGNED NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL ,
  `icone` VARCHAR(255), `description` VARCHAR(255) , `plan` VARCHAR(255), PRIMARY KEY (`id_Service`)) ENGINE = MyISAM;
  )";

  $request = $dB->prepare($query);
  $request->execute();
  $request->closeCursor();
  return True;
}

function newTableNosServices(){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "CREATE TABLE IF NOT EXISTS `NosServices` (
    `id_Nosservices` INT UNSIGNED NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL ,
    `Presentation` VARCHAR(255) , `id_Service` INT, PRIMARY KEY (`id_Nosservices`)) ENGINE = MyISAM;
  )";

  $request = $dB->prepare($query);
  $request->execute();
  $request->closeCursor();
  return True;
}

function newTableUser(){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "CREATE TABLE IF NOT EXISTS `Users` (
    `id_Users` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(255) NOT NULL ,
    `Prenom` VARCHAR(255) , `mail` VARCHAR(255) NOT NULL, `password` VARCHAR(255) , `role` VARCHAR(255), PRIMARY KEY (`id_USers`)) ENGINE = MyISAM;
  )";

  $request = $dB->prepare($query);
  $request->execute();
  $request->closeCursor();
  return True;
}

function newTableCategorie(){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "CREATE TABLE IF NOT EXISTS `Categorie` (
    `id_Categorie` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(255) NOT NULL ,
    `Description` VARCHAR(255) , PRIMARY KEY (`id_Categorie`)) ENGINE = MyISAM;
  )";

  $request = $dB->prepare($query);
  $request->execute();
  $request->closeCursor();
  return True;
}

function newTableProjet(){
  $servername = "localhost";
  $dbname = "spacedrivebdd";
  $username = "root";
  $password = "";

  try{
    $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
  }
  $query = "CREATE TABLE IF NOT EXISTS `Projet` (
    `id_Projet` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(255) NOT NULL ,
    `Description` VARCHAR(255) , PRIMARY KEY (`id_Projet`)) ENGINE = MyISAM;
  )";

  $request = $dB->prepare($query);
  $request->execute();
  $request->closeCursor();
  return True;
}

// function newTable(){
//   $servername = "localhost";
//   $dbname = "spacedrivebdd";
//   $username = "root";
//   $password = "";
//
//   try{
//     $dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//     $dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   } catch(PDOException $e) {
//     die('erreur :'.$e->getMessage());
//   }
//   newTableService();
//   newTableNosServices();
//   return true;
// }

?>
