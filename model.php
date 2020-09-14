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
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL ,
  `icone` VARCHAR(255) NOT NULL , `description` VARCHAR(255) , `plan` INT, PRIMARY KEY (`id`)) ENGINE = MyISAM;
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
  $query = "CREATE TABLE IF NOT EXISTS `NosService` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL ,
    `Presentation` VARCHAR(255) , `Id_Service` INT, PRIMARY KEY (`id`)) ENGINE = MyISAM;
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
    `Prenom` VARCHAR(255) , `mail` VARCHAR(255) NOT NULL, PRIMARY KEY (`id_USers`)) ENGINE = MyISAM;
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

function InsertUser($nom, $email){
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
  $query = "INSERT INTO `users`(`Nom`, `mail`) VALUES (:nom, :email)";
  $arrayValue = [
    ':nom'=>$nom,
    ':email'=>$email
  ];
  $request = $dB->prepare($query);
  $request->execute($arrayValue);
  $request->closeCursor();

  return True;
}

function check($input){
  trim($input);
  stripslashes($input);
  htmlspecialchars($input);
  return $input;
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
