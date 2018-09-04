<?php
//Titre de la page
$titre = $admins['nom'];

//admin
$idadmins = $_GET['id'];
  $query =
		"SELECT *
		FROM admins
    WHERE id = $idadmins
    ";
	$stmt = $db->query($query);
	$admins = $stmt->fetch();
  
?>
