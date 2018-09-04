<?php include 'header.php' ?>

    <form action="" method="post">
        <div>
            <label for="login">Nom d'utilisateur</label>
            <input type="text" name="login" value="">
        </div>
        <div>
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" value="">
        </div>
        <label for="button">&nbsp;</label>
        <button type="submit" name="button">Login</button>
    </form>
    <div class="rouge">
        <?= $message ?>
    </div>
    <div class="notes">
        <br>
        Note pour les coachs : <br>
        jc / ranu = god <br>
        muriel / perrache = modo <br>
    </div>

</body>
</html>
