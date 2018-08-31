<?php
$idsociete=$_GET['id'];
$message = '';

// détail société
$query = "SELECT *
FROM societe, type_soc
WHERE societe.type_soc_id = type_soc.id
AND societe.id = $idsociete
ORDER BY societe.nom ASC";
$stmt = $db->query($query);
$societe = $stmt->fetch();

$nom = $societe['nom'];
$adresse = $societe['adresse'];
$pays = $societe['pays'];
$telephone = $societe['telephone'];
$tva = $societe['tva'];
$type_soc_id = $societe['type_soc_id'];

//types de sociétés
$query =
"SELECT type, id
FROM type_soc";
$stmt = $db->query($query);
$types = $stmt->fetchAll();


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

$titre = "Modification société ". $societe['nom'];
?>
