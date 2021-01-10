<?php
require('singleton.db.php');

function newContentCategorie($nom, $Description){

    $arrayValue = [
    ':nom'=>$nom,
    ':Description'=>$Description
    ];
    $request = SPDO::getInstance()->prepare("INSERT INTO `categorie`(`Nom`, `Description`) VALUES (:nom,:Description)");
    $request->execute($arrayValue);
    $request->closeCursor();
}

function InsertUser($nom, $email, $passworduser){


  $request = SPDO::getInstance()->prepare("SELECT `mail` FROM `Users`");
  $request->execute();

  $result = emailExist($email);

    if($result != 0){
      $request->closeCursor();
      return 'Votre email est déjà existant, veuillez vous connecter.';
    }else{
      echo "Ce que tu veux<br>";
    $passworduser = password_hash($passworduser, PASSWORD_DEFAULT);
    $arrayValue = [
      ':nom'=>$nom,
      ':email'=>$email,
      ':password'=>$passworduser
    ];
    $request = SPDO::getInstance()->prepare("INSERT INTO `Users`(`Nom`, `mail`, `password`) VALUES (:nom, :email, :password)");

    print_r($request->execute($arrayValue));
    $request->closeCursor();
  }
  return True;
}

function emailExist($email){
  $request = SPDO::getInstance()->prepare("SELECT `mail` FROM `Users` WHERE `mail`=:mail");
  $arrayValue = [
    ':mail'=>$email
    ];
  $request->execute($arrayValue);
  $nb_presence = count($request->fetchAll());
  $request->closeCursor();
  return $nb_presence;
}

function connectUser($email, $passworduser){
  $request = SPDO::getInstance()->prepare("SELECT `password` FROM `Users` WHERE `mail`=:mail");
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
  $request = SPDO::getInstance()->prepare("INSERT INTO `service`(`titre`, `description`, `plan`) VALUES (:titre,:description,:plan)");
  $arrayValue = [
    ':titre'=>$titre,
    ':description'=>$description,
    ':plan'=>$plan
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
}

function newContentNosServices($titre, $presentation, $image){
  $request = SPDO::getInstance()->prepare("INSERT INTO `nosservices`(`titre`, `Presentation`, `icone`) VALUES (:titre,:presentation,:image)");
  $arrayValue = [
    ':titre'=>$titre,
    ':presentation'=>$presentation,
    ':image'=>$image
    ];
    $request->execute($arrayValue);
    $request->closeCursor();
}

function newTableService(){
  $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `service` (
  `id_Service` INT UNSIGNED NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL ,
  `icone` VARCHAR(255), `description` VARCHAR(255) , `plan` VARCHAR(255), PRIMARY KEY (`id_Service`)) ENGINE = MyISAM;
  )");
  $request->execute();
  $request->closeCursor();
  return True;
}

function newTableNosServices(){
  $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `nosservices` (
    `id_Nosservices` INT UNSIGNED NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL ,
    `Presentation` VARCHAR(255) , `id_Service` INT, `icone` VARCHAR(255) , PRIMARY KEY (`id_Nosservices`)) ENGINE = MyISAM;
  )");

  $request->execute();
  $request->closeCursor();
  return True;
}

function newTableUser(){
  echo "New table user ok";
  $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `Users` (
    `id_Users` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(255) NOT NULL , `Prenom` VARCHAR(255) , `mail` VARCHAR(255) NOT NULL, `password` VARCHAR(255) , `role` VARCHAR(255), PRIMARY KEY (`id_USers`)) ENGINE = MyISAM;");
  print_r($request->execute());
  $request->closeCursor();
  echo "New table user ok";
  return True;
}

function newTableCategorie(){
  $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `categorie` (
    `id_Categorie` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(255) NOT NULL ,
    `Description` VARCHAR(255) , PRIMARY KEY (`id_Categorie`)) ENGINE = MyISAM;
  )");

  $request->execute();
  $request->closeCursor();
  return True;
}

function newTableProjet(){
  $request = SPDO::getInstance()->prepare("CREATE TABLE IF NOT EXISTS `projet` (
    `id_Projet` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(255) NOT NULL ,
    `Description` VARCHAR(255) , PRIMARY KEY (`id_Projet`)) ENGINE = MyISAM;
  )");

  $request->execute();
  $request->closeCursor();
  return True;
}

function ShowAllNosServices(){
  $request = SPDO::getInstance()->prepare("SELECT * FROM `nosservices` ORDER BY id_NosServices");

  $request->execute();
  $NosServices = $request->fetchAll();
  $request->closeCursor();
  return $NosServices;
}

?>
