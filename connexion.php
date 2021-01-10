<?php include('header.php'); ?>

<div class="container m-3">
  <form id="idform" action="traitement.php" method="post">
    <input type="text" name="emailconn" id="nemailconn" placeholder="Votre email">
    <input type="password" name="passwordconn" id="passwordconn" placeholder="Mot de passe">
  <button type="submit" id="Connexion" name="Connexion">Connexion</button>
  </form>
</div>

<?php include('footer.php'); ?>
