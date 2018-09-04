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

        Login : <?=$admin['login']?><br>
        Access : <?=$admin['access']?><br><br>
        <br>

    <div class="rouge">
        <?= $message ?>
    </div>

</body>
</html>
