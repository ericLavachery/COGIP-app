
<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <?php if ($search_message != ''): ?>
                <p class="rouge"><?= $search_message ?></p>
            <?php endif; ?>
            <form class="form-inline my-2 my-lg-0" action="" method="GET">
                <input type="hidden" name="page" value="recherche">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="searchMe" value="<?=$searchMe?>">
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <?php if ($searchMe != ''): ?>

                        <?php if (sizeof($societes) >= 1): ?>
                            <h3>Trouvé dans Sociétés</h3>
                            <table>
                                <tr>
                                    <td class="tabtitle">Société</td>
                                    <td class="tabtitle">Adresse</td>
                                    <td class="tabtitle">Pays</td>
                                    <td class="tabtitle">Téléphone</td>
                                    <td class="tabtitle">TVA</td>
                                </tr>
                                <?php foreach ($societes as $key => $value){?>
                                    <tr>
                                        <td class="tabrow"><a href="index.php?page=lesboites_detail&id=<?=$value['id']?>"><?=$value['nom']?></a></td>
                                        <td class="tabrow"><?=$value['adresse']?></td>
                                        <td class="tabrow"><?=$value['pays']?></td>
                                        <td class="tabrow"><?=$value['telephone']?></td>
                                        <td class="tabrow"><?=$value['tva']?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <br>
                            <hr>
                            <br>
                        <?php endif; ?>

                        <?php if (sizeof($contacts) >= 1): ?>
                            <h3>Trouvé dans Contacts</h3>
                            <table>
                                <tr>
                                    <td class="tabtitle">Nom</td>
                                    <td class="tabtitle">Téléphone</td>
                                    <td class="tabtitle">Email</td>
                                </tr>
                                <?php foreach ($contacts as $key => $value){?>
                                    <tr>
                                        <td class="tabrow"><a href="index.php?page=lesgens_detail&id=<?=$value['id']?>"><?=$value['prenom']?> <?=$value['nom']?></a></td>
                                        <td class="tabrow"><?=$value['telephone']?></td>
                                        <td class="tabrow"><?=$value['email']?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <br>
                            <hr>
                            <br>
                        <?php endif; ?>

                        <?php if (sizeof($factures) >= 1): ?>
                            <h3>Trouvé dans Factures</h3>
                            <table>
                                <tr>
                                    <td class="tabtitle">Numéro</td>
                                    <td class="tabtitle">Date</td>
                                    <td class="tabtitle">Prestation</td>
                                </tr>
                                <?php foreach ($factures as $key => $value){?>
                                    <tr>
                                        <td class="tabrow"><a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?></a></td>
                                        <td class="tabrow"><?=$value['date_facturation']?></td>
                                        <td class="tabrow"><?=$value['motif_prestation']?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php endif; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
