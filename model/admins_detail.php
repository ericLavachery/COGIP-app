<?php
//admin
$idadmins = $_GET['id'];
$query =
"SELECT *
FROM admins
WHERE id = $idadmins
";
$stmt = $db->query($query);
$admins = $stmt->fetch();
$titre = $admins['nom'];
?>
