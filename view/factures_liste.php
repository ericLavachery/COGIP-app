<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title>COGIP : <?= $titre ?></title>
</head>
<body><?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

    <table>
        <tr>
            <td class="tabtitle">Numéro</td>
            <td class="tabtitle">Société</td>
            <td class="tabtitle">Date</td>
            <td class="tabtitle">Prestation</td>
            <td class="tabtitle">Contact</td>
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
        <a href="index.php?page=lepognon_ajouter"><button class="form" type="button" name="button">Ajouter</button></a>
    <?php endif; ?>


</body>
</html>
