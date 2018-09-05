<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="COGIP c'est chic">
    <meta name="theme-color" content="#317EFB"/>

    <!-- link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- title -->
    <title>COGIP : <?= $titre ?></title>

</head>
<body>

    <div class="logo">
        <img class="rounded mx-auto d-block" src="view/img/logo.png">
    </div>

    <div class="menu">
        <div class="row">
            <div class="col-sm-12">
                <div class="items" id="my-nav nav-container">
                    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a9ba9;">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" name="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item <?php if ($page == 'accueil' || $page == '') {echo 'active';} ?>">
                                    <a class="nav-link " href="index.php">Home
                                    </a>
                                </li>
                                <li class="nav-item <?php if (strpos($page, 'lesboites') === 0) {echo 'active';} ?>">
                                    <a class="nav-link " href="index.php?page=lesboites_liste">Sociétés
                                    </a>
                                </li>
                                <li class="nav-item <?php if (strpos($page, 'lesgens') === 0) {echo 'active';}?>">
                                    <a class="nav-link" href="index.php?page=lesgens_liste">Contacts
                                    </a>
                                </li>

                                <li class="nav-item <?php if (strpos($page, 'lepognon') === 0) {echo 'active';}?>">
                                    <a class="nav-link" href="index.php?page=lepognon_liste">Factures
                                    </a>
                                </li>
                                <?php if ($log): ?>
                                    <li class="nav-item <?php if ($page == 'admin') {echo 'active';} ?>">
                                        <a class="nav-link" href="index.php?page=admin">Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item <?php if (strpos($page, 'lesboss') === 0) {echo 'active';} ?>">
                                        <a class="nav-link" href="index.php?page=lesboss_liste">Admin
                                        </a>
                                    </li>
                                    <li class="nav-item <?php if (strpos($page, 'deconnection') === 0) {echo 'active';}?>">
                                        <a class="nav-link" href="?page=deconnection&op=<?=$page?>">Log out
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item <?php if (strpos($page, 'deconnection') === 0) {echo 'active';}?>">
                                        <a class="nav-link" href="index.php?page=connection&op=accueil">Log in
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="title_page">
        <h1><?= $titre ?></h1>
    </div>
