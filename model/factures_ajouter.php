<?php
// require_once('connect.php');
$titre = "Nouvelle facture";
$nmro = '';
$datef = '';
$motif = '';
//$societe = '';
$personne_id = '';
$message = '';
//select société
/*$query = "SELECT
nom, id
FROM societe
ORDER BY societe.nom
ASC ";
$societes = $db->query($query)->fetchAll();

$query = "SELECT
nom, prenom, id
FROM personne
ORDER BY personne.nom
ASC ";
$stmt = $db->query($query);
$personnes = $stmt->fetchAll();*/
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
        //insérer nouvelles données
        $add_value = $db->query
        ('INSERT INTO facture(numero, date_facturation, motif_prestation,societe_id,personne_id) VALUES("'.$nmro.'", "'.$datef.'", "'.$motif.'", "'.$societe_id.'", "'.$personne_id.'")');

        $nmro = '';
        $datef = '';
        $motif = '';
        $societe_id = '';
        $personne_id = '';

        $message = "Bien ouej JC";
    }else{
        $message = "Tu crains JC";
    }
}
?>
