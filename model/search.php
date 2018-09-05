<?php
$search_message = '';
if (isset($_GET['searchMe'])) {
    $searchMe = $_GET['searchMe'];
    if (strlen($searchMe) <= 1) {
        $search_message = '"' . $searchMe . '"' . " c'est trop court comme recherche, faut pas déc!";
        $searchMe = '';
    } else {

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
            $search_message = 'Aucun élément trouvé pour "' . $searchMe . '"';
        }

    }
} else {
    $searchMe = '';
}

// Titre de la page
$titre="Recherche";
?>
