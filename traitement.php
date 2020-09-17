<?php
require('model.php');

if(isset($_POST['newTableService'])){
  if(newTableService()){
    echo "c'est ok Service";
  }else{
    echo "c'est pas ok Service";
  }
}
if(isset($_POST['newTableNosService'])){
  if(newTableNosService()){
    echo "c'est ok Nos Services";
  }else{
    echo "c'est pas ok Nos Services";
  }
}
if(isset($_POST['newTableUser'])){
  if(newTableUser()){
    echo "c'est ok Users";
    header ('location:connexion.php');
  }else{
    echo "c'est pas ok Users";
  }
}
if(isset($_POST['newTableCategorie'])){
  if(newTableCategorie()){
    echo "c'est ok Categorie";
  }else{
    echo "c'est pas ok Categorie";
  }
}
if(isset($_POST['newTableProjet'])){
  if(newTableProjet()){
    echo "c'est ok Projet";
  }else{
    echo "c'est pas ok Projet";
  }
}

if(isset($_POST['emailconn']) && isset($_POST['passwordconn'])){
  $email = $_POST['emailconn'];
  $password = $_POST['passwordconn'];
  $result = connectUser($email, $password);
  if($result == 1){
    echo 'connexion ok';
    var_dump($result);
    // header('location:backoffice.php');

  }else{
    echo 'connexion pas ok';
    var_dump($result);
    // header('location:connexion.php');
  }
}

if(isset($_POST['newUserName']) && isset($_POST['newUserMail']) && isset($_POST['newUserPsw']) && isset($_POST['newUserPswVer'])){
  $nom = $_POST['newUserName'];
  $email = $_POST['newUserMail'];
  $password = $_POST['newUserPsw'];
  $passwordVerif = $_POST['newUserPswVer'];
  $email = check($email);
  $nom = check($nom);
  $checkEmail = checkEmail($email);
  if ($checkEmail == 1) {
    if(InsertUser($nom, $email, $password) == True){
      echo "Bravo, nom et email renseignés et inserés avec succès";
    }else{
    echo "Pas réussi à entrer dans la base le username et usermail";
    }
  }else{
    echo "Veuillez insérer un email valide.";
  }
}


function checkEmail($email){
  if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email)<50) {
    return 1;
  }else{
    return 'Email non valide';
  }
}

 ?>
