<?php include('header.php'); ?>
    <div class="container m-3">
      <form id="idform" action="traitement.php" method="post">
        <label for="newUserName">Votre nom d'utilisateur :</label><br>
        <input type="text" name="newUserName" id="newUserName" placeholder="Nom">
        <br>
        <label for="newUserMail">Votre email :</label><br>
        <input type="text" name="newUserMail" id="newUserMail" placeholder="Email">
        <br>
        <label for="newUserPsw">Votre mot de passe :</label><br>
        <input type="password" name="newUserPsw" id="newUserPsw" placeholder="Mot de passe">
        <br>
        <label for="newUserPswVer">Veuillez retaper votre mot de passe :</label><br>
        <input type="password" name="newUserPswVer" id="newUserPswVer" placeholder="Mot de passe vérification">
        <br>
      <button type="submit" id="newUser" name="newTableUser" disabled>Nouveau Utilisateur</button>
      </form>
    </div>
<?php include('footer.php'); ?>
