<?php
$idcontact=$_GET['id'];
$message = '';

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

$nom = $personnes['nom'];
$prenom = $personnes['prenom'];
$telephone = $personnes['telephone'];
$email = $personnes['email'];
$societe_id = $personnes['id_societe'];

//societes
$query =
"SELECT nom, id
FROM societe";
$stmt = $db->query($query);
$societes = $stmt->fetchAll();


// Si utilisation du bouton MODIFIER
if(isset($_POST['btn'])){
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
    $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $val_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $societe_id = $_POST['id_societe'];

    if(!empty($nom) && !empty($prenom) && !empty($telephone) && !empty($val_email)) {
        //changer données
		$db->beginTransaction();
		$db->exec("UPDATE personne SET nom='$nom',prenom='$prenom',telephone='$telephone',email='$val_email',societe_id='$societe_id' WHERE id = $idcontact; ");
		$db->commit();

        $message = "Bien ouej JC";
    }else{
        $message = "Tu crains JC";
    }
}

$titre = "Modification fiche contact de ". $personnes['nom']. " " . $personnes['prenom'];
?>
