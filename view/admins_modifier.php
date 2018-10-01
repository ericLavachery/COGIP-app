<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <form action="" method="post">
                        <?php include 'admins_form.php' ?>
                        <div>
                            <input type="hidden" name="truc" value="<?= $idadmin ?>">
                            <label for="btn"></label>
                            <button class="btn btn-outline-info" type="submit" name="btn"> Modifier l'admin</button>
                        </div>
                    </form>
                    <?php include 'messages.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
