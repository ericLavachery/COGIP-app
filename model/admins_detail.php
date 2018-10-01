<?php
//admin
$idadmin = $_GET['id'];
$query =
"SELECT *
FROM admins
WHERE id = $idadmin
";
$stmt = $db->query($query);
$admin = $stmt->fetch();
$titre = $admin['nom'];
?>
