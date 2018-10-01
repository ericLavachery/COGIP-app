<?php
$idadmin=$_GET['id'];
$messageOK = '';
$messageKO = '';

$query =
"SELECT *
FROM admins
WHERE id = $idadmin
";
$stmt = $db->query($query);
$admin = $stmt->fetch();

if ($_SESSION['login'] == $admin['login']) {
	$messageKO = "Vous ne pouvez pas supprimer cet administrateur, parce que le suicide c'est mal! Faites-vous suivre, merde!";
} else {
	try {
		$delete_admin = $db->exec("DELETE FROM admins WHERE id= $idadmin;");
		header('location: index.php?page=lesboss_liste');
	} catch (Exception $e) {
		$messageKO = "Vous ne pouvez pas supprimer cet administrateur, parce qu'on vous le dit!";
	}
}

$titre = $admin['nom'];
?>
