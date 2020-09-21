<?php include('header.php'); ?>

<div class="container m-3">
  <form class="BackForm" action="traitement.php" method="post">
    <label>Nouveau titre</label>
    <input type="text" name="newTitreS" id="newTitreS" required>
    <label>Nouvelle description</label>
    <input type="text" name="newPresaS" id="newPresaS" required>
    <label>Compris dans le plan :</label>
    <select class="form-select" name="newPlan" id="newPlan">
      <option selected>Choisissez votre plan</option>
      <option value="1">Basic</option>
      <option value="2">Advanced</option>
      <option value="3">Profesional</option>
    </select>
    <button class="backbuttonform" type="submit" name="newTableService">Nouveau Service</button>
  </form>
  <br>

  <form class="BackForm" action="traitement.php" method="post">
    <label>Nouveau titre</label>
    <input type="text" name="newTitreNS" id="newTitreNS" required>
    <label>Nouvelle présentation</label>
    <input type="text" name="newPresaNS" id="newPresaNS" required>
    <button class="backbuttonform" type="submit" name="newTableNosServices">Nouveau Nos Services</button>
  </form>
  <br>

  <form class="BackForm" action="traitement.php" method="post">
    <label>Nouveau nom</label>
    <input type="text" name="newNomCategorie" id="newNomCategorie">
    <label>Nouvelle description</label>
    <input type="text" name="newDescCategorie" id="newDescCategorie">
    <button class="backbuttonform" type="submit" name="newTableCategorie">Nouvelle Catégorie</button>
  </form>
  <br>

  <form class="BackForm" action="traitement.php" method="post">
    <input type="text" name="newProjet" id="newProjet">
    <button class="backbuttonform" type="submit" name="newTableProjet">Nouveau projet</button>
  </form>
</div>

<?php include('footer.php'); ?>
