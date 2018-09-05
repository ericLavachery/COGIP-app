<?php
session_start ();
$admin_level = '';
$admin_name = '';
$admin_link = 'detail';
$securityMessage = '';

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    $log = TRUE;
    if (isset($_SESSION['access'])) {
        $admin_level = $_SESSION['access'];
        $admin_name = $_SESSION['nom'];
        if ($admin_level == 'god') {
            $admin_link = 'modifier';
        }
    }
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
    } elseif ($page == 'admin') {
        $fichier = 'dashboard';
    } elseif ($page == 'connection') {
        $fichier = 'login';
    } elseif ($page == 'deconnection') {
        $fichier = 'logout';
    } elseif ($page == 'recherche') {
        $fichier = 'search';
    } else {
        $fichier = 'maison';
    }
    // seulement jc peut modifier
    if ($admin_level != 'god') {
        if (strpos($fichier, 'modifier') !== FALSE || strpos($fichier, 'supprimer') !== FALSE) {
            $securityMessage = 'Seul JC peut modifier ou supprimer des trucs!';
            $fichier = 'maison';
        }
    }
    // seulement les modos peuvent ajouter
    if (!$log) {
        if (strpos($fichier, 'ajouter') !== FALSE) {
            $securityMessage = 'Seuls les admins peuvent ajouter des trucs!';
            $fichier = 'maison';
        }
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
