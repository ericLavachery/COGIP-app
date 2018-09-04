
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title>COGIP : <?= $titre ?></title>
</head>
<body><?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>
    <?php if ($admin_message != ''): ?>
        <p class="rouge"><?= $admin_message ?></p>
    <?php endif; ?>
    <a href="index.php?page=lesboss_liste"><button class="form" type="button" name="button">Gérer les comptes adninistrateurs</button></a>

    <h3>Sociétés</h3>
    <table>
        <tr>
            <td class="tabtitle">Société</td>
            <td class="tabtitle">Type</td>
            <td class="tabtitle">Téléphone</td>
            <td class="tabtitle">TVA</td>
            <td></td>
        </tr>
        <?php foreach ($societes as $key => $value){?>
            <tr>
                <td class="tabrow"><a href="index.php?page=lesboites_<?=$admin_link?>&id=<?=$value['id_societe']?>"><?=$value['nom']?></a></td>
                <td class="tabrow"><?=$value['type']?></td>
                <td class="tabrow"><?=$value['telephone']?></td>
                <td class="tabrow"><?=$value['tva']?></td>
                <td class="tabrow"><a href="?lesboites_supprimer&id=<?=$value['id_societe']?>">X</a></td>
            </tr>
        <?php } ?>
    </table>
    <div class="subnav">
        <a href="index.php?page=lesboites_liste"><button class="form" type="button" name="button">Toutes les sociétés</button></a>
        <a href="index.php?page=lesboites_liste&ctype=cln"><button class="form" type="button" name="button">Clients</button></a>
        <a href="index.php?page=lesboites_liste&ctype=frn"><button class="form" type="button" name="button">Fournisseurs</button></a>
        <a href="index.php?page=lesboites_ajouter"><button class="form" type="button" name="button">Ajouter une société</button></a>
    </div>

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
                <td class="tabrow"><a href="index.php?page=lesgens_<?=$admin_link?>&id=<?=$value['id']?>"><?=$value['prenom']?> <?=$value['nom']?></a></td>
                <td class="tabrow"><a href="index.php?page=lesboites_<?=$admin_link?>&id=<?=$value['id_societe']?>"><?=$value['nom_societe']?></a></td>
                <td class="tabrow"><?=$value['telephone']?></td>
                <td class="tabrow"><?=$value['email']?></td>
            </tr>
        <?php } ?>
    </table>
    <div class="subnav">
        <a href="index.php?page=lesgens_liste"><button class="form" type="button" name="button">Tous les contacts</button></a>
        <a href="index.php?page=lesgens_ajouter"><button class="form" type="button" name="button">Ajouter un contact</button></a>
    </div>

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
                <td class="tabrow"><a href="index.php?page=lepognon_<?=$admin_link?>&id=<?=$value['id']?>"><?=$value['numero']?></a></td>
                <td class="tabrow"><a href="index.php?page=lesboites_<?=$admin_link?>&id=<?=$value['id_societe']?>"><?=$value['nom_societe']?></a></td>
                <td class="tabrow"><?=$value['date_facturation']?></td>
                <td class="tabrow"><?=$value['motif_prestation']?></td>
                <td class="tabrow"><a href="index.php?page=lesgens_<?=$admin_link?>&id=<?=$value['id_personne']?>"><?=$value['prenom_contact']?> <?=$value['nom_contact']?></a></td>
            </tr>
        <?php } ?>
    </table>
    <div class="subnav">
        <a href="index.php?page=lepognon_liste"><button class="form" type="button" name="button">Toutes les factures</button></a>
        <a href="index.php?page=lepognon_ajouter"><button class="form" type="button" name="button">Ajouter une facture</button></a>
    </div>

</body>
</html>
