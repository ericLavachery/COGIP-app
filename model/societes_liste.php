<?php
$query = "SELECT
societe.id,
societe.nom,
societe.adresse,
societe.telephone,
societe.tva,
societe.pays,
type_soc.type
FROM societe, type_soc
WHERE societe.type_soc_id = type_soc.id
ORDER BY societe.nom ASC";
$stmt = $db->query($query);
$societes = $stmt->fetchAll();

// Titre de la page
$titre="COGIP : Sociétés";
 ?>
