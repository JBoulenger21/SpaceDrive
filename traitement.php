<?php
require('model.php');

if(isset($_POST['newTable'])){
  var_dump(newTableService());
  if(newTableService() && newTableNosServices()){
    echo "c'est ok";
  }else{
    echo "c'est pas ok";
  }
}
 ?>
