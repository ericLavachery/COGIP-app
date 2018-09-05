<?php include 'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body mx-auto">
            <span class="push"></span>
            <a href="index.php?page=lesboites_liste"><button class="btn btn-outline-info" type="button" name="button">Toutes les sociétés</button></a>
            <a href="index.php?page=lesboites_liste&ctype=cln"><button class="btn btn-outline-info" type="button" name="button">Clients</button></a>
            <a href="index.php?page=lesboites_liste&ctype=frn"><button class="btn btn-outline-info" type="button" name="button">Fournisseurs</button></a>

            <br><br>

            <table>
                <tr>
                    <td class="tabtitle">Société</td>
                    <td class="tabtitle">Type</td>
                    <td class="tabtitle">Téléphone</td>
                    <td class="tabtitle">TVA</td>
                </tr>
                <?php foreach ($societes as $key => $value){?>
                    <tr>
                        <td class="tabrow"><a href="index.php?page=lesboites_detail&id=<?=$value['id']?>"><?=$value['nom']?></a></td>
                        <td class="tabrow"><?=$value['type']?></td>
                        <td class="tabrow"><?=$value['telephone']?></td>
                        <td class="tabrow"><?=$value['tva']?></td>
                    </tr>
                <?php } ?>
            </table>

            <?php if ($admin_level != ''): ?>
                <div class="subnav">
                    <span class="push"></span>
                    <a href="index.php?page=lesboites_ajouter"><button class="btn btn-outline-info" type="button" name="button">Ajouter</button></a>
                </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
