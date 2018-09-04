<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title>COGIP : <?= $titre ?></title>
</head>
<body><?php include '_navig.php' ?>
  <h1>Admin <?= $titre ?></h1>

    <h3><a href="index.php?page=lesboss_detail&id=<?=$admin['id']?>"><?=$admin['nom']?></a></h3>

    <div class="detail">
        <p><span class="detailtitle">Login :</span> <?=$admin['login']?></p>
        <p><span class="detailtitle">Access :</span> <?=$admin['access']?></p>
   </div>
     <div class="rouge">
        <?= $message ?>
    </div>

</body>
</html>
