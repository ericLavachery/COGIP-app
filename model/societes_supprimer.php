<?php
$idsociete=$_GET['id'];
$message = '';

try {
	$delete_contact = $db->exec("DELETE FROM societe WHERE societe.id= $idsociete;");
	header('location: index.php?page=lesboites_liste');
}catch (Exception $e) {
	$message = 'Vous ne pouvez pas supprimer cette société, car son nom figure sur des factures ou des contacts';

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
	$titre = $societe['nom'];

}
?>
