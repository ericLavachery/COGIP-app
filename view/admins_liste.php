<?php include 'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body mx-auto">
          <table>
              <tr>
                  <td class="tabtitle">Nom</td>
                  <td class="tabtitle">Login</td>
                  <td class="tabtitle">Access</td>
              </tr>
              <?php foreach ($admins as $key => $value){?>
                  <tr>
                      <td class="tabrow"><a href="index.php?page=lesboss_detail&id=<?=$value['id']?>"><?=$value['nom']?></a></td>
                      <td class="tabrow"><?=$value['login']?></td>
                      <td class="tabrow"><?=$value['access']?></td>
                  </tr>
              <?php } ?>
          </table>
          <a href="index.php?page=lesboss_ajouter"><button class="btn btn-outline-info" type="button" name="button">Ajouter</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php' ?>
