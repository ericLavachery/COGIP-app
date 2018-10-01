<div>
    <label for="nom">Nom et prénom : </label>
    <input type="text" name="nom" value="<?= $nom ?>" required>
</div>
<div>
    <label for="login">Login : </label>
    <input type="text" name="login" value="<?= $login ?>" required>
</div>
<div>
    <label for="pwd">Mot de passe : </label>
    <input type="password" name="pwd" value="<?= $pwd ?>" required>
</div>
<div>
    <label for="access">Accès : </label>
    <select name="access" required>
        <option value="" selected></option>
        <option value="god"<?php if ($access == 'god') {echo ' selected';} ?>>god</option>
        <option value="modo"<?php if ($access == 'modo') {echo ' selected';} ?>>modo</option>
    </select>
</div>
