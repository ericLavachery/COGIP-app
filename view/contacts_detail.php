
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $titre ?></h1>
     <a href="index.php?page=lesboites_modifier&id=<?=$idsociete?>"><button type="button" name="button">Modifier</button></a>
    <a href="index.php?page=lesboites_modifier&id=<?=$idsociete?>"><button type="button" name="button">Supprimer</button></a>
    <br>

    <br>

    Nom : <?=$personnes['nom']?><br>
    Prénom : <?=$personnes['prenom']?><br>
    Société : <a href="index.php?page=lesboites_detail&id=<?=$factures['id_societe']?>"><?=$personnes['nom_societe']?></a><br>
    Téléphone : <?=$personnes['telephone']?><br>
    Email : <?=$personnes['email']?><br>
    Liste facture(s) : <br>

    <?php foreach ($factures as $key => $value){?>
        <a href="index.php?page=lepognon_detail&id=<?=$value['id']?>"><?=$value['numero']?><br></a>
    <?php } ?>
    

</body>
</html>

