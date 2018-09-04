<?php include('header.php') ?>

    <h1><?= $titre ?></h1>

    <form action="" method="post">
        <div>
            <label for="numero">Numéro : </label>
            <input type="text" name="numero" value="<?= $numero ?>" required>
        </div>
        <div>
            <label for="date_facturation">Date : </label>
            <input type="date" name="date_facturation" value="<?= $date_facturation ?>" required>
        </div>
        <div>
            <label for="motif_prestation">Prestation : </label>
            <textarea name="motif_prestation" rows="3" cols="41" required><?= $motif_prestation ?></textarea>
        </div>
        <div>
            <label for="personne_id"> Contact : </label>
            <select name="personne_id" required>
                <option value="" selected></option>
                <?php foreach ($contacts as $key => $value){?>
                    <option value="<?= $value['id']?>"<?php if ($personne_id == $value['id']) {echo ' selected';}; ?>><?= $value['nom_societe']?> : <?= $value['prenom']?> <?= $value['nom']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="btn"></label>
            <button type="submit" name="btn">Modifier la facture</button>
        </div>
    </form>

    <div class="rouge">
        <?= $message ?>
    </div>

</body>
</html>
