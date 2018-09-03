<?php
$idcontact=$_GET['id'];
$message = '';

try {
	$delete_contact = $db->exec("DELETE FROM personne WHERE personne.id= $idcontact;");
	header('Location: index.php?page=lesgens_liste');
}catch (Exception $e) {
	$message = 'Vous ne pouvez pas supprimer cet utilisateur, car son nom figure sur des factures';

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

	$titre = $personnes['prenom'] . ' ' . $personnes['nom'];
}
?>
