<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
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
                        <button class="btn btn-outline-info" type="submit" name="button">Login</button>
                    </form>
                    <?php include 'messages.php' ?>
                    <div class="notes">
                        <br>
                        Note pour les coachs : <br>
                        jc / ranu = god <br>
                        muriel / perrache = modo <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
