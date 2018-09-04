<?php
if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
} else {
    $sort = 'personne.nom';
}

// annuaire
$query = "SELECT
personne.id,
personne.nom,
personne.prenom,
personne.telephone,
personne.email,
societe.nom AS nom_societe,
personne.societe_id
FROM
personne
LEFT JOIN societe ON personne.societe_id = societe.id
ORDER BY $sort";

$stmt = $db->query($query);
$personnes = $stmt->fetchAll();
// Titre de la page
$titre="Contacts";
 ?>
