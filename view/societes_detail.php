<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $societe['nom'] ?></h1>

    <table>
        <tr>
            <td class="tabtitle">Société</td>
            <td class="tabtitle">Type</td>
            <td class="tabtitle">Adresse</td>
            <td class="tabtitle">Téléphone</td>
            <td class="tabtitle">TVA</td>
        </tr>
        <tr>
            <td class="tabrow"><a href="index.php?page=lesboites_detail&id=<?=$societe['id']?>"><?=$societe['nom']?></a></td>
            <td class="tabrow"><?=$societe['type']?></td>
            <td class="tabrow"><?=$societe['adresse']?> | <?=$societe['pays']?></td>
            <td class="tabrow"><?=$societe['telephone']?></td>
            <td class="tabrow"><?=$societe['tva']?></td>
        </tr>
    </table>

</body>
</html>
