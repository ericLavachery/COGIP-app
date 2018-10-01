<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <h3><?=$personnes['nom_societe']?></h3>

                    <p><span class="detailtitle">Adresse société :</span> <?=$personnes['adresse_societe']?></p>
                    <p><span class="detailtitle">Téléphone :</span> <?=$personnes['telephone']?></p>
                    <p><span class="detailtitle">Email : </span> <?=$personnes['email']?></p>

                    <h3>Factures</h3>
                    <table>
                        <tr>
                            <td class="tabtitle">Numéro</td>
                            <td class="tabtitle">Date</td>
                            <td class="tabtitle">Prestation</td>
                        </tr>
                        <?php foreach ($factures as $key => $value){?>
                            <tr>
                                <td class="tabrow"><?=$value['numero']?></td>
                                <td class="tabrow"><?=$value['date_facturation']?></td>
                                <td class="tabrow"><?=$value['motif_prestation']?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <br>
                    <?php include 'messages.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
