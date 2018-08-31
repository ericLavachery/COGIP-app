<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title></title>
</head>
<body><?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

   <form action="" method="post">
        <div>
            <label for="prenom">Prenom : </label>
            <input type="text" name="prenom" value="<?= $personnes['prenom'] ?>" required>
        </div>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" value="<?= $personnes['nom'] ?>" required>
        </div>
        <div>
            <label for="telephone">Téléphone : </label>
            <input type="text" name="telephone" value="<?= $personnes['telephone'] ?>" required>
        </div>
        <div>
            <label for="bas"> email : </label>
            <input type="email" name="email" value="<?= $personnes['email'] ?>" required>
        </div>
        <div>
            <label for="societe"> Société : </label>
            <select name="societe" required>
                <option value="" selected></option>
                <?php foreach ($societes as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($personnes['id_societe'] == $value['id']) {echo ' selected';}; ?>><?= $value['nom']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="btn"></label>
            <button type="submit" name="btn"> Modifier le contact</button>
        </div>
    </form>
    

</body>
</html>

