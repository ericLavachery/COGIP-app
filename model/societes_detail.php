<?php
$idsociete = $_GET['id'];

// détail société
$query = "SELECT *
FROM societe, type_soc
WHERE societe.type_soc_id = type_soc.id
AND societe.id = $idsociete
ORDER BY societe.nom ASC";
$stmt = $db->query($query);
$societe = $stmt->fetch();

// liste contacts
$query =
"SELECT *
FROM personne
WHERE societe_id = $idsociete
ORDER BY personne.prenom";
$stmt = $db->query($query);
$contacts = $stmt->fetchAll();

// liste factures
$query =
"SELECT
facture.date_facturation,
facture.numero,
facture.motif_prestation,
facture.id,
personne.id AS id_personne,
personne.prenom,
personne.nom
FROM facture, personne
WHERE personne.id = facture.personne_id
AND facture.societe_id = $idsociete
ORDER BY facture.date_facturation DESC";
$stmt = $db->query($query);
$factures = $stmt->fetchAll();

// Titre de la page
$titre = "COGIP : " . $societe['nom'];
?>
