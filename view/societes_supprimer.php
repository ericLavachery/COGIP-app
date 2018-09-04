<?php include 'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body mx-auto">
            <table>
                <tr>
                    <td class="tabtitle">Type</td>
                    <td class="tabtitle">Adresse</td>
                    <td class="tabtitle">Téléphone</td>
                    <td class="tabtitle">TVA</td>
                </tr>
                <tr>
                    <td class="tabrow"><?=$societe['type']?></td>
                    <td class="tabrow"><?=$societe['adresse']?> | <?=$societe['pays']?></td>
                    <td class="tabrow"><?=$societe['telephone']?></td>
                    <td class="tabrow"><?=$societe['tva']?></td>
                </tr>
            </table>

            <br>

            <h3>Contacts</h3>
            <table>
                <?php foreach ($contacts as $key => $value){?>
                    <tr>
                        <td class="tabrow"><a href="index.php?page=lesgens_detail&id=<?=$value['id']?>"><?=$value['prenom']?></a></td>
                        <td class="tabrow"><?=$value['nom']?></td>
                        <td class="tabrow"><?=$value['telephone']?></td>
                        <td class="tabrow"><?=$value['email']?></td>
                    </tr>
                <?php } ?>
            </table>

            <h3>Factures</h3>
            <table>
                <tr>
                    <td class="tabtitle">Date</td>
                    <td class="tabtitle">Numéro</td>
                    <td class="tabtitle">Prestation</td>
                    <td class="tabtitle">Contact</td>
                </tr>
                <?php foreach ($factures as $key => $value){?>
                    <tr>
                        <td class="tabrow"><?=$value['date_facturation']?></td>
                        <td class="tabrow"><a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?></a></td>
                        <td class="tabrow"><?=$value['motif_prestation']?></td>
                        <td class="tabrow"><?=$value['prenom']?> <?=$value['nom']?></td>
                    </tr>
                <?php } ?>
            </table>

            <br>
            <div class="rouge">
                <?= $message ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
