<?php
// annuaire
$query = "SELECT
personne.id,
personne.nom,
personne.prenom,
personne.telephone,
personne.email,
societe.nom AS nom_societe
FROM
personne
LEFT JOIN societe ON personne.societe_id = societe.id
ORDER BY personne.nom";

$stmt = $db->query($query);
$personnes = $stmt->fetchAll();
// Titre de la page
$titre="Bienvenue dans l'annuaire de COGIP";
 ?>