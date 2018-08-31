<?php
session_start ();
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    $log = TRUE;
} else {
    $log = FALSE;
}
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    // info page => redirige vers la page
    // lesgens_* = contacts_*
    // lepognon_* = factures_*
    // lesboites_* = societes_*
    if (strpos($page, 'lesboites') === 0) {
        $fichier = str_replace("lesboites", "societes", $page);
    } elseif (strpos($page, 'lesgens') === 0) {
        $fichier = str_replace("lesgens", "contacts", $page);
    } elseif (strpos($page, 'lepognon') === 0) {
        $fichier = str_replace("lepognon", "factures", $page);
    } elseif (strpos($page, 'lesboss') === 0) {
        $fichier = str_replace("lesboss", "admins", $page);
    } elseif ($page == 'accueil') {
        $fichier = 'maison';
    } elseif ($page == 'connection') {
        $fichier = 'login';
    } else {
        $fichier = 'maison';
    }
    require_once 'model/'.$fichier.'.php';
    require_once 'view/'.$fichier.'.php';
} else {
    // pas d'infos => on va à la maison
    $page = '';
    require_once 'model/maison.php';
    require_once 'view/maison.php';
}
?>
