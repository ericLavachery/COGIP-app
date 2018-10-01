<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">

                    <table>
                        <tr>
                            <td class="tabtitle"><a href="index.php?page=lepognon_liste&sort=facture.numero" title="Classer par noms">Numéro</a></td>
                            <td class="tabtitle"><a href="index.php?page=lepognon_liste&sort=nom_societe" title="Classer par noms">Société</a></td>
                            <td class="tabtitle"><a href="index.php?page=lepognon_liste&sort=facture.date_facturation" title="Classer par noms">Date</a></td>
                            <td class="tabtitle"><a href="index.php?page=lepognon_liste&sort=facture.motif_prestation" title="Classer par noms">Prestation</a></td>
                            <td class="tabtitle"><a href="index.php?page=lepognon_liste&sort=nom_contact" title="Classer par noms">Contact</a></td>
                        </tr>
                        <?php foreach ($factures as $key => $value){?>
                            <tr>
                                <td class="tabrow"><a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?></a></td>
                                <td class="tabrow"><a href="index.php?page=lesboites_detail&id=<?=$value['societe_id']?>"><?=$value['nom_societe']?></a></td>
                                <td class="tabrow"><?=$value['date_facturation']?></td>
                                <td class="tabrow"><?=$value['motif_prestation']?></td>
                                <td class="tabrow"><a href="index.php?page=lesgens_detail&id=<?=$value['personne_id']?>"><?=$value['prenom_contact']?> <?=$value['nom_contact']?></a></td>
                            </tr>
                        <?php } ?>
                    </table>

                    <?php if ($admin_level != ''): ?>
                        <div class="subnav">
                            <span class="push"></span>
                            <a href="index.php?page=lepognon_ajouter"><button class="btn btn-outline-info" type="button" name="button">Ajouter</button></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
