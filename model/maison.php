<?php

// les 5 dernières sociétés
$query = "SELECT *
FROM societe, type_soc
WHERE societe.type_soc_id = type_soc.id
ORDER BY societe.id DESC
LIMIT 5";
$stmt = $db->query($query);
$societes = $stmt->fetchAll();

// les 5 dernières personnes
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
ORDER BY personne.id DESC
LIMIT 5";
$stmt = $db->query($query);
$contacts = $stmt->fetchAll();

// les 5 dernières factures
$query = "SELECT
facture.id,
facture.numero,
facture.date_facturation,
facture.motif_prestation,
societe.nom AS nom_societe,
personne.nom AS nom_contact,
personne.prenom AS prenom_contact
FROM
facture
LEFT JOIN societe ON facture.societe_id = societe.id
LEFT JOIN personne ON facture.personne_id = personne.id
ORDER BY facture.date_facturation DESC
LIMIT 5";
$stmt = $db->query($query);
$factures = $stmt->fetchAll();

// Titre de la page
$titre="COGIP : Ici maison!";
 ?>
