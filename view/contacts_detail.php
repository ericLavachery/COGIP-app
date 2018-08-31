
 <!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body><?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

<h3><a href="index.php?page=lesboites_detail&id=<?=$personnes['id_societe']?>"><?=$personnes['nom_societe']?></a></h3>

    Tél : <?=$personnes['telephone']?><br>
    Email : <?=$personnes['email']?><br>

    <a href="index.php?page=lesgens_modifier&id=<?=$idcontact?>"><button class="form" type="button" name="button">Modifier</button></a>
    <a href="index.php?page=lesgens_modifier&id=<?=$idcontact?>"><button class="form" type="button" name="button">Supprimer</button></a>

    <h3>Factures</h3>
    <table>
        <tr>
            <td class="tabtitle">Numéro</td>
            <td class="tabtitle">Date</td>
            <td class="tabtitle">Prestation</td>
        </tr>
        <?php foreach ($factures as $key => $value){?>
            <tr>
                <td class="tabrow"><a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?></td>
                <td class="tabrow"><?=$value['date_facturation']?></td>
                <td class="tabrow"><?=$value['motif_prestation']?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
