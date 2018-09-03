<?php
// annuaire
$query = "SELECT *
FROM
admins
ORDER BY admins.nom";

$stmt = $db->query($query);
$admins = $stmt->fetchAll();
// Titre de la page
$titre="Administrateurs";
 ?>
