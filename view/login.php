<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title>COGIP : <?= $titre ?></title>
</head>
<body><?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

    <form action="" method="post">
        <div>
            <label for="login">Nom d'utilisateur</label>
            <input type="text" name="login" value="">
        </div>
        <div>
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" value="">
        </div>
        <input type="hidden" name="op" value="<?= $op ?>">
        <label for="button">&nbsp;</label>
        <button type="submit" name="button">Login</button>
    </form>
    <div class="rouge">
        <?= $message ?>
    </div>

</body>
</html>
