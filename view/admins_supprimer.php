<?php include('header.php') ?>

  <h1>Admin <?= $titre ?></h1>

    <h3><a href="index.php?page=lesboss_detail&id=<?=$admin['id']?>"><?=$admin['nom']?></a></h3>

    <div class="detail">
        <p><span class="detailtitle">Login :</span> <?=$admin['login']?></p>
        <p><span class="detailtitle">Access :</span> <?=$admin['access']?></p>
   </div>
     <div class="rouge">
        <?= $message ?>
    </div>

</body>
</html>
