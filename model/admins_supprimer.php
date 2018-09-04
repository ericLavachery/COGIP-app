<?php  
// Titre de la page
$titre = $admins['nom'];

$idadmin = $_GET['id'];
$message = '';

try{
	$delete_admin = $db->exec("DELETE FROM admins WHERE admin.id = $idadmin;");
	header('Location: index.php?page=admin_liste');
}catch (Exception $e) {
	$message = 'Vous ne pouvez pas supprimer cet administrateur';

	$query =
		"SELECT *
		FROM admins
   		WHERE admin.id = $idadmin";
	$stmt = $db->query($query);
	$admins = $stmt->fetch();

}
?>