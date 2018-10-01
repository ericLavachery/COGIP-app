<?php

$titre = "Nouvelle société";
$nom = '';
$adresse = '';
$pays = '';
$tva = '';
$telephone = '';
$type_soc_id = '';
$messageOK = '';
$messageKO = '';

$query = "SELECT * FROM type_soc";
$stmt = $db->query($query);
$types = $stmt->fetchAll();

// Si utilisation du bouton "Ajouter dans le contact"
if(isset($_POST['btn'])){
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
    $pays = filter_var($_POST['pays'], FILTER_SANITIZE_STRING);
    $tva = filter_var($_POST['tva'], FILTER_SANITIZE_STRING);
    $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT);
    $type_soc_id = $_POST['type_soc_id'];

    if(!empty($nom) && !empty($adresse) && !empty($pays) && !empty($telephone) && !empty($tva)) {
        //insérer nouvelles données
        try{
            $add_value = $db->query
            ('INSERT INTO societe(nom, adresse, telephone, pays, tva, type_soc_id) VALUES("'.$nom.'", "'.$adresse.'", "'.$telephone.'", "'.$pays.'", "'.$tva.'", "'.$type_soc_id.'")');

            $messageOK = "Bien ouej JC ! La société " . $nom . " a bien été ajoutée." ;
            $nom = '';
            $adresse = '';
            $pays = '';
            $tva = '';
            $telephone = '';
            $type_soc_id = '';

        }catch (Exception $e) {

            $messageKO = 'Cette société existe déjà';
        }
    }
}

?>
