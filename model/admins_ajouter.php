<?php
$login = '';
$pwd = '';
$access = '';
//$admins_id = '';
$nom = '';
$message = '';

$query = "SELECT access,id
FROM admins
ORDER BY admins.access
ASC ";
$stmt = $db->query($query);
$admins = $stmt->fetchAll();

// Si utilisation du bouton "Ajouter dans le contact"
if(isset($_POST['btn'])){
    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $pwd = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);
    $chat = sha1($pwd);
    $access = filter_var($_POST['access'], FILTER_SANITIZE_STRING);
    //$admins_id = $_POST['admins_id'];
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);

    if(!empty($login) && !empty($pwd) && !empty($access) && !empty($nom)) {
        //insérer nouvelles données
        $add_value = $db->query
        ('INSERT INTO admins (login, pwd, access, nom) VALUES("'.$login.'", "'.$chat.'", "'.$access.'","'.$nom.'")');
        $login = '';
        $pwd = '';
        $access = '';
        //$admins_id = '';
        $nom = '';
        $message = "Bien ouej JC";
    }else{
        $message = "Tu crains JC";
    }
}
$titre = "Nouvel admin";
?>
