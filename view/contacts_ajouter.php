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
            <label for="prenom">Prenom : </label>
            <input type="text" name="prenom" value="<?= $fname ?>" required>
        </div>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" value="<?= $lname ?>" required>
        </div>
        <div>
            <label for="telephone">Téléphone : </label>
            <input type="text" name="telephone" value="<?= $phone ?>" required>
        </div>
        <div>
            <label for="bas"> email : </label>
            <input type="email" name="email" value="<?= $email ?>" required>
        </div>
        <div>
            <label for="societe"> Société : </label>
            <select name="societe" required>
                <option value="" selected></option>
                <?php foreach ($societes as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($societe == $value['id']) {echo ' selected';}; ?>><?= $value['nom']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="btn"></label>
            <button type="submit" name="btn"> Ajouter le contact</button>
        </div>
    </form>

    <div class="rouge">
        <?= $message ?>
    </div>
</body>
</html>
