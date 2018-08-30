<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $titre ?></h1>

    <table>
        <?php foreach ($factures as $key => $value){?>
            <tr>
                <td class="tabrow"><a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?></a></td>
                <td class="tabrow"><?=$value['date_facturation']?></td>
                <td class="tabrow"><?=$value['motif_prestation']?></td>
                <td class="tabrow"><?=$value['nom_societe']?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
