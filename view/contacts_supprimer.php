<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title>COGIP : <?= $titre ?></title>
</head>
<body>
    <?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

    <h3><?=$personnes['nom_societe']?></h3>

    Tél : <?=$personnes['telephone']?><br>
    Email : <?=$personnes['email']?><br>

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
    <div class="rouge">
        <?= $message ?>
    </div>

</body>
</html>
