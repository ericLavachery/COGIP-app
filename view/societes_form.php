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
    <label for="bas">TVA : </label>
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
