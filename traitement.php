<?php
require('model.php');

if(isset($_POST['newTable'])){
  var_dump(newTableService());
  if(newTable()){
    echo "c'est ok";
  }else{
    echo "c'est pas ok";
  }
}
 ?>
