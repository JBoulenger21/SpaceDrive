<?php include('header.php'); ?>
<div class="container m-3">
  <form id="idform" action="traitement.php" method="post">
    <input type="text" name="newUserName" id="newUserName" placeholder="Nom">
    <input type="text" name="newUserMail" id="newUserMail" placeholder="Email">
    <input type="password" name="newUserPsw" id="newUserPsw" placeholder="Mot de passe">
    <input type="password" name="newUserPswVer" id="newUserPswVer" placeholder="Mot de passe vérification">
  <button type="submit" id="newUser" name="newTableUser" disabled>Nouveau Utilisateur</button>
  </form>
</div>
<?php include('footer.php'); ?>
