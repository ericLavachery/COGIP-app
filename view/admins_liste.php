<?php include('header.php') ?>
<?php include '_navig.php' ?>
    <h1><?= $titre ?></h1>

    <table>
        <tr>
            <td class="tabtitle">Nom</td>
            <td class="tabtitle">Login</td>
            <td class="tabtitle">Access</td>
        </tr>
        <?php foreach ($admins as $key => $value){?>
            <tr>
                <td class="tabrow"><a href="index.php?page=lesboss_detail&id=<?=$value['id']?>"><?=$value['nom']?></a></td>
                <td class="tabrow"><?=$value['login']?></td>
                <td class="tabrow"><?=$value['access']?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="index.php?page=lesboss_ajouter"><button class="form" type="button" name="button">Ajouter</button></a>

</body>
</html>
