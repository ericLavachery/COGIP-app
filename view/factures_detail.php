<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body>
    <h1><?= $titre ?></h1>
    Facture numéro: <?=$factures['numero']?><br>
    Date: <?=$factures['date_facturation']?><br>
    Nom de la société: <a href="index.php?page=lesboites_detail&id=<?=$factures['id_societe']?>"><?=$factures['nom_societe']?></a><br>
    Type de la société: <?=$factures['type']?><br>
    Personne de contact: <a href="index.php?page=lesgens_detail&id=<?=$factures['id_personne']?>"><?=$factures['prenom_contact']?> <?=$factures['nom_contact']?></a>

</body>
</html>
