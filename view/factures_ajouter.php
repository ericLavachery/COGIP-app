<?php include 'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body mx-auto">
          <form action="" method="post">
              <div>
                  <label for="numero">Numéro : </label>
                  <input type="text" name="numero" value="<?= $nmro ?>" required>
              </div>
              <div>
                  <label for="date_facturation">Date : </label>
                  <input type="date" name="date_facturation" value="<?= $datef ?>" required>
              </div>
              <div>
                  <label for="motif_prestation">Motif : </label>
                  <input type="text" name="motif_prestation" value="<?= $motif ?>" required>
              </div>
              <div>
                  <label for="personne_id"> Contact : </label>
                  <select name="personne_id" required>
                      <option value="" selected></option>
                      <?php foreach ($contacts as $key => $value){?>
                          <option value="<?= $value['id']?>"<?php if ($personne_id == $value['id']) {echo ' selected';}; ?>><?= $value['nom_societe']?> : <?= $value['prenom']?> <?= $value['nom']?></option>
                      <?php } ?>
                  </select>
              </div>
              <div>
                  <label for="btn"></label>
                  <button class="btn btn-outline-info" type="submit" name="btn"> Ajouter la facture</button>
              </div>
          </form>

          <div class="rouge">
              <?= $message?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
