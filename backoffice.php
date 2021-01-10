<?php include('header.php'); ?>

<div class="container">
  <form action="traitement.php" method="post">
    <button type="button" class="btn btn-dark m-3" id="btnformnewservice">Nouveau "Service"</button><br>
    <button type="button" class="btn btn-dark m-3" id="btnformnewnosservices">Nouveau "Nos Services"</button><br>
    <button type="button" class="btn btn-dark m-3" id="btnformnewcategorie">Nouvelle "Catégorie"</button><br>
    <button type="button" class="btn btn-dark m-3" id="btnformnewprojet">Nouveau "Projet"</button>
    <br>
    <button type="submit" class="btn btn-dark m-3" name="ShowAllNS" id="btnformviewnosservices">Voir les "Nos services"</button>
    <br>
  </form>
</div>

<div class="container m-3">
  <div class="FormNewService" id="FormNewService">
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
  </div>
  <div class="FormNewNosServices" id="FormNewNosServices">
    <form class="BackForm" action="traitement.php" method="post" enctype="multipart/form-data">
      <label>Nouveau titre</label>
      <input type="text" name="newTitreNS" id="newTitreNS" required>
      <label>Nouvelle présentation</label>
      <input type="text" name="newPresaNS" id="newPresaNS" required>
      <label>Nouvelle icone</label>
      <input type="file" name="newIconeNS">
      <button class="backbuttonform" type="submit" name="newTableNosServices">Nouveau Nos Services</button>
    </form>
    <br>
  </div>
  <div class="FormNewCategorie" id="FormNewCategorie">
    <form class="BackForm" action="traitement.php" method="post">
      <label>Nouveau nom</label>
      <input type="text" name="newNomCategorie" id="newNomCategorie" required>
      <label>Nouvelle description</label>
      <input type="text" name="newDescCategorie" id="newDescCategorie" required>
      <button class="backbuttonform" type="submit" name="newTableCategorie">Nouvelle Catégorie</button>
    </form>
    <br>
  </div>
  <div class="FormNewProjet" id="FormNewProjet">
    <form class="BackForm" action="traitement.php" method="post">
      <input type="text" name="newProjet" id="newProjet">
      <button class="backbuttonform" type="submit" name="newTableProjet">Nouveau projet</button>
    </form>
  </div>
</div>

<div class="container" id="showNosServices">
    <div class="row row-cols-12">
      <form class="itemsFormNS" action="traitement.php" method="post">
      <?php if(isset($_SESSION['ShowAllNS'])){
      $donnees = $_SESSION['ShowAllNS'];
      $_SESSION['ShowAllNS'] = NULL;
      foreach($donnees as $key=>$NS){ ?>
        <div class="card bg-light m-3" style="width: 18rem;">
            <img src="image/<?php echo $NS['icone'];?>" class="card-img-top">
          <div class="card-body">
             <h5 class="card-text"><?php echo $NS['titre'];?></h5>
             <p class="card-text"><?php echo $NS['Presentation'];?></p>
          </div>
          <div class="boutonFormNS">
           <button type="submit" class="btn btn-primary" name="updateNS" value="<?= $NS['id_Nosservices'] ?>">Editer</button>
           <button type="submit" class="btn btn-primary" name="deleteNS" value="<?= $NS['id_Nosservices'] ?>">Supprimer</button>
          </div>
        </div>

            <?php }
            } ?>
        </form>
      </div>
</div>

<?php include('footer.php'); ?>
