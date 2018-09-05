<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
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
                            <input type="hidden" name="truc" value="<?= $idadmin ?>">
                            <label for="btn"></label>
                            <button class="btn btn-outline-info" type="submit" name="btn"> Modifier l'admin</button>
                        </div>
                    </form>

                    <div class="rouge">
                        <?= $message ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
