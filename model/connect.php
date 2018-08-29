<?php
/*Pour se connecter à la DB*/
try {
  	$dbConnection = 'mysql:host=databases.000webhost.com;dbname=id6935654_cogip';
    $db = new PDO($dbConnection, 'charset=utf8', 'id6953654_jcranu', 'jcranu444719'); 
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}

?>