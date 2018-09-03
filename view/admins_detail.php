<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title>COGIP : <?= $titre ?></title>
</head>
<body><?php include '_navig.php' ?>
    <!--<h1>Admin <?= $titre ?></h1>-->

<h3><a href="index.php?page=lesboss_detail&id=<?=$admins['id']?>"><?=$admins['nom']?></a></h3>

    Login : <?=$admins['login']?><br>
    Access : <?=$admins['access']?><br><br>

    <a href="index.php?page=lesboss_modifier&id=<?=$idadmins?>"><button class="form" type="button" name="button">Modifier</button></a>
    <a href="index.php?page=lesboss_supprimer&id=<?=$idadmins?>"><button class="form" type="button" name="button">Supprimer</button></a>

</body>
</html>
