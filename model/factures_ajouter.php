<?php
// require_once('connect.php');
$titre = "Nouvelle facture";
$nmro = '';
$datef = '';
$motif = '';
$societe = '';
$personne = '';
$message = '';
//select société
$query = "SELECT
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
$personnes = $stmt->fetchAll();


// Si utilisation du bouton "Ajouter dans la facture"
if(isset($_POST['btn'])){
    $nmro = filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT);
    $datef = filter_var($_POST['date_facturation'], FILTER_SANITIZE_NUMBER_INT);
    $motif = filter_var($_POST['motif_prestation'], FILTER_SANITIZE_STRING);
    $societe = $_POST['societe_id'];
    $personne = $_POST['personne_id'];
    $btn_delete = isset($_POST['btn_delete']);


    if(!empty($nmro) && !empty($datef) && !empty($motif)) {
        //insérer nouvelles données
        $add_value = $db->query
        ('INSERT INTO facture(numero, date_facturation, motif_prestation,societe_id,personne_id) VALUES("'.$nmro.'", "'.$datef.'", "'.$motif.'", "'.$societe.'", "'.$personne.'")');

        $nmro = '';
        $datef = '';
        $motif = '';
        $societe = '';
        $personne = '';

        $message = "Bien ouej JC";
    }else{
        $message = "Tu crains JC";
    }
}
?>
