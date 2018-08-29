
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $titre ?></h1>

    Nom : <?=$personnes['nom']?><br>
    Prénom : <?=$personnes['prenom']?><br>
    Société : <?=$personnes['nom_societe']?><br>
    Téléphone : <?=$personnes['telephone']?><br>
    Email : <?=$personnes['email']?><br>
    Liste facture(s) : <br>

    <?php foreach ($factures as $key => $value){?>
        <a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?><br></a>
    <?php } ?>
    

</body>
</html>

