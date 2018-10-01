<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <form action="" method="post">
                        <?php include 'factures_form.php' ?>
                        <div>
                            <label for="btn"></label>
                            <button class="btn btn-outline-info" type="submit" name="btn">Ajouter la facture</button>
                        </div>
                    </form>
                    <?php include 'messages.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
