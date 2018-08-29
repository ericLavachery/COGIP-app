<?php
$query = "SELECT
facture.id,
facture.numero,
facture.date_facturation,
facture.motif_prestation,
type_soc.type,
societe.nom AS nom_societe,
personne.nom AS nom_contact,
personne.prenom AS prenom_contact
FROM
facture, type_soc
LEFT JOIN type_soc ON societe.type_soc_id = type_soc.id
LEFT JOIN societe ON facture.societe_id = societe.id
LEFT JOIN personne ON facture.personne_id = personne.id

ORDER BY facture.date_facturation
DESC";
$stmt = $db->query($query);
$factures = $stmt->fetchAll();
// Titre de la page
$titre="COGIP : Détail de la facture";
 ?>
