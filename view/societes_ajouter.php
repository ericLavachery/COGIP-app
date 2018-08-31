<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title><?= $titre ?></title>
</head>
<body><?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

    <form action="" method="post">
        <div>
            <label for="prenom">Société : </label>
            <input type="text" name="nom" value="<?= $nom ?>" required>
        </div>
        <div>
            <label for="nom">Adresse : </label>
            <input type="text" name="adresse" value="<?= $adresse ?>" required>
        </div>
        <div>
            <label for="nom">Pays : </label>
            <input type="text" name="pays" value="<?= $pays ?>" required>
        </div>
        <div>
            <label for="telephone">Téléphone : </label>
            <input type="text" name="telephone" value="<?= $telephone ?>" required>
        </div>
        <div>
            <label for="bas"> TVA : </label>
            <input type="text" name="tva" value="<?= $tva ?>" required>
        </div>
        <div>
            <label for="type_soc_id"> Type : </label>
            <select name="type_soc_id" required>
                <option value="" selected></option>
                <?php foreach ($types as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($type_soc_id == $value['id']) {echo ' selected';}; ?>><?= $value['type']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="btn"></label>
            <button type="submit" name="btn">Ajouter la société</button>
        </div>
    </form>

    <div class="rouge">
        <?= $message ?>
    </div>
</body>
</html>
