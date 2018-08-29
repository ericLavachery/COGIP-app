<?php
// les 5 dernières sociétés
$query = "SELECT * FROM societe, type_soc where societe.type_soc_id = type_soc.id order by societe.id desc limit 5";
$stmt = $db->query($query);
$societes = $stmt->fetchAll();
// Titre de la page
$titre="COGIP : Ici maison!";
 ?>
