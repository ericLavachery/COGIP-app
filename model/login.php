<?php
$messageOK = '';
$messageKO = '';
$log = FALSE;
session_unset ();
session_destroy ();

// si log et pwd ont été envoyés
if (isset($_POST['login']) && isset($_POST['pwd'])) {

    //vérification si login dans db
    $query = "SELECT * FROM admins";
    $stmt = $db->query($query);
    $admins = $stmt->fetchAll();
    foreach ($admins as $key => $value) {
        if ($value['login'] == $_POST['login'] && $value['pwd'] == sha1($_POST['pwd'])) {
            $log = TRUE;
            $adname = $value['nom'];
            $adaccess = $value['access'];
        }
    }

    if ($log) {
        // Le visiteur a été reconnu
        session_start ();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pwd'] = $_POST['pwd'];
        $_SESSION['access'] = $adaccess;
        $_SESSION['nom'] = $adname;
        // on redirige notre visiteur
        $redir = 'index.php?page=accueil&msg=in';
        header ('location: ' . $redir);
    }
    else {
        // Le visiteur n'a PAS été reconnu
        $messageKO = "Nom d'utilisateur ou mot de passe non valide";
        session_start ();
        session_unset ();
        session_destroy ();
    }
}
$titre = "Login";
?>
