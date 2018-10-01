<?php
$idfacture=$_GET['id'];
$messageOK = '';
$messageKO = '';

// détail facture
$query = "SELECT *
FROM facture, societe, personne
WHERE facture.personne_id = personne.id
AND facture.societe_id = societe.id
AND facture.id = $idfacture";
$stmt = $db->query($query);
$facture = $stmt->fetch();

$numero = $facture['numero'];
$date_facturation = $facture['date_facturation'];
$motif_prestation = $facture['motif_prestation'];
$personne_id = $facture['personne_id'];
$societe_id = $facture['societe_id'];

//contacts
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

// Si utilisation du bouton MODIFIER
if(isset($_POST['btn'])){
    $date_facturation = filter_var($_POST['date_facturation'], FILTER_SANITIZE_STRING);
    $numero = filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT);
    $motif_prestation = filter_var($_POST['motif_prestation'], FILTER_SANITIZE_STRING);
    $personne_id = $_POST['personne_id'];

    // va chercher la société du contact
    $query = "SELECT *
    FROM personne
    WHERE id = $personne_id";
    $stmt = $db->query($query);
    $societe = $stmt->fetch();
    // que voili
    $societe_id = $societe['societe_id'];

    if(!empty($date_facturation) && !empty($numero) && !empty($motif_prestation) && !empty($personne_id)) {
        //changer données
        $db->beginTransaction();
        $db->exec("UPDATE facture SET date_facturation='$date_facturation',numero='$numero',motif_prestation='$motif_prestation',personne_id='$personne_id',societe_id='$societe_id' WHERE id = $idfacture; ");
        $db->commit();

        $messageOK = "Bien ouej JC! La facture n°".$numero." a bien été modifiée";
    }else{
        $messageKO = "Tu crains JC! Ce numéro de facture existe déjà";
    }
}

$titre = "Modification facture ". $facture['numero'];
?>
