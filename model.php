<?php
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
return true;
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
  return true;

}
?>
