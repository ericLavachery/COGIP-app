<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <table>
                        <tr>
                            <td class="tabtitle"><a href="index.php?page=lesgens_liste&sort=personne.nom" title="Classer par noms">Contact</a></td>
                            <td class="tabtitle"><a href="index.php?page=lesgens_liste&sort=nom_societe" title="Classer par sociétés">Société</a></td>
                            <td class="tabtitle">Téléphone</td>
                            <td class="tabtitle">Email</td>
                        </tr>
                        <?php foreach ($personnes as $key => $value){?>
                            <tr>
                                <td class="tabrow"><a href="index.php?page=lesgens_detail&id=<?=$value['id']?>"><?=$value['nom']?> <?=$value['prenom']?></a></td>
                                <td class="tabrow"><a href="index.php?page=lesboites_detail&id=<?=$value['societe_id']?>"><?=$value['nom_societe']?></a></td>
                                <td class="tabrow"><?=$value['telephone']?></td>
                                <td class="tabrow"><?=$value['email']?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php if ($admin_level != ''): ?>
                        <div class="subnav">
                            <span class="push"></span>
                            <a href="index.php?page=lesgens_ajouter"><button class="btn btn-outline-info" type="button" name="button">Ajouter</button></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
