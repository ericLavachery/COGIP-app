<?php include('header.php') ?>
<?php include '_navig.php' ?>
  <h1>Admin <?= $titre ?></h1>

    <h3><a href="index.php?page=lesboss_detail&id=<?=$admins['id']?>"><?=$admins['nom']?></a></h3>

    <div class="detail">
        <p><span class="detailtitle">Login :</span> <?=$admins['login']?></p>
        <p><span class="detailtitle">Access :</span> <?=$admins['access']?></p>
   </div> 
     <div class="rouge">
        <?= $message ?>
    </div>

</body>
</html>
