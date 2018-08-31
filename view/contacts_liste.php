
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
            <td class="tabtitle">Contact</td>
            <td class="tabtitle">Société</td>
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
    <a href="index.php?page=lesgens_ajouter"><button class="form" type="button" name="button">Ajouter</button></a>

</body>
</html>
