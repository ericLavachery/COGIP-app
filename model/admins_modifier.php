<?php
$idadmin=$_GET['id'];
$message = '';
$login = '';
$pwd = '';
$access = '';
$nom = '';

// détail admin
$query = "SELECT *
FROM admins
WHERE id = $idadmin";
$stmt = $db->query($query);
$admins = $stmt->fetch();

$login = $admins['login'];
$pwd = $admins['pwd'];
$access = $admins['access'];
$nom = $admins['nom'];

if(isset($_POST['btn'])){
    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $pwd = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);
    $chat = sha1($pwd);
    $access = filter_var($_POST['access'], FILTER_SANITIZE_STRING);
    $truc = $_POST['truc'];
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);

    if(!empty($login) && !empty($pwd) && !empty($access) && !empty($nom)) {
        //changer données
        $db->beginTransaction();
    		$db->exec("UPDATE admins SET login='$login',pwd='$chat',access='$access',nom='$nom' WHERE id ='$truc'; ");
    		$db->commit();
        $message = "Bien ouej JC";
    }else{
        $message = "Tu crains JC";
    }
}
$titre = "Modif admin";
?>
