<?php include('header.php'); ?>

  <div class="container">

    <form class="" action="traitement.php" method="post">
      <input type="text" name="newTitreS" id="newTitreS">
      <button type="submit" name="newTableService">Nouveau Service</button>
    </form>
    <br>
    <form class="" action="traitement.php" method="post">
      <input type="text" name="newTitreNS" id="newTitreNS">
      <button type="submit" name="newTableNosService">Nouveau Nos Service</button>
    </form>
    <br>
    <form class="" action="traitement.php" method="post">
      <input type="text" name="newUserName" id="newUserName" placeholder="Nom">
      <input type="text" name="newUserMail" id="newUserMail" placeholder="Email">
    <button type="submit" name="newTableUser">Nouveau Utilisateur</button>
    </form>
    <br>
    <form class="" action="traitement.php" method="post">
      <input type="text" name="newCategorie" id="newCategorie">
      <button type="submit" name="newTableCategorie">Nouvelle Catégorie</button>
    </form>
    <br>
      <form class="" action="traitement.php" method="post">
      <input type="text" name="newProjet" id="newProjet">
      <button type="submit" name="newTableProjet">Nouveau projet</button>
    </form>
    
  </div>
<?php include('footer.php'); ?>
