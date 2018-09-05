<?php
$search_message = '';
$searchMe = $_GET['searchMe'];
if (strlen($searchMe) <= 2) {
    $searchMe = '';
    $search_message = "C'est trop court comme recherche, faut pas dec!";
}

// sociétés
$query = "SELECT *
FROM societe
WHERE nom LIKE ?
OR telephone LIKE ?
OR tva LIKE ?
OR adresse LIKE ?
OR pays LIKE ?
ORDER BY nom ASC";
$params = array("%$searchMe%", "%$searchMe%", "%$searchMe%", "%$searchMe%", "%$searchMe%");
$stmt = $db->prepare($query);
$stmt->execute($params);
$societes = $stmt->fetchAll();

// personnes
$query = "SELECT *
FROM
personne
WHERE nom LIKE ?
OR telephone LIKE ?
OR prenom LIKE ?
OR email LIKE ?
ORDER BY nom ASC";
$params = array("%$searchMe%", "%$searchMe%", "%$searchMe%", "%$searchMe%");
$stmt = $db->prepare($query);
$stmt->execute($params);
$contacts = $stmt->fetchAll();

// factures
$query = "SELECT *
FROM
facture
WHERE motif_prestation LIKE ?
OR numero LIKE ?
ORDER BY date_facturation DESC";
$params = array("%$searchMe%", "%$searchMe%");
$stmt = $db->prepare($query);
$stmt->execute($params);
$factures = $stmt->fetchAll();

if (sizeof($contacts) <= 0 && sizeof($factures) <= 0 && sizeof($societes) <= 0) {
    // code...
}

// Titre de la page
$titre="Recherche";
 ?>
