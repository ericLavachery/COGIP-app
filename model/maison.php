<?php
// les 5 dernières sociétés
$query = "SELECT * FROM societe, type where societe.type_soc_id = type.id order by id desc limit 5";
$stmt = $db->query($query);
$societes = $stmt->fetchAll();
// Titre de la page
$titre="COGIP : Ici maison!";
 ?>
