<?php include('header.php') ?>
<?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

    <form action="" method="post">
        <div>
            <label for="login">Login : </label>
            <input type="text" name="login" value="<?= $login ?>" required>
        </div>
        <div>
            <label for="pwd">Mot de passe : </label>
            <input type="text" name="pwd" value="<?= $pwd ?>" required>
        </div>
        <div>
            <label for="access"> Access : </label>
            <select name="access" required>
                <option value="" selected></option>
                <?php
                $lastAccess = '';
                foreach ($admins as $key => $value){
                  if ($lastAccess != $value['access']){
                  ?>

                    <option value="<?= $value['access']?>"<?php if ($access == $value['access']) {echo ' selected';}; ?>><?= $value['access']?></option>

                <?php }
                $lastAccess = $value['access'];
               } ?>
            </select>
        </div>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" value="<?= $nom ?>" required>
        </div>
        <div>
            <label for="btn"></label>
            <button type="submit" name="btn"> Ajouter l'admin</button>
        </div>
    </form>

    <div class="rouge">
        <?= $message ?>
    </div>

<?php include('footer.php') ?>
