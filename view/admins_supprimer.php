<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body mx-auto">
                    <h3><a href="index.php?page=lesboss_detail&id=<?=$admin['id']?>"><?=$admin['nom']?></a></h3>

                    <div class="detail">
                        <p><span class="detailtitle">Login :</span> <?=$admin['login']?></p>
                        <p><span class="detailtitle">Access :</span> <?=$admin['access']?></p>
                    </div>
                    <?php include 'messages.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
