<?php

$titre = "Nouvelle facture";
$nmro = '';
$datef = '';
$motif = '';
//$societe = '';
$personne_id = '';
$messageOK = '';
$messageKO = '';

$query =
"SELECT
personne.nom,
personne.prenom,
personne.id,
societe.nom AS nom_societe,
societe.id AS id_societe
FROM personne, societe
WHERE personne.societe_id = societe.id
ORDER BY societe.nom, personne.nom";
$stmt = $db->query($query);
$contacts = $stmt->fetchAll();

// Si utilisation du bouton "Ajouter dans la facture"
if(isset($_POST['btn'])){
    $nmro = filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT);
    $datef = filter_var($_POST['date_facturation'], FILTER_SANITIZE_NUMBER_INT);
    $motif = filter_var($_POST['motif_prestation'], FILTER_SANITIZE_STRING);
    /*$societe = $_POST['societe_id'];*/
    $personne_id = $_POST['personne_id'];
    $btn_delete = isset($_POST['btn_delete']);

    // va chercher la société du contact
    $query = "SELECT *
    FROM personne
    WHERE id = $personne_id";
    $stmt = $db->query($query);
    $societe = $stmt->fetch();

    $societe_id = $societe['societe_id'];

    if(!empty($nmro) && !empty($datef) && !empty($motif)) {
        //insérer nouvelles
        try{
            $add_value = $db->query
            ('INSERT INTO facture(numero, date_facturation, motif_prestation,societe_id,personne_id) VALUES("'.$nmro.'", "'.$datef.'", "'.$motif.'", "'.$societe_id.'", "'.$personne_id.'")');

            $messageOK = "Bien ouej JC ! La facture n°" . $nmro . " a bien été ajoutée " ;
            $nmro = '';
            $datef = '';
            $motif = '';
            $societe_id = '';
            $personne_id = '';
        }catch (Exception $e) {

            $messageKO = 'Ce numéro de facture existe déjà';
        }
    }
}

?>
