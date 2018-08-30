<?php
if (isset($_GET['ctype'])) {
    $ctype = $_GET['ctype'];
} else {
    $ctype = '';
}

if ($ctype == 'cln') {
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
    AND type_soc.type = 'Client'
    ORDER BY societe.nom ASC";
} elseif ($ctype == 'frn') {
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
    AND type_soc.type = 'Fournisseur'
    ORDER BY societe.nom ASC";
} else {
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
}

$stmt = $db->query($query);
$societes = $stmt->fetchAll();

// Titre de la page
$titre="COGIP : Sociétés";
 ?>
