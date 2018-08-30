<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $titre ?></h1>

    <h3>Sociétés</h3>
        <a href="index.php?page=lesboites_liste"><button type="button" name="button">Toutes les sociétés</button></a>
        <a href="index.php?page=lesboites_liste&ctype=cln"><button type="button" name="button">Clients</button></a>
        <a href="index.php?page=lesboites_liste&ctype=frn"><button type="button" name="button">Fournisseurs</button></a>

    <br><br>

    <table>
        <tr>
            <td class="tabtitle">Société</td>
            <td class="tabtitle">Type</td>
            <td class="tabtitle">Téléphone</td>
            <td class="tabtitle">TVA</td>
        </tr>
        <?php foreach ($societes as $key => $value){?>
            <tr>
                <td class="tabrow"><a href="index.php?page=lesboites_detail&id=<?=$value['id']?>"><?=$value['nom']?></a></td>
                <td class="tabrow"><?=$value['type']?></td>
                <td class="tabrow"><?=$value['telephone']?></td>
                <td class="tabrow"><?=$value['tva']?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="index.php?page=lesboites_ajouter"><button type="button" name="button">Ajouter</button></a>

</body>
</html>
