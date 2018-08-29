<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $titre ?></h1>

    <table>
        <?php foreach ($societes as $key => $value){?>
            <tr>
                <td class="tabrow"><?=$value['nom']?></td>
                <td class="tabrow"><?=$value['type']?></td>
                <td class="tabrow"><?=$value['telephone']?></td>
                <td class="tabrow"><?=$value['tva']?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
