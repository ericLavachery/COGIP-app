<?php
/*
* Le fichier connect.php est le fichier qui s'occupe de la connexion à la base de données.
* Ici, la connexion à la DB se fait en PDO.
*/
try {
  	$dbConnection = 'mysql:host=databases.000webhost.com;dbname=id6935654_cogip';
    $db = new PDO($dbConnection, 'charset=utf8', 'id6953654_jcranu', 'jcranu444719'); 
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}

?>