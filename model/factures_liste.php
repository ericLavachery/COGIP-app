<?php
if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
} else {
    $sort = 'facture.date_facturation';
}

$query = "SELECT
facture.id,
facture.numero,
facture.date_facturation,
facture.motif_prestation,
societe.nom AS nom_societe,
personne.nom AS nom_contact,
personne.prenom AS prenom_contact,
facture.societe_id,
facture.personne_id
FROM
facture
LEFT JOIN societe ON facture.societe_id = societe.id
LEFT JOIN personne ON facture.personne_id = personne.id
ORDER BY $sort
DESC";
$stmt = $db->query($query);
$factures = $stmt->fetchAll();
// Titre de la page
$titre="Factures";
 ?>
