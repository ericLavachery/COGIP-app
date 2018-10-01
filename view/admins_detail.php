<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <?php include 'admins_show.php' ?>
                    <br>
                    <a href="index.php?page=lesboss_modifier&id=<?=$idadmin?>"><button class="btn btn-outline-info" type="button" name="button">Modifier</button></a>
                    <a href="index.php?page=lesboss_supprimer&id=<?=$idadmin?>"><button class="btn btn-outline-danger" type="button" name="button">Supprimer</button></a>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
