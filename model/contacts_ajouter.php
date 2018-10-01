<?php

$titre = "Nouveau contact";
$nom = '';
$prenom = '';
$telephone = '';
$email = '';
$val_email = '';
$societe_id = '';
$messageOK = '';
$messageKO = '';

$query =
"SELECT nom,id
FROM societe
ORDER BY societe.nom
ASC ";
$stmt = $db->query($query);
$societes = $stmt->fetchAll();

// Si utilisation du bouton "Ajouter dans le contact"
if(isset($_POST['btn'])){
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
    $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $val_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $societe_id = $_POST['societe_id'];

    if(!empty($nom) && !empty($prenom) && !empty($telephone) && !empty($val_email)) {
        //insérer nouvelles données
        try{
            $add_value = $db->exec('INSERT INTO personne(nom, prenom, telephone, email, societe_id) VALUES("'.$nom.'", "'.$prenom.'", "'.$telephone.'", "'.$email.'", "'.$societe_id.'")');

            $messageOK = "Bien ouèj JC! Le contact " . $prenom." ".$nom." a bien été ajouté.";
            $nom = '';
            $prenom = '';
            $telephone = '';
            $email = '';
            $val_email = '';
            $societe_id = '';


        }catch (Exception $e) {

            $messageKO = "Tu crains JC! Ce contact existe déjà";
        }
    }
}



?>
