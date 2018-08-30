<?php
$idScociete = $_GET['id'];

$query = "SELECT *
FROM societe, type_soc
WHERE societe.type_soc_id = type_soc.id
AND societe.id = $idScociete
ORDER BY societe.nom ASC";
$stmt = $db->query($query);
$societe = $stmt->fetch();

// Titre de la page
$titre = "Détail Société : " . $societe['nom'];
 ?>
