<?php 
require_once 'db.php';
$db = new DbConnect();

$db->getConnect();

var_dump($db->servername);die;
$db->getConnect();


$sqlQuery = 'select * from users';
$stmt = $db->conn->prepare($sqlQuery);

$stmt->execute();

$result = $stmt->fetchAll();

echo "<pre>";
print_r($result);
 ?>