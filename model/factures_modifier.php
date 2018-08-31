<?php
$idfacture=$_GET['id'];
$message = '';

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

//contacts
$query =
"SELECT nom, prenom, id
FROM personne";
$stmt = $db->query($query);
$contacts = $stmt->fetchAll();






// Si utilisation du bouton MODIFIER
if(isset($_POST['btn'])){
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
    $pays = filter_var($_POST['pays'], FILTER_SANITIZE_STRING);
    $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT);
    $tva = filter_var($_POST['tva'], FILTER_SANITIZE_STRING);
    $type_soc_id = $_POST['type_soc_id'];

    if(!empty($nom) && !empty($adresse) && !empty($pays) && !empty($telephone) && !empty($tva) && !empty($type_soc_id)) {
        //changer données
		$db->beginTransaction();
		$db->exec("UPDATE societe SET nom='$nom',adresse='$adresse',telephone='$telephone',pays='$pays',tva='$tva',type_soc_id='$type_soc_id' WHERE id = $idsociete; ");
		$db->commit();

        $message = "Bien ouej JC";
    }else{
        $message = "Tu crains JC";
    }
}

$titre = "Modification facture ". $facture['numero'];
?>
