<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <h3>Société</h3>
                    <div class="detail">
                        <p><span class="detailtitle">Type :</span><?=$societe['type']?></p>
                        <p><span class="detailtitle">Adresse : </span><?=$societe['adresse']?> | <?=$societe['pays']?></p>
                        <p><span class="detailtitle">Téléphone :</span><?=$societe['telephone']?></p>
                        <p><span class="detailtitle">TVA :</span><?=$societe['tva']?></p>
                    </div>

                    <br>

                    <?php if ($admin_level === 'god'): ?>
                        <a href="index.php?page=lesboites_modifier&id=<?=$idsociete?>"><button class="btn btn-outline-info" type="button" name="button">Modifier</button></a>
                        <a href="index.php?page=lesboites_supprimer&id=<?=$idsociete?>"><button class="btn btn-outline-danger" type="button" name="button">Supprimer</button></a>
                        <br><br>
                    <?php endif; ?>

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
                    <br>
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
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
