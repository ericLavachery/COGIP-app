<?php
	$idcontact=$_GET['id'];
	// personnes 
	$query =
		"SELECT 
		personne.id,
		personne.nom, 
		personne.prenom, 
		personne.telephone, 
		personne.email, 
		societe.nom AS nom_societe, 
		societe.adresse AS adresse_societe,
		societe.id AS id_societe
		FROM personne, societe
		WHERE personne.societe_id = societe.id
		AND personne.id = $idcontact";

	$personnes = $db->query($query)->fetch();
	$titre = "COGIP - fiche contact de ". $personnes['nom']. " " . $personnes['prenom'];

	// factures
	$query = 
		"SELECT 
		facture.id, 
		facture.numero, 
		facture.date_facturation,
		facture.motif_prestation
		FROM facture, personne
		WHERE facture.personne_id = personne.id
		AND personne.id = $idcontact 
		ORDER BY facture.id";

	$stmt = $db->query($query);
	$factures = $stmt->fetchAll();

?>