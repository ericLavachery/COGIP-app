<?php include('header.php') ?>

    <h1><?= $titre ?></h1>

    <form action="" method="post">
        <div>
            <label for="prenom">Prenom : </label>
            <input type="text" name="prenom" value="<?= $prenom ?>" required>
        </div>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" value="<?= $nom ?>" required>
        </div>
        <div>
            <label for="telephone">Téléphone : </label>
            <input type="text" name="telephone" value="<?= $telephone ?>" required>
        </div>
        <div>
            <label for="bas"> email : </label>
            <input type="email" name="email" value="<?= $email ?>" required>
        </div>
        <div>
            <label for="societe_id"> Société : </label>
            <select name="societe_id" required>
                <option value="" selected></option>
                <?php foreach ($societes as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($societe_id == $value['id']) {echo ' selected';}; ?>><?= $value['nom']?></option>
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
