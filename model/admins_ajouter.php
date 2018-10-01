<?php
$login = '';
$pwd = '';
$access = '';
//$admins_id = '';
$nom = '';
$messageOK = '';
$messageKO = '';

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
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);

    if(!empty($login) && !empty($pwd) && !empty($access) && !empty($nom)) {
        //insérer nouvelles données
        $add_value = $db->query
        ('INSERT INTO admins (login, pwd, access, nom) VALUES("'.$login.'", "'.$chat.'", "'.$access.'","'.$nom.'")');
        $messageOK = "Bien ouèj JC! Le login ".$login." pour ".$nom." a bien été ajouté.";
        $login = '';
        $pwd = '';
        $access = '';
        $nom = '';
    }else{
        $messageKO = "Tu crains JC! Cet utilisateur existe déjà";
    }
}
$titre = "Nouvel admin";
?>
