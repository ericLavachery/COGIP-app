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
	$titre = "COGIP - Modification fiche contact de ". $personnes['nom']. " " . $personnes['prenom'];

	//societes

	$query = 
	"SELECT nom, id
	 FROM societe";
	$stmt = $db->query($query);
	$societes = $stmt->fetchAll();

