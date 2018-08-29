<?php
// connection à la db par pdo
try {
    $servername = "localhost";
    $dbname = "id6935654_cogip";
    include_once '007.php';
  	$dbConnection = "mysql:host=$servername;dbname=$dbname";
    $namesUFT8= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $db = new PDO($dbConnection, $dbuser, $dbpwd, $namesUFT8);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    $msg = 'PDO error in ' . $e->getFile() . ' line ' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}
?>
