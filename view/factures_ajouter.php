<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title><?= $titre ?></title>
</head>
<body>
    <h1><?= $titre ?></h1>

    <form action="" method="post">
        <div>
            <label for="numero">Numéro de la facture : </label>
            <input type="text" name="numero" value="<?= $nmro ?>" required>
        </div>
        <div>
            <label for="date_facturation">Date de facturation : </label>
            <input type="date" name="date_facturation" value="<?= $datef ?>" required>
        </div>
        <div>
            <label for="motif_prestation">Motif de la prestation : </label>
            <input type="text" name="motif_prestation" value="<?= $motif ?>" required>
        </div>
        <div>
            <label for="societe_id"> Société : </label>
            <select name="societe_id" required>
                <option value="" selected></option>
                <?php foreach ($societes as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($societe == $value['id']) {echo ' selected';}; ?>><?= $value['nom']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="personne_id"> Personne de contact : </label>
            <select name="personne_id" required>
                <option value="" selected></option>
                <?php foreach ($personnes as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($personne == $value['id']) {echo ' selected';}; ?>><?= $value['prenom']?><?= $value['nom']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="btn"></label>
            <button type="submit" name="btn"> Ajouter la facture</button>
        </div>
    </form>

    <div class="rouge">
        <?= $message?>
    </div>
</body>
</html>
