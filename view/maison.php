
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title><?= $titre ?></title>
</head>
<body>
    <h1><?= $titre ?></h1>

    <h3>Sociétés</h3>
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

    <br>

    <h3>Contacts</h3>
    <table>
        <tr>
            <td class="tabtitle">Nom</td>
            <td class="tabtitle">Société</td>
            <td class="tabtitle">Téléphone</td>
            <td class="tabtitle">Email</td>
        </tr>
        <?php foreach ($contacts as $key => $value){?>
            <tr>
                <td class="tabrow"><a href="index.php?page=lesgens_detail&id=<?=$value['id']?>"><?=$value['prenom']?> <?=$value['nom']?></a></td>
                <td class="tabrow"><?=$value['nom_societe']?></td>
                <td class="tabrow"><?=$value['telephone']?></td>
                <td class="tabrow"><?=$value['email']?></td>
            </tr>
        <?php } ?>
    </table>

    <br>

    <h3>Factures</h3>
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
                <td class="tabrow"><?=$value['nom_societe']?></td>
                <td class="tabrow"><?=$value['date_facturation']?></td>
                <td class="tabrow"><?=$value['motif_prestation']?></td>
                <td class="tabrow"><?=$value['prenom_contact']?> <?=$value['nom_contact']?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
